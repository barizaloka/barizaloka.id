<?php

namespace App\Livewire\AdminV2\PackageJasaWebsites;

use App\Models\PackageJasaWebsite;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.admin')]
class Show extends Component
{
    public PackageJasaWebsite $package;

    public function mount(PackageJasaWebsite $package): void
    {
        $this->package = $package;
    }

    public function render()
    {
        return view('livewire.admin-v2.package-jasa-websites.show');
    }
}
