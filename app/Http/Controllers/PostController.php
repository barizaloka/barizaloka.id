<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View as ViewFacade;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::with(['author', 'category', 'tags'])
            ->published()
            ->latest('published_at')
            ->paginate(9);

        $featuredPost = Post::with(['author', 'category'])
            ->published()
            ->featured()
            ->latest('published_at')
            ->first();

        $categories = Category::whereHas('posts', fn ($q) => $q->published())
            ->withCount(['posts' => fn ($q) => $q->published()])
            ->orderBy('name')
            ->get();

        $popularPosts = Post::with(['author', 'category'])
            ->published()
            ->orderByDesc('views_count')
            ->limit(5)
            ->get();

        return view('blog.index', compact('posts', 'featuredPost', 'categories', 'popularPosts'));
    }

    public function show(string $year, string $month, string $slug): View
    {
        $post = Post::with(['author', 'category', 'tags'])
            ->published()
            ->whereYear('published_at', $year)
            ->whereMonth('published_at', $month)
            ->where('slug', $slug)
            ->where('permalink_format', 'tahun_bulan_slug')
            ->firstOrFail();

        return $this->renderPost($post);
    }

    public function showBySlug(string $slug): View
    {
        $post = Post::with(['author', 'category', 'tags'])
            ->published()
            ->where('slug', $slug)
            ->where('permalink_format', 'slug')
            ->firstOrFail();

        return $this->renderPost($post);
    }

    /**
     * Legacy articles used to live at /{slug} before moving to /artikel/{slug}.
     * Redirect 301 so search rankings and old backlinks carry over.
     */
    public function redirectLegacySlug(string $slug): RedirectResponse
    {
        Post::published()
            ->where('slug', $slug)
            ->where('permalink_format', 'slug')
            ->firstOrFail();

        return redirect()->route('posts.showBySlug', ['slug' => $slug], 301);
    }

    private function renderPost(Post $post): View
    {
        $post->incrementViews();

        ViewFacade::share('currentCategoryId', $post->category_id);

        $relatedPosts = Post::with(['author', 'category'])
            ->published()
            ->where('id', '!=', $post->id)
            ->where(function ($query) use ($post) {
                $query->where('category_id', $post->category_id)
                    ->orWhereHas('tags', fn ($q) => $q->whereIn('tags.id', $post->tags->pluck('id')));
            })
            ->latest('published_at')
            ->limit(3)
            ->get();

        return view('blog.show', compact('post', 'relatedPosts'));
    }

    public function category(Category $category): View
    {
        ViewFacade::share('currentCategoryId', $category->id);

        $posts = Post::with(['author', 'category', 'tags'])
            ->published()
            ->where('category_id', $category->id)
            ->latest('published_at')
            ->paginate(9);

        return view('blog.category', compact('category', 'posts'));
    }

    public function tag(Tag $tag): View
    {
        $posts = Post::with(['author', 'category', 'tags'])
            ->published()
            ->whereHas('tags', fn ($q) => $q->where('tags.id', $tag->id))
            ->latest('published_at')
            ->paginate(9);

        return view('blog.tag', compact('tag', 'posts'));
    }

    public function search(Request $request): View
    {
        $query = trim((string) $request->string('q'));

        $posts = Post::with(['author', 'category'])
            ->published()
            ->when($query !== '', function ($q) use ($query) {
                $q->where(function ($inner) use ($query) {
                    $inner->where('title', 'like', "%{$query}%")
                        ->orWhere('excerpt', 'like', "%{$query}%")
                        ->orWhere('content', 'like', "%{$query}%");
                });
            })
            ->latest('published_at')
            ->paginate(9)
            ->withQueryString();

        return view('blog.search', compact('posts', 'query'));
    }
}
