<div class="max-w-2xl mx-auto space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-zinc-900 dark:text-zinc-100">Detail FAQ</h1>
            <p class="text-sm text-zinc-500 dark:text-zinc-400">Informasi pertanyaan dan jawaban.</p>
        </div>
        <div class="flex gap-2">
            <flux:button variant="ghost" icon="arrow-left" :href="route('admin-v2.faqs.index')" wire:navigate>
                Kembali
            </flux:button>
            <flux:button variant="primary" icon="pencil-square" :href="route('admin-v2.faqs.edit', $faq)" wire:navigate>
                Edit FAQ
            </flux:button>
        </div>
    </div>

    <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-4 shadow-xs">
        <div class="flex items-center justify-between">
            <flux:badge size="sm" color="amber">{{ $faq->category ?: 'Umum' }}</flux:badge>
            <flux:badge size="sm" :color="$faq->is_active ? 'emerald' : 'zinc'">
                {{ $faq->is_active ? 'Aktif' : 'Nonaktif' }}
            </flux:badge>
        </div>

        <h2 class="text-xl font-bold text-zinc-900 dark:text-zinc-100">{{ $faq->question }}</h2>
        
        <div class="p-4 rounded-xl bg-zinc-50 dark:bg-zinc-800/50 text-sm text-zinc-700 dark:text-zinc-300 leading-relaxed">
            {!! nl2br(e($faq->answer)) !!}
        </div>

        <div class="text-xs text-zinc-400 pt-2 border-t border-zinc-200 dark:border-zinc-800">
            Urutan: {{ $faq->order }}
        </div>
    </div>
</div>
