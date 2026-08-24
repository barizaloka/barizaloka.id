<?php

namespace App\Livewire\AdminV2\Popups;

use App\Models\Popup;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.admin')]
class Show extends Component
{
    public Popup $popup;

    public function mount(Popup $popup): void
    {
        $this->popup = $popup->load('slides');
    }

    public function render()
    {
        return view('livewire.admin-v2.popups.show');
    }
}
