<div class="max-w-4xl mx-auto space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-zinc-900 dark:text-zinc-100">Detail Popup Promo</h1>
            <p class="text-sm text-zinc-500 dark:text-zinc-400">Informasi konfigurasi dan slide penayangan.</p>
        </div>
        <div class="flex gap-2">
            <flux:button variant="ghost" icon="arrow-left" :href="route('admin-v2.popups.index')" wire:navigate>
                Kembali
            </flux:button>
            <flux:button variant="primary" icon="pencil-square" :href="route('admin-v2.popups.edit', $popup)" wire:navigate>
                Edit Popup
            </flux:button>
        </div>
    </div>

    <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-6 shadow-xs">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-2xl font-bold text-zinc-900 dark:text-zinc-100">{{ $popup->name }}</h2>
                <div class="text-xs text-zinc-500 mt-1">Target: {{ ucfirst($popup->target_type) }} • Prioritas: {{ $popup->priority }}</div>
            </div>
            <flux:badge size="sm" :color="$popup->is_active ? 'emerald' : 'zinc'">
                {{ $popup->is_active ? 'Aktif' : 'Nonaktif' }}
            </flux:badge>
        </div>

        <div class="border-t border-zinc-200 dark:border-zinc-800 pt-4 space-y-4">
            <h3 class="font-semibold text-base">Slide Media ({{ $popup->slides->count() }})</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                @foreach($popup->slides as $slide)
                    <div class="p-4 rounded-xl border border-zinc-200 dark:border-zinc-800 bg-zinc-50 dark:bg-zinc-800/40 space-y-2">
                        <div class="h-40 rounded-lg overflow-hidden border border-zinc-200 dark:border-zinc-800 bg-black">
                            @if($slide->type === 'video')
                                <video src="{{ Storage::url($slide->media_path) }}" class="w-full h-full object-cover" controls></video>
                            @else
                                <img src="{{ Storage::url($slide->media_path) }}" class="w-full h-full object-cover" alt="Slide">
                            @endif
                        </div>
                        @if($slide->button_label)
                            <div class="text-xs"><strong>CTA:</strong> {{ $slide->button_label }} ({{ $slide->button_url }})</div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>

        <div class="border-t border-zinc-200 dark:border-zinc-800 pt-4 grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
            <div><strong>Frekuensi:</strong> {{ Popup::frequencyOptions()[$popup->frequency] ?? $popup->frequency }}</div>
            <div><strong>Jeda Muncul:</strong> {{ $popup->delay_seconds }} detik</div>
            <div><strong>Mulai Tampil:</strong> {{ $popup->start_at ? $popup->start_at->format('d M Y H:i') : 'Tanpa Batas' }}</div>
            <div><strong>Berhenti Tampil:</strong> {{ $popup->end_at ? $popup->end_at->format('d M Y H:i') : 'Tanpa Batas' }}</div>
        </div>
    </div>
</div>
