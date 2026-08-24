<?php

namespace App\Livewire\AdminV2\Tags;

use App\Models\Tag;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('components.layouts.admin')]
class Index extends Component
{
    use WithPagination;

    public string $search = '';

    public bool $showModal = false;

    public ?int $editingTagId = null;

    public string $name = '';

    public string $slug = '';

    public function updatedName($value): void
    {
        if (! $this->editingTagId) {
            $this->slug = Str::slug($value);
        }
    }

    public function openCreateModal(): void
    {
        $this->reset(['editingTagId', 'name', 'slug']);
        $this->resetValidation();
        $this->showModal = true;
    }

    public function openEditModal(Tag $tag): void
    {
        $this->editingTagId = $tag->id;
        $this->name = $tag->name;
        $this->slug = $tag->slug;
        $this->resetValidation();
        $this->showModal = true;
    }

    public function save(): void
    {
        $validated = $this->validate([
            'name' => 'required|string|max:100',
            'slug' => 'required|string|alpha_dash|max:100|unique:tags,slug,'.$this->editingTagId,
        ]);

        if ($this->editingTagId) {
            $tag = Tag::findOrFail($this->editingTagId);
            $tag->update($validated);
            session()->flash('success', 'Tag berhasil diperbarui.');
        } else {
            Tag::create($validated);
            session()->flash('success', 'Tag berhasil ditambahkan.');
        }

        $this->showModal = false;
        $this->reset(['editingTagId', 'name', 'slug']);
    }

    public function delete(Tag $tag): void
    {
        $tag->delete();
        session()->flash('success', 'Tag berhasil dihapus.');
    }

    public function render()
    {
        $tags = Tag::query()
            ->withCount('posts')
            ->when($this->search, fn ($q) => $q->where('name', 'like', '%'.$this->search.'%')->orWhere('slug', 'like', '%'.$this->search.'%'))
            ->orderBy('name')
            ->paginate(15);

        return view('livewire.admin-v2.tags.index', [
            'tags' => $tags,
        ]);
    }
}
