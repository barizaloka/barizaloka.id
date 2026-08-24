<?php

namespace App\Livewire\AdminV2\Posts;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Rules\UniqueSlugGlobal;
use App\Rules\UniqueSlugPerMonth;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('components.layouts.admin')]
class Edit extends Component
{
    use WithFileUploads;

    public Post $post;

    public string $title = '';

    public string $slug = '';

    public string $excerpt = '';

    public string $content = '';

    public ?int $category_id = null;

    public array $tag_ids = [];

    public ?int $user_id = null;

    public string $status = 'draft';

    public ?string $published_at = null;

    public string $permalink_format = 'tahun_bulan_slug';

    public bool $is_featured = false;

    public string $meta_title = '';

    public string $meta_description = '';

    public $featured_image = null;

    public ?string $existing_image = null;

    public function mount(Post $post): void
    {
        $this->post = $post;
        $this->title = $post->title;
        $this->slug = $post->slug;
        $this->excerpt = $post->excerpt ?? '';
        $this->content = $post->content ?? '';
        $this->category_id = $post->category_id;
        $this->tag_ids = $post->tags()->pluck('tags.id')->map(fn ($id) => (string) $id)->toArray();
        $this->user_id = $post->user_id;
        $this->status = $post->status;
        $this->published_at = $post->published_at ? $post->published_at->format('Y-m-d\TH:i') : null;
        $this->permalink_format = $post->permalink_format ?? 'tahun_bulan_slug';
        $this->is_featured = (bool) $post->is_featured;
        $this->meta_title = $post->meta_title ?? '';
        $this->meta_description = $post->meta_description ?? '';
        $this->existing_image = $post->featured_image;
    }

    public function updatedTitle($value): void
    {
        if (empty($this->slug)) {
            $this->slug = Str::slug($value);
        }
    }

    public function save()
    {
        $rules = [
            'title' => 'required|string|max:255',
            'slug' => [
                'required',
                'string',
                'alpha_dash',
                'max:255',
                $this->permalink_format === 'slug'
                    ? new UniqueSlugGlobal($this->post->id)
                    : new UniqueSlugPerMonth($this->published_at, $this->post->id),
            ],
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
            'category_id' => 'nullable|exists:categories,id',
            'tag_ids' => 'array',
            'tag_ids.*' => 'exists:tags,id',
            'user_id' => 'required|exists:users,id',
            'status' => 'required|in:draft,published,scheduled',
            'published_at' => 'nullable|date',
            'permalink_format' => 'required|in:tahun_bulan_slug,slug',
            'is_featured' => 'boolean',
            'meta_title' => 'nullable|string|max:70',
            'meta_description' => 'nullable|string|max:160',
            'featured_image' => 'nullable|image|max:2048',
        ];

        $validated = $this->validate($rules);

        if ($this->featured_image) {
            $imagePath = $this->featured_image->store('blog/images', 'public');
            $validated['featured_image'] = $imagePath;
        }

        unset($validated['tag_ids']);

        $this->post->update($validated);
        $this->post->tags()->sync($this->tag_ids);

        session()->flash('success', 'Postingan berhasil diperbarui.');

        return redirect()->route('admin-v2.posts.index');
    }

    public function render()
    {
        $categories = Category::orderBy('name')->get();
        $tags = Tag::orderBy('name')->get();
        $users = User::orderBy('name')->get();

        return view('livewire.admin-v2.posts.edit', [
            'categories' => $categories,
            'tags' => $tags,
            'users' => $users,
        ]);
    }
}
