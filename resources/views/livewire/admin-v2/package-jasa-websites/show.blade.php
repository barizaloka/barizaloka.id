<div class="max-w-4xl mx-auto space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-zinc-900 dark:text-zinc-100">Detail Paket Jasa Website</h1>
            <p class="text-sm text-zinc-500 dark:text-zinc-400">Informasi penawaran dan daftar fitur paket.</p>
        </div>
        <div class="flex gap-2">
            <flux:button variant="ghost" icon="arrow-left" :href="route('admin-v2.package-jasa-websites.index')" wire:navigate>
                Kembali
            </flux:button>
            <flux:button variant="primary" icon="pencil-square" :href="route('admin-v2.package-jasa-websites.edit', $package)" wire:navigate>
                Edit Paket
            </flux:button>
        </div>
    </div>

    <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-6 shadow-xs">
        <div class="flex items-start justify-between">
            <div class="space-y-1">
                <div class="flex items-center gap-2">
                    @if($package->badge_label)
                        <flux:badge size="sm" color="amber">{{ $package->badge_label }}</flux:badge>
                    @endif
                    @if($package->is_featured)
                        <flux:badge size="sm" color="emerald">Unggulan</flux:badge>
                    @endif
                </div>
                <h2 class="text-3xl font-extrabold text-zinc-900 dark:text-zinc-100">{{ $package->name }}</h2>
                <p class="text-sm text-zinc-500">{{ $package->tagline }}</p>
            </div>
            <div class="text-right">
                <div class="text-2xl font-black text-emerald-600 dark:text-emerald-400">
                    {{ $package->price_label ?: 'Rp '.number_format($package->price) }}
                </div>
                <div class="text-xs text-zinc-400">{{ $package->price_period }}</div>
            </div>
        </div>

        <div class="border-t border-zinc-200 dark:border-zinc-800 pt-6 space-y-3">
            <h3 class="font-semibold text-base">Fitur yang Termasuk:</h3>
            <ul class="space-y-2">
                @foreach($package->features ?? [] as $feature)
                    <li class="flex items-center gap-2 text-sm {{ !empty($feature['indent']) ? 'ml-6 text-zinc-600 dark:text-zinc-400' : 'font-medium text-zinc-800 dark:text-zinc-200' }}">
                        <flux:icon name="check-circle" class="size-4 text-emerald-500 shrink-0" />
                        <span>{!! $feature['text'] ?? '' !!}</span>
                    </li>
                @endforeach
            </ul>
        </div>

        @if($package->cta_label || $package->whatsapp_message)
            <div class="border-t border-zinc-200 dark:border-zinc-800 pt-6 space-y-2">
                <div class="text-xs font-semibold text-zinc-500 uppercase">Informasi Tombol & Order</div>
                <div class="text-sm"><strong>CTA Label:</strong> {{ $package->cta_label ?: 'Dapatkan Paket' }}</div>
                <div class="text-sm"><strong>Pesan WA Default:</strong> {{ $package->whatsapp_message ?: '-' }}</div>
            </div>
        @endif
    </div>
</div>
