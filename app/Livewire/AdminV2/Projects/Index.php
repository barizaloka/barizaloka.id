<?php

namespace App\Livewire\AdminV2\Projects;

use App\Models\Project;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('components.layouts.admin')]
class Index extends Component
{
    use WithPagination;

    public string $search = '';

    public string $categoryFilter = '';

    public function delete(Project $project): void
    {
        $project->delete();
        session()->flash('success', 'Proyek portofolio berhasil dihapus.');
    }

    public function render()
    {
        $projects = Project::query()
            ->when($this->search, fn ($q) => $q->where('title', 'like', '%'.$this->search.'%')->orWhere('client_name', 'like', '%'.$this->search.'%'))
            ->when($this->categoryFilter, fn ($q) => $q->where('category', $this->categoryFilter))
            ->ordered()
            ->paginate(10);

        return view('livewire.admin-v2.projects.index', [
            'projects' => $projects,
        ]);
    }
}
