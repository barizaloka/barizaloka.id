<?php

namespace App\Livewire\AdminV2\Partners;

use App\Models\Partner;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.admin')]
class Show extends Component
{
    public Partner $partner;

    public function mount(Partner $partner): void
    {
        $this->partner = $partner;
    }

    public function render()
    {
        return view('livewire.admin-v2.partners.show');
    }
}
