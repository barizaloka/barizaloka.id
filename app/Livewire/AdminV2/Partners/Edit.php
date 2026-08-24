<?php

namespace App\Livewire\AdminV2\Partners;

use App\Models\Partner;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.admin')]
class Edit extends Component
{
    public Partner $partner;

    public string $name = '';

    public string $icon = '';

    public string $location = '';

    public string $url = '';

    public int $order = 0;

    public bool $is_active = true;

    public function mount(Partner $partner): void
    {
        $this->partner = $partner;
        $this->name = $partner->name;
        $this->icon = $partner->icon ?? '';
        $this->location = $partner->location ?? '';
        $this->url = $partner->url ?? '';
        $this->order = (int) $partner->order;
        $this->is_active = (bool) $partner->is_active;
    }

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|string|max:10',
            'location' => 'nullable|string|max:255',
            'url' => 'nullable|url|max:255',
            'order' => 'integer',
            'is_active' => 'boolean',
        ]);

        $this->partner->update($validated);

        session()->flash('success', 'Partner berhasil diperbarui.');

        return redirect()->route('admin-v2.partners.index');
    }

    public function render()
    {
        return view('livewire.admin-v2.partners.edit');
    }
}
