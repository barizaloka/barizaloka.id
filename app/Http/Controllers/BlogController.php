<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
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

        $categories = Category::withCount(['posts' => fn ($q) => $q->published()])
            ->having('posts_count', '>', 0)
            ->orderBy('name')
            ->get();

        $popularPosts = Post::with(['author', 'category'])
            ->published()
            ->orderByDesc('views_count')
            ->limit(5)
            ->get();

        return view('blog.index', compact('posts', 'featuredPost', 'categories', 'popularPosts'));
    }

    public function show(string $slug): View
    {
        $post = Post::with(['author', 'category', 'tags'])
            ->published()
            ->where('slug', $slug)
            ->firstOrFail();

        $post->incrementViews();

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

    public function category(string $slug): View
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $posts = Post::with(['author', 'category', 'tags'])
            ->published()
            ->where('category_id', $category->id)
            ->latest('published_at')
            ->paginate(9);

        return view('blog.category', compact('category', 'posts'));
    }

    public function tag(string $slug): View
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();

        $posts = Post::with(['author', 'category', 'tags'])
            ->published()
            ->whereHas('tags', fn ($q) => $q->where('tags.slug', $slug))
            ->latest('published_at')
            ->paginate(9);

        return view('blog.tag', compact('tag', 'posts'));
    }

    public function search(Request $request): View
    {
        $query = $request->string('q')->trim();

        $posts = Post::with(['author', 'category'])
            ->published()
            ->when($query, function ($q) use ($query) {
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
