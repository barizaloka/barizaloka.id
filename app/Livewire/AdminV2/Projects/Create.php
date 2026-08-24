<?php

namespace App\Livewire\AdminV2\Projects;

use App\Models\Project;
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
            'slug' => 'required|string|alpha_dash|max:255|unique:projects,slug',
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

        Project::create($validated);

        session()->flash('success', 'Proyek portofolio baru berhasil ditambahkan.');

        return redirect()->route('admin-v2.projects.index');
    }

    public function render()
    {
        return view('livewire.admin-v2.projects.create');
    }
}
