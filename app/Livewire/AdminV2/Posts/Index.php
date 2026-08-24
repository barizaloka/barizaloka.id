<?php

namespace App\Livewire\AdminV2\Posts;

use App\Models\Category;
use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('components.layouts.admin')]
class Index extends Component
{
    use WithPagination;

    public string $search = '';

    public string $statusFilter = '';

    public string $categoryFilter = '';

    public array $selectedPosts = [];

    public bool $selectAll = false;

    public function updatedSelectAll($value): void
    {
        if ($value) {
            $this->selectedPosts = $this->getPostsQuery()->pluck('id')->map(fn ($id) => (string) $id)->toArray();
        } else {
            $this->selectedPosts = [];
        }
    }

    public function bulkPublish(): void
    {
        if (empty($this->selectedPosts)) {
            return;
        }

        Post::whereIn('id', $this->selectedPosts)->update([
            'status' => 'published',
            'published_at' => now(),
        ]);

        $this->selectedPosts = [];
        $this->selectAll = false;
        session()->flash('success', 'Postingan terpilih berhasil dipublikasikan.');
    }

    public function bulkUnpublish(): void
    {
        if (empty($this->selectedPosts)) {
            return;
        }

        Post::whereIn('id', $this->selectedPosts)->update([
            'status' => 'draft',
        ]);

        $this->selectedPosts = [];
        $this->selectAll = false;
        session()->flash('success', 'Postingan terpilih dijadikan draft.');
    }

    public function bulkDelete(): void
    {
        if (empty($this->selectedPosts)) {
            return;
        }

        Post::whereIn('id', $this->selectedPosts)->delete();

        $this->selectedPosts = [];
        $this->selectAll = false;
        session()->flash('success', 'Postingan terpilih berhasil dihapus.');
    }

    public function delete(Post $post): void
    {
        $post->delete();
        session()->flash('success', 'Postingan berhasil dihapus.');
    }

    private function getPostsQuery()
    {
        return Post::query()
            ->with(['category', 'author'])
            ->when($this->search, fn ($q) => $q->where('title', 'like', '%'.$this->search.'%')->orWhere('slug', 'like', '%'.$this->search.'%'))
            ->when($this->statusFilter, fn ($q) => $q->where('status', $this->statusFilter))
            ->when($this->categoryFilter, fn ($q) => $q->where('category_id', $this->categoryFilter));
    }

    public function render()
    {
        $posts = $this->getPostsQuery()
            ->latest('created_at')
            ->paginate(10);

        $categories = Category::orderBy('name')->get();

        return view('livewire.admin-v2.posts.index', [
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }
}
