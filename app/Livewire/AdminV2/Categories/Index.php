<?php

namespace App\Livewire\AdminV2\Categories;

use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('components.layouts.admin')]
class Index extends Component
{
    use WithPagination;

    public string $search = '';

    // Form Modal State
    public bool $showModal = false;

    public ?int $editingCategoryId = null;

    public string $name = '';

    public string $slug = '';

    public ?int $parent_id = null;

    public string $description = '';

    public string $meta_title = '';

    public string $meta_description = '';

    public function updatedName($value): void
    {
        if (! $this->editingCategoryId) {
            $this->slug = Str::slug($value);
        }
    }

    public function openCreateModal(): void
    {
        $this->reset(['editingCategoryId', 'name', 'slug', 'parent_id', 'description', 'meta_title', 'meta_description']);
        $this->resetValidation();
        $this->showModal = true;
    }

    public function openEditModal(Category $category): void
    {
        $this->editingCategoryId = $category->id;
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->parent_id = $category->parent_id;
        $this->description = $category->description ?? '';
        $this->meta_title = $category->meta_title ?? '';
        $this->meta_description = $category->meta_description ?? '';
        $this->resetValidation();
        $this->showModal = true;
    }

    public function save(): void
    {
        $rules = [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|alpha_dash|max:255|unique:categories,slug,'.$this->editingCategoryId,
            'parent_id' => 'nullable|exists:categories,id',
            'description' => 'nullable|string',
            'meta_title' => 'nullable|string|max:70',
            'meta_description' => 'nullable|string|max:160',
        ];

        $validated = $this->validate($rules);

        if ($this->editingCategoryId) {
            $category = Category::findOrFail($this->editingCategoryId);
            $category->update($validated);
            session()->flash('success', 'Kategori berhasil diperbarui.');
        } else {
            Category::create($validated);
            session()->flash('success', 'Kategori berhasil ditambahkan.');
        }

        $this->showModal = false;
        $this->reset(['editingCategoryId', 'name', 'slug', 'parent_id', 'description', 'meta_title', 'meta_description']);
    }

    public function delete(Category $category): void
    {
        $category->delete();
        session()->flash('success', 'Kategori berhasil dihapus.');
    }

    public function render()
    {
        $categories = Category::query()
            ->with(['parent'])
            ->withCount('posts')
            ->when($this->search, fn ($q) => $q->where('name', 'like', '%'.$this->search.'%')->orWhere('slug', 'like', '%'.$this->search.'%'))
            ->orderBy('name')
            ->paginate(10);

        $parentCategories = Category::query()
            ->when($this->editingCategoryId, fn ($q) => $q->where('id', '!=', $this->editingCategoryId))
            ->orderBy('name')
            ->get();

        return view('livewire.admin-v2.categories.index', [
            'categories' => $categories,
            'parentCategories' => $parentCategories,
        ]);
    }
}
