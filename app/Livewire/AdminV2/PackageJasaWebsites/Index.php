<?php

namespace App\Livewire\AdminV2\PackageJasaWebsites;

use App\Models\PackageJasaWebsite;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('components.layouts.admin')]
class Index extends Component
{
    use WithPagination;

    public string $search = '';

    public function delete(PackageJasaWebsite $package): void
    {
        $package->delete();
        session()->flash('success', 'Paket Jasa Website berhasil dihapus.');
    }

    public function render()
    {
        $packages = PackageJasaWebsite::query()
            ->when($this->search, fn ($q) => $q->where('name', 'like', '%'.$this->search.'%')->orWhere('tagline', 'like', '%'.$this->search.'%'))
            ->ordered()
            ->paginate(10);

        return view('livewire.admin-v2.package-jasa-websites.index', [
            'packages' => $packages,
        ]);
    }
}
