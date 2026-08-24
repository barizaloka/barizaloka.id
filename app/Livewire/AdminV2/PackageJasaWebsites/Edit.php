<?php

namespace App\Livewire\AdminV2\PackageJasaWebsites;

use App\Models\PackageJasaWebsite;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.admin')]
class Edit extends Component
{
    public PackageJasaWebsite $package;

    public string $name = '';

    public string $slug = '';

    public string $tagline = '';

    public ?int $price = null;

    public string $price_label = '';

    public string $price_period = 'per tahun';

    public array $features = [];

    public string $cta_label = '';

    public string $whatsapp_message = '';

    public bool $is_featured = false;

    public string $badge_label = '';

    public int $order = 0;

    public function mount(PackageJasaWebsite $package): void
    {
        $this->package = $package;
        $this->name = $package->name;
        $this->slug = $package->slug;
        $this->tagline = $package->tagline ?? '';
        $this->price = $package->price;
        $this->price_label = $package->price_label ?? '';
        $this->price_period = $package->price_period ?? 'per tahun';
        $this->features = is_array($package->features) ? $package->features : [];
        if (empty($this->features)) {
            $this->features = [['text' => '', 'indent' => false]];
        }
        $this->cta_label = $package->cta_label ?? '';
        $this->whatsapp_message = $package->whatsapp_message ?? '';
        $this->is_featured = (bool) $package->is_featured;
        $this->badge_label = $package->badge_label ?? '';
        $this->order = (int) $package->order;
    }

    public function updatedName($value): void
    {
        if (empty($this->slug)) {
            $this->slug = Str::slug($value);
        }
    }

    public function addFeature(): void
    {
        $this->features[] = ['text' => '', 'indent' => false];
    }

    public function removeFeature(int $index): void
    {
        unset($this->features[$index]);
        $this->features = array_values($this->features);
    }

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|alpha_dash|max:255|unique:package_jasa_websites,slug,'.$this->package->id,
            'tagline' => 'nullable|string|max:500',
            'price' => 'required|integer',
            'price_label' => 'required|string|max:50',
            'price_period' => 'required|string|max:50',
            'features' => 'array',
            'features.*.text' => 'required|string',
            'features.*.indent' => 'boolean',
            'cta_label' => 'nullable|string|max:100',
            'whatsapp_message' => 'nullable|string|max:255',
            'is_featured' => 'boolean',
            'badge_label' => 'nullable|string|max:50',
            'order' => 'integer',
        ]);

        $this->package->update($validated);

        session()->flash('success', 'Paket Jasa Website berhasil diperbarui.');

        return redirect()->route('admin-v2.package-jasa-websites.index');
    }

    public function render()
    {
        return view('livewire.admin-v2.package-jasa-websites.edit');
    }
}
