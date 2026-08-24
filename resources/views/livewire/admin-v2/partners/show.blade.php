<div class="max-w-2xl mx-auto space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-zinc-900 dark:text-zinc-100">Detail Partner</h1>
            <p class="text-sm text-zinc-500 dark:text-zinc-400">Informasi mitra atau klien.</p>
        </div>
        <div class="flex gap-2">
            <flux:button variant="ghost" icon="arrow-left" :href="route('admin-v2.partners.index')" wire:navigate>
                Kembali
            </flux:button>
            <flux:button variant="primary" icon="pencil-square" :href="route('admin-v2.partners.edit', $partner)" wire:navigate>
                Edit Partner
            </flux:button>
        </div>
    </div>

    <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-4 shadow-xs">
        <div class="flex items-center gap-4">
            <div class="size-16 rounded-2xl bg-zinc-100 dark:bg-zinc-800 flex items-center justify-center text-3xl">
                {{ $partner->icon ?: '🏢' }}
            </div>
            <div>
                <h2 class="text-2xl font-bold text-zinc-900 dark:text-zinc-100">{{ $partner->name }}</h2>
                <p class="text-sm text-zinc-500">{{ $partner->location ?: 'Tidak ada lokasi' }}</p>
            </div>
        </div>

        <div class="border-t border-zinc-200 dark:border-zinc-800 pt-4 space-y-2 text-sm">
            <div><strong>Status:</strong> <flux:badge size="sm" :color="$partner->is_active ? 'emerald' : 'zinc'">{{ $partner->is_active ? 'Aktif' : 'Nonaktif' }}</flux:badge></div>
            <div><strong>Urutan Tampil:</strong> {{ $partner->order }}</div>
            @if($partner->url)
                <div><strong>Website:</strong> <a href="{{ $partner->url }}" target="_blank" class="text-sky-600 hover:underline">{{ $partner->url }}</a></div>
            @endif
        </div>
    </div>
</div>
