<?php

namespace App\Livewire\AdminV2\Media;

use App\Models\Media;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

#[Layout('components.layouts.admin')]
class Index extends Component
{
    use WithFileUploads, WithPagination;

    public string $search = '';

    public bool $showUploadModal = false;

    public bool $showEditModal = false;

    public $uploadFile = null;

    public ?int $editingMediaId = null;

    public string $name = '';

    public string $mime_type = '';

    public string $alt_text = '';

    public string $caption = '';

    public function upload(): void
    {
        $this->validate([
            'uploadFile' => 'required|file|max:10240',
        ]);

        $path = $this->uploadFile->store('media', 'public');

        Media::track('public', $path, auth()->id());

        $this->reset(['uploadFile', 'showUploadModal']);
        session()->flash('success', 'File media berhasil diunggah.');
    }

    public function openEditModal(Media $media): void
    {
        $this->editingMediaId = $media->id;
        $this->name = $media->name;
        $this->mime_type = $media->mime_type ?? '';
        $this->alt_text = $media->alt_text ?? '';
        $this->caption = $media->caption ?? '';
        $this->showEditModal = true;
    }

    public function saveEdit(): void
    {
        $validated = $this->validate([
            'alt_text' => 'nullable|string|max:255',
            'caption' => 'nullable|string|max:255',
        ]);

        if ($this->editingMediaId) {
            $media = Media::findOrFail($this->editingMediaId);
            $media->update($validated);
            session()->flash('success', 'Informasi media berhasil diperbarui.');
        }

        $this->showEditModal = false;
        $this->reset(['editingMediaId', 'alt_text', 'caption']);
    }

    public function delete(Media $media): void
    {
        if (Storage::disk($media->disk)->exists($media->path)) {
            Storage::disk($media->disk)->delete($media->path);
        }

        $media->delete();
        session()->flash('success', 'File media berhasil dihapus.');
    }

    public function render()
    {
        $mediaFiles = Media::query()
            ->when($this->search, fn ($q) => $q->where('name', 'like', '%'.$this->search.'%')->orWhere('alt_text', 'like', '%'.$this->search.'%'))
            ->latest()
            ->paginate(12);

        return view('livewire.admin-v2.media.index', [
            'mediaFiles' => $mediaFiles,
        ]);
    }
}
