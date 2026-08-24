<?php

namespace App\Livewire\AdminV2\Popups;

use App\Models\Category;
use App\Models\Popup;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('components.layouts.admin')]
class Edit extends Component
{
    use WithFileUploads;

    public Popup $popup;

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

    public array $slides = [];

    public function mount(Popup $popup): void
    {
        $this->popup = $popup->load('slides');
        $this->name = $popup->name;
        $this->is_active = (bool) $popup->is_active;
        $this->priority = (int) $popup->priority;
        $this->target_type = $popup->target_type;
        $this->pages = $popup->pages ?? [];
        $this->url_patterns_text = implode(', ', $popup->url_patterns ?? []);
        $this->category_ids = array_map('stringval', $popup->category_ids ?? []);
        $this->frequency = $popup->frequency;
        $this->delay_seconds = (int) $popup->delay_seconds;
        $this->start_at = $popup->start_at ? $popup->start_at->format('Y-m-d\TH:i') : null;
        $this->end_at = $popup->end_at ? $popup->end_at->format('Y-m-d\TH:i') : null;

        foreach ($popup->slides as $slide) {
            $this->slides[] = [
                'id' => $slide->id,
                'type' => $slide->type,
                'media_path' => $slide->media_path,
                'file' => null,
                'button_label' => $slide->button_label ?? '',
                'button_url' => $slide->button_url ?? '',
            ];
        }

        if (empty($this->slides)) {
            $this->slides[] = [
                'id' => null,
                'type' => 'image',
                'media_path' => null,
                'file' => null,
                'button_label' => '',
                'button_url' => '',
            ];
        }
    }

    public function addSlide(): void
    {
        $this->slides[] = [
            'id' => null,
            'type' => 'image',
            'media_path' => null,
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
        $this->validate([
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
            'slides.*.button_label' => 'nullable|string|max:255',
            'slides.*.button_url' => 'nullable|url|max:255',
        ]);

        $urlPatterns = array_filter(array_map('trim', explode(',', $this->url_patterns_text)));

        $this->popup->update([
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

        // Sync slides
        $keptIds = [];
        foreach ($this->slides as $index => $slideData) {
            $mediaPath = $slideData['media_path'];
            if (! empty($slideData['file'])) {
                $mediaPath = $slideData['file']->store('popup-slides', 'public');
            }

            if (! empty($slideData['id'])) {
                $slide = $this->popup->slides()->find($slideData['id']);
                if ($slide) {
                    $slide->update([
                        'type' => $slideData['type'],
                        'media_path' => $mediaPath,
                        'button_label' => $slideData['button_label'] ?? null,
                        'button_url' => $slideData['button_url'] ?? null,
                        'sort_order' => $index,
                    ]);
                    $keptIds[] = $slide->id;
                }
            } else {
                $newSlide = $this->popup->slides()->create([
                    'type' => $slideData['type'],
                    'media_path' => $mediaPath,
                    'button_label' => $slideData['button_label'] ?? null,
                    'button_url' => $slideData['button_url'] ?? null,
                    'sort_order' => $index,
                ]);
                $keptIds[] = $newSlide->id;
            }
        }

        $this->popup->slides()->whereNotIn('id', $keptIds)->delete();

        session()->flash('success', 'Popup promo berhasil diperbarui.');

        return redirect()->route('admin-v2.popups.index');
    }

    public function render()
    {
        $availablePages = Popup::availablePages();
        $categories = Category::orderBy('name')->get();

        return view('livewire.admin-v2.popups.edit', [
            'availablePages' => $availablePages,
            'categories' => $categories,
        ]);
    }
}
