<?php

namespace App\Livewire\AdminV2\Popups;

use App\Models\Category;
use App\Models\Popup;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('components.layouts.admin')]
class Create extends Component
{
    use WithFileUploads;

    public string $name = '';

    public bool $is_active = true;

    public int $priority = 0;

    public string $target_type = 'all';

    public array $pages = [];

    public string $url_patterns_text = '';

    public array $category_ids = [];

    public string $frequency = 'once_per_session';

    public int $delay_seconds = 0;

    public ?string $start_at = null;

    public ?string $end_at = null;

    public array $slides = [
        [
            'type' => 'image',
            'file' => null,
            'button_label' => '',
            'button_url' => '',
        ],
    ];

    public function addSlide(): void
    {
        $this->slides[] = [
            'type' => 'image',
            'file' => null,
            'button_label' => '',
            'button_url' => '',
        ];
    }

    public function removeSlide(int $index): void
    {
        unset($this->slides[$index]);
        $this->slides = array_values($this->slides);
    }

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required|string|max:255',
            'is_active' => 'boolean',
            'priority' => 'integer',
            'target_type' => 'required|in:all,pages,categories',
            'pages' => 'array',
            'category_ids' => 'array',
            'frequency' => 'required|in:every_load,once_per_session,once_per_day,once_ever',
            'delay_seconds' => 'integer|min:0',
            'start_at' => 'nullable|date',
            'end_at' => 'nullable|date',
            'slides' => 'required|array|min:1',
            'slides.*.type' => 'required|in:image,video',
            'slides.*.file' => 'required|file|max:10240',
            'slides.*.button_label' => 'nullable|string|max:255',
            'slides.*.button_url' => 'nullable|url|max:255',
        ]);

        $urlPatterns = array_filter(array_map('trim', explode(',', $this->url_patterns_text)));

        $popup = Popup::create([
            'name' => $this->name,
            'is_active' => $this->is_active,
            'priority' => $this->priority,
            'target_type' => $this->target_type,
            'pages' => $this->target_type === 'pages' ? $this->pages : null,
            'url_patterns' => $this->target_type === 'pages' ? $urlPatterns : null,
            'category_ids' => $this->target_type === 'categories' ? array_map('intval', $this->category_ids) : null,
            'frequency' => $this->frequency,
            'delay_seconds' => $this->delay_seconds,
            'start_at' => $this->start_at,
            'end_at' => $this->end_at,
        ]);

        foreach ($this->slides as $index => $slideData) {
            $path = $slideData['file']->store('popup-slides', 'public');
            $popup->slides()->create([
                'type' => $slideData['type'],
                'media_path' => $path,
                'button_label' => $slideData['button_label'] ?? null,
                'button_url' => $slideData['button_url'] ?? null,
                'sort_order' => $index,
            ]);
        }

        session()->flash('success', 'Popup promo baru berhasil ditambahkan.');

        return redirect()->route('admin-v2.popups.index');
    }

    public function render()
    {
        $availablePages = Popup::availablePages();
        $categories = Category::orderBy('name')->get();

        return view('livewire.admin-v2.popups.create', [
            'availablePages' => $availablePages,
            'categories' => $categories,
        ]);
    }
}
