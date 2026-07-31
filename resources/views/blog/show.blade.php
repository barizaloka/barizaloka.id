<x-layouts.base
    :title="($post->meta_title ?: $post->title).' — Barizaloka'"
    :description="$post->meta_description ?: Str::limit(strip_tags($post->excerpt ?: $post->content), 160)"
>

    <style>
        .post-content h2 { font-family: 'Playfair Display', Georgia, serif; font-weight: 700; font-size: 1.5rem; margin: 2rem 0 1rem; color: #1a2420; }
        .post-content h3 { font-family: 'Playfair Display', Georgia, serif; font-weight: 700; font-size: 1.25rem; margin: 1.75rem 0 0.75rem; color: #1a2420; }
        .post-content p { margin-bottom: 1.25rem; line-height: 1.8; color: #3f4b47; }
        .post-content a { color: var(--color-brand-primary); text-decoration: underline; }
        .post-content ul, .post-content ol { margin: 0 0 1.25rem 1.5rem; }
        .post-content ul { list-style: disc; }
        .post-content ol { list-style: decimal; }
        .post-content li { margin-bottom: 0.5rem; line-height: 1.7; color: #3f4b47; }
        .post-content img { border-radius: 0.75rem; margin: 1.5rem 0; }
        .post-content blockquote { border-left: 3px solid var(--color-brand-primary); padding-left: 1.25rem; margin: 1.5rem 0; font-style: italic; color: #556a63; }
    </style>

    {{-- ===== HEADER ===== --}}
    <section class="relative text-center py-24 overflow-hidden bg-brand-darker">
        <div class="absolute inset-0" style="background: radial-gradient(ellipse 80% 70% at 50% 60%, rgba(29,158,117,.3) 0%, transparent 70%);"></div>
        <div class="relative z-10 max-w-2xl mx-auto px-6">
            @if ($post->category)
                <a href="{{ route('blog.category', $post->category) }}" class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3">{{ $post->category->name }}</a>
            @endif
            <h1 class="font-brand-serif text-[clamp(1.8rem,4.5vw,2.8rem)] font-extrabold text-white leading-tight my-3" style="font-family: 'Playfair Display', Georgia, serif;">{{ $post->title }}</h1>
            <div class="flex flex-wrap items-center justify-center gap-2 text-sm text-white/72">
                <span>{{ $post->author?->name }}</span>
                <span>&middot;</span>
                <span>{{ $post->permalinkDate()->translatedFormat('d F Y') }}</span>
                <span>&middot;</span>
                <span>{{ $post->views_count }} views</span>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-[760px] mx-auto px-6">

            @if ($post->featured_image)
                <div class="rounded-2xl overflow-hidden mb-10 -mt-20 relative z-10 shadow-lg">
                    <img src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->title }}" class="w-full aspect-[16/9] object-cover">
                </div>
            @endif

            <div class="post-content">
                {!! $post->content !!}
            </div>

            @if ($post->tags->isNotEmpty())
                <div class="flex flex-wrap gap-2 mt-10 pt-8 border-t border-[#e0ebe7]">
                    @foreach ($post->tags as $tag)
                        <a href="{{ route('blog.tag', $tag) }}" class="text-xs font-semibold text-brand-primary bg-brand-light px-3 py-1.5 rounded-full hover:bg-brand-primary hover:text-white transition-colors">#{{ $tag->name }}</a>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    @if ($relatedPosts->isNotEmpty())
        <section class="py-16 bg-[#f4f8f6]">
            <div class="max-w-[1100px] mx-auto px-6">
                <h2 class="font-brand-serif text-xl font-bold mb-8 text-center" style="font-family: 'Playfair Display', Georgia, serif;">Artikel Terkait</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($relatedPosts as $related)
                        <x-blog.post-card :post="$related" />
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    {{-- ===== CTA ===== --}}
    <section class="relative py-16 text-center overflow-hidden bg-brand-darker">
        <div class="relative z-10 max-w-[600px] mx-auto px-6">
            <h2 class="font-brand-serif text-[clamp(1.4rem,3vw,2rem)] font-extrabold text-white mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Butuh Website untuk Pesantren, Desa, atau UMKM?</h2>
            <div class="flex flex-wrap gap-3 justify-center mt-6">
                <a href="{{ route('solusi') }}" class="inline-flex items-center gap-1.5 bg-white text-brand-dark rounded-xl px-7 py-3.5 text-sm font-bold hover:-translate-y-0.5 hover:shadow-xl transition-all">Lihat Jasa Website</a>
                <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-1.5 bg-transparent border border-white/50 text-white rounded-xl px-7 py-3.5 text-sm font-semibold hover:bg-white/10 transition-colors">← Kembali ke Blog</a>
            </div>
        </div>
    </section>

</x-layouts.base>
