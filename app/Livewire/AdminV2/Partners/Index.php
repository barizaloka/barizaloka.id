<?php

namespace App\Livewire\AdminV2\Partners;

use App\Models\Partner;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('components.layouts.admin')]
class Index extends Component
{
    use WithPagination;

    public string $search = '';

    public function toggleActive(Partner $partner): void
    {
        $partner->update(['is_active' => ! $partner->is_active]);
        session()->flash('success', 'Status partner berhasil diperbarui.');
    }

    public function delete(Partner $partner): void
    {
        $partner->delete();
        session()->flash('success', 'Partner berhasil dihapus.');
    }

    public function render()
    {
        $partners = Partner::query()
            ->when($this->search, fn ($q) => $q->where('name', 'like', '%'.$this->search.'%')->orWhere('location', 'like', '%'.$this->search.'%'))
            ->ordered()
            ->paginate(10);

        return view('livewire.admin-v2.partners.index', [
            'partners' => $partners,
        ]);
    }
}
