<?php

namespace App\Livewire\AdminV2\Faqs;

use App\Models\Faq;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.admin')]
class Edit extends Component
{
    public Faq $faq;

    public string $question = '';

    public string $answer = '';

    public string $category = '';

    public int $order = 0;

    public bool $is_active = true;

    public function mount(Faq $faq): void
    {
        $this->faq = $faq;
        $this->question = $faq->question;
        $this->answer = $faq->answer;
        $this->category = $faq->category ?? '';
        $this->order = (int) $faq->order;
        $this->is_active = (bool) $faq->is_active;
    }

    public function save()
    {
        $validated = $this->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'category' => 'nullable|string|max:255',
            'order' => 'integer',
            'is_active' => 'boolean',
        ]);

        $this->faq->update($validated);

        session()->flash('success', 'FAQ berhasil diperbarui.');

        return redirect()->route('admin-v2.faqs.index');
    }

    public function render()
    {
        return view('livewire.admin-v2.faqs.edit');
    }
}
