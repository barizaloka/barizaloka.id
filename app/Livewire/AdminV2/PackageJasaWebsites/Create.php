<?php

namespace App\Livewire\AdminV2\PackageJasaWebsites;

use App\Models\PackageJasaWebsite;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.admin')]
class Create extends Component
{
    public string $name = '';

    public string $slug = '';

    public string $tagline = '';

    public ?int $price = null;

    public string $price_label = '';

    public string $price_period = 'per tahun';

    public array $features = [
        ['text' => '', 'indent' => false],
    ];

    public string $cta_label = '';

    public string $whatsapp_message = '';

    public bool $is_featured = false;

    public string $badge_label = '';

    public int $order = 0;

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
            'slug' => 'required|string|alpha_dash|max:255|unique:package_jasa_websites,slug',
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

        PackageJasaWebsite::create($validated);

        session()->flash('success', 'Paket Jasa Website baru berhasil ditambahkan.');

        return redirect()->route('admin-v2.package-jasa-websites.index');
    }

    public function render()
    {
        return view('livewire.admin-v2.package-jasa-websites.create');
    }
}
