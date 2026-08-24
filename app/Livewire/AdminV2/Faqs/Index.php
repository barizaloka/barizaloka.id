<?php

namespace App\Livewire\AdminV2\Faqs;

use App\Models\Faq;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('components.layouts.admin')]
class Index extends Component
{
    use WithPagination;

    public string $search = '';

    public function toggleActive(Faq $faq): void
    {
        $faq->update(['is_active' => ! $faq->is_active]);
        session()->flash('success', 'Status FAQ berhasil diperbarui.');
    }

    public function delete(Faq $faq): void
    {
        $faq->delete();
        session()->flash('success', 'FAQ berhasil dihapus.');
    }

    public function render()
    {
        $faqs = Faq::query()
            ->when($this->search, fn ($q) => $q->where('question', 'like', '%'.$this->search.'%')->orWhere('answer', 'like', '%'.$this->search.'%'))
            ->ordered()
            ->paginate(10);

        return view('livewire.admin-v2.faqs.index', [
            'faqs' => $faqs,
        ]);
    }
}
