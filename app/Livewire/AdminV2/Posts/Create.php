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
class Create extends Component
{
    use WithFileUploads;

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

    public function mount(): void
    {
        $this->user_id = auth()->id();
        $this->published_at = now()->format('Y-m-d\TH:i');
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
                    ? new UniqueSlugGlobal
                    : new UniqueSlugPerMonth($this->published_at),
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

        $post = Post::create($validated);

        if (! empty($this->tag_ids)) {
            $post->tags()->sync($this->tag_ids);
        }

        session()->flash('success', 'Postingan baru berhasil dibuat.');

        return redirect()->route('admin-v2.posts.index');
    }

    public function render()
    {
        $categories = Category::orderBy('name')->get();
        $tags = Tag::orderBy('name')->get();
        $users = User::orderBy('name')->get();

        return view('livewire.admin-v2.posts.create', [
            'categories' => $categories,
            'tags' => $tags,
            'users' => $users,
        ]);
    }
}
