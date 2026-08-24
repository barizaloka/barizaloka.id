<?php

namespace App\Livewire\AdminV2\Faqs;

use App\Models\Faq;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.admin')]
class Show extends Component
{
    public Faq $faq;

    public function mount(Faq $faq): void
    {
        $this->faq = $faq;
    }

    public function render()
    {
        return view('livewire.admin-v2.faqs.show');
    }
}
