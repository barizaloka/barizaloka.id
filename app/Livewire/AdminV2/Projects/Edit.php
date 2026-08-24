<?php

namespace App\Livewire\AdminV2\Projects;

use App\Models\Project;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('components.layouts.admin')]
class Edit extends Component
{
    use WithFileUploads;

    public Project $project;

    public string $title = '';

    public string $slug = '';

    public string $client_name = '';

    public string $category = 'umkm';

    public string $url = '';

    public string $summary = '';

    public string $description = '';

    public bool $is_featured = false;

    public int $order = 0;

    public string $meta_title = '';

    public string $meta_description = '';

    public $thumbnail = null;

    public ?string $existing_thumbnail = null;

    public function mount(Project $project): void
    {
        $this->project = $project;
        $this->title = $project->title;
        $this->slug = $project->slug;
        $this->client_name = $project->client_name ?? '';
        $this->category = $project->category ?? 'umkm';
        $this->url = $project->url ?? '';
        $this->summary = $project->summary ?? '';
        $this->description = $project->description ?? '';
        $this->is_featured = (bool) $project->is_featured;
        $this->order = (int) $project->order;
        $this->meta_title = $project->meta_title ?? '';
        $this->meta_description = $project->meta_description ?? '';
        $this->existing_thumbnail = $project->thumbnail;
    }

    public function updatedTitle($value): void
    {
        if (empty($this->slug)) {
            $this->slug = Str::slug($value);
        }
    }

    public function save()
    {
        $validated = $this->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|alpha_dash|max:255|unique:projects,slug,'.$this->project->id,
            'client_name' => 'nullable|string|max:255',
            'category' => 'nullable|string|in:pesantren,desa,umkm,komunitas',
            'url' => 'nullable|url|max:255',
            'summary' => 'required|string|max:500',
            'description' => 'nullable|string',
            'is_featured' => 'boolean',
            'order' => 'integer',
            'meta_title' => 'nullable|string|max:70',
            'meta_description' => 'nullable|string|max:160',
            'thumbnail' => 'nullable|image|max:2048',
        ]);

        if ($this->thumbnail) {
            $validated['thumbnail'] = $this->thumbnail->store('portfolio/thumbnails', 'public');
        }

        $this->project->update($validated);

        session()->flash('success', 'Proyek portofolio berhasil diperbarui.');

        return redirect()->route('admin-v2.projects.index');
    }

    public function render()
    {
        return view('livewire.admin-v2.projects.edit');
    }
}
