<div class="max-w-4xl mx-auto space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-zinc-900 dark:text-zinc-100">Detail Proyek</h1>
            <p class="text-sm text-zinc-500 dark:text-zinc-400">Informasi lengkap proyek portofolio.</p>
        </div>
        <div class="flex gap-2">
            <flux:button variant="ghost" icon="arrow-left" :href="route('admin-v2.projects.index')" wire:navigate>
                Kembali
            </flux:button>
            <flux:button variant="primary" icon="pencil-square" :href="route('admin-v2.projects.edit', $project)" wire:navigate>
                Edit Proyek
            </flux:button>
        </div>
    </div>

    <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-6 shadow-xs">
        <div class="space-y-2">
            <div class="flex items-center gap-2">
                <flux:badge size="sm" color="amber">{{ ucfirst($project->category ?? 'Umum') }}</flux:badge>
                @if($project->is_featured)
                    <flux:badge size="sm" color="emerald">Unggulan</flux:badge>
                @endif
                <span class="text-xs text-zinc-400 font-mono">Urutan: {{ $project->order }}</span>
            </div>
            <h2 class="text-3xl font-extrabold text-zinc-900 dark:text-zinc-100">{{ $project->title }}</h2>
            <div class="text-sm text-zinc-500 flex items-center gap-2">
                <span>Klien: <strong>{{ $project->client_name ?: 'Internal' }}</strong></span>
                @if($project->url)
                    <span>•</span>
                    <a href="{{ $project->url }}" target="_blank" class="text-sky-600 hover:underline flex items-center gap-1">
                        <span>{{ $project->url }}</span>
                        <flux:icon name="arrow-top-right-on-square" class="size-3" />
                    </a>
                @endif
            </div>
        </div>

        @if($project->thumbnail)
            <div class="rounded-xl overflow-hidden max-h-96 border border-zinc-200 dark:border-zinc-800">
                <img src="{{ Storage::url($project->thumbnail) }}" class="w-full h-full object-cover" alt="{{ $project->title }}">
            </div>
        @endif

        @if($project->summary)
            <div class="p-4 rounded-xl bg-zinc-50 dark:bg-zinc-800/50 font-medium text-zinc-700 dark:text-zinc-300 text-sm border-l-4 border-amber-500">
                {{ $project->summary }}
            </div>
        @endif

        <div class="prose dark:prose-invert max-w-none text-zinc-800 dark:text-zinc-200 leading-relaxed">
            {!! $project->description !!}
        </div>
    </div>
</div>
