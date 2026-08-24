<?php

namespace App\Livewire\AdminV2\Faqs;

use App\Models\Faq;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.admin')]
class Create extends Component
{
    public string $question = '';

    public string $answer = '';

    public string $category = '';

    public int $order = 0;

    public bool $is_active = true;

    public function save()
    {
        $validated = $this->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'category' => 'nullable|string|max:255',
            'order' => 'integer',
            'is_active' => 'boolean',
        ]);

        Faq::create($validated);

        session()->flash('success', 'FAQ baru berhasil ditambahkan.');

        return redirect()->route('admin-v2.faqs.index');
    }

    public function render()
    {
        return view('livewire.admin-v2.faqs.create');
    }
}
