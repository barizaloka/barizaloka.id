@props(['post'])

<article class="bg-white border border-[#e0ebe7] rounded-2xl overflow-hidden hover:-translate-y-1 hover:shadow-lg transition-all">
    <a href="{{ $post->permalink() }}" class="block aspect-[16/9] bg-brand-light overflow-hidden">
        <img src="{{ $post->featured_image ? Storage::url($post->featured_image) : url('/og-image.png') }}" alt="{{ $post->title }}" loading="lazy" class="w-full h-full object-cover">
    </a>
    <div class="p-6">
        @if ($post->category)
            <a href="{{ route('blog.category', $post->category) }}" class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3 py-1 rounded-full mb-3">{{ $post->category->name }}</a>
        @endif
        <h3 class="font-brand-serif text-lg font-bold leading-snug mb-2" style="font-family: 'Playfair Display', Georgia, serif;">
            <a href="{{ $post->permalink() }}" class="hover:text-brand-primary transition-colors">{{ $post->title }}</a>
        </h3>
        @if ($post->excerpt)
            <p class="text-sm text-zinc-500 leading-relaxed mb-4">{{ Str::limit($post->excerpt, 110) }}</p>
        @endif
        <div class="flex items-center gap-2 text-xs text-zinc-500">
            <span>{{ $post->author?->name }}</span>
            <span>&middot;</span>
            <span>{{ $post->permalinkDate()->translatedFormat('d M Y') }}</span>
        </div>
    </div>
</article>
