<div class="max-w-4xl mx-auto space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-zinc-900 dark:text-zinc-100">Detail Postingan</h1>
            <p class="text-sm text-zinc-500 dark:text-zinc-400">Pratinjau detail artikel dan informasi metadata.</p>
        </div>
        <div class="flex gap-2">
            <flux:button variant="ghost" icon="arrow-left" :href="route('admin-v2.posts.index')" wire:navigate>
                Kembali
            </flux:button>
            <flux:button variant="primary" icon="pencil-square" :href="route('admin-v2.posts.edit', $post)" wire:navigate>
                Edit Artikel
            </flux:button>
        </div>
    </div>

    <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-6 shadow-xs">
        <div class="space-y-2">
            <div class="flex items-center gap-2">
                <flux:badge size="sm" :color="$post->status === 'published' ? 'emerald' : 'zinc'">
                    {{ ucfirst($post->status) }}
                </flux:badge>
                @if($post->category)
                    <flux:badge size="sm" color="sky">{{ $post->category->name }}</flux:badge>
                @endif
                <span class="text-xs text-zinc-400">• {{ $post->views_count }} views</span>
            </div>
            <h2 class="text-3xl font-extrabold text-zinc-900 dark:text-zinc-100">{{ $post->title }}</h2>
            <div class="text-xs text-zinc-400 flex items-center gap-2">
                <span>Penulis: {{ $post->author?->name ?? 'Admin' }}</span>
                <span>•</span>
                <span>Dipublikasikan: {{ $post->published_at ? $post->published_at->format('d M Y, H:i') : 'Draft' }}</span>
            </div>
        </div>

        @if($post->featured_image)
            <div class="rounded-xl overflow-hidden max-h-96 border border-zinc-200 dark:border-zinc-800">
                <img src="{{ Storage::url($post->featured_image) }}" class="w-full h-full object-cover" alt="{{ $post->title }}">
            </div>
        @endif

        @if($post->excerpt)
            <div class="p-4 rounded-xl bg-zinc-50 dark:bg-zinc-800/50 italic text-zinc-700 dark:text-zinc-300 text-sm border-l-4 border-emerald-500">
                {{ $post->excerpt }}
            </div>
        @endif

        <div class="prose dark:prose-invert max-w-none text-zinc-800 dark:text-zinc-200 leading-relaxed">
            {!! $post->content !!}
        </div>

        @if($post->tags->count() > 0)
            <div class="pt-4 border-t border-zinc-200 dark:border-zinc-800 flex items-center gap-2 flex-wrap">
                <span class="text-xs font-semibold text-zinc-500">Tag:</span>
                @foreach($post->tags as $tag)
                    <flux:badge size="sm" color="zinc">#{{ $tag->name }}</flux:badge>
                @endforeach
            </div>
        @endif
    </div>
</div>
