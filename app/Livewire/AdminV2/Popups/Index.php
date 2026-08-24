<?php

namespace App\Livewire\AdminV2\Popups;

use App\Models\Popup;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('components.layouts.admin')]
class Index extends Component
{
    use WithPagination;

    public string $search = '';

    public function toggleActive(Popup $popup): void
    {
        $popup->update(['is_active' => ! $popup->is_active]);
        session()->flash('success', 'Status popup berhasil diperbarui.');
    }

    public function delete(Popup $popup): void
    {
        $popup->slides()->delete();
        $popup->delete();
        session()->flash('success', 'Popup promo berhasil dihapus.');
    }

    public function render()
    {
        $popups = Popup::query()
            ->withCount('slides')
            ->when($this->search, fn ($q) => $q->where('name', 'like', '%'.$this->search.'%'))
            ->orderByDesc('priority')
            ->paginate(10);

        return view('livewire.admin-v2.popups.index', [
            'popups' => $popups,
        ]);
    }
}
