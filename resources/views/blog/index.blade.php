<x-layouts.base
    title="Blog — Barizaloka"
    description="Cerita, tips, dan kabar terbaru dari Barizaloka seputar teknologi, pesantren, desa, dan UMKM."
>

    {{-- ===== HERO ===== --}}
    <section class="relative text-center py-24 overflow-hidden bg-brand-darker">
        <div class="absolute inset-0" style="background: radial-gradient(ellipse 80% 70% at 50% 60%, rgba(29,158,117,.3) 0%, transparent 70%);"></div>
        <div class="relative z-10 max-w-xl mx-auto px-6">
            <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3">Blog Barizaloka</span>
            <h1 class="font-brand-serif text-[clamp(2rem,5vw,3rem)] font-extrabold text-white leading-tight my-3" style="font-family: 'Playfair Display', Georgia, serif;">Cerita dari Pesantren,<br>Desa, dan Dunia Digital</h1>
            <p class="text-white/72 leading-relaxed">Tips, kabar, dan pemikiran seputar teknologi, pesantren, desa, dan UMKM dari tim Barizaloka.</p>

            <form action="{{ route('blog.search') }}" method="GET" class="mt-8 flex gap-2 max-w-md mx-auto">
                <input type="search" name="q" value="{{ request('q') }}" placeholder="Cari artikel..." class="flex-1 rounded-xl border-0 px-4 py-3 text-sm text-brand-dark placeholder:text-zinc-400 focus:outline-none focus:ring-2 focus:ring-brand-primary">
                <button type="submit" class="bg-white text-brand-dark rounded-xl px-5 py-3 text-sm font-bold hover:-translate-y-0.5 hover:shadow-xl transition-all">Cari</button>
            </form>
        </div>
    </section>

    <section class="py-16 bg-[#f4f8f6]">
        <div class="max-w-[1100px] mx-auto px-6 grid grid-cols-1 lg:grid-cols-[2fr_1fr] gap-12">

            <div>
                @if ($featuredPost)
                    <a href="{{ $featuredPost->permalink() }}" class="group block bg-white border border-[#e0ebe7] rounded-2xl overflow-hidden mb-10 hover:shadow-lg transition-all">
                        <div class="grid grid-cols-1 md:grid-cols-2">
                            <div class="aspect-[16/9] md:aspect-auto bg-brand-light overflow-hidden">
                                @if ($featuredPost->featured_image)
                                    <img src="{{ Storage::url($featuredPost->featured_image) }}" alt="{{ $featuredPost->title }}" class="w-full h-full object-cover">
                                @else
                                    <div class="w-full h-full flex items-center justify-center text-5xl">✍️</div>
                                @endif
                            </div>
                            <div class="p-8 flex flex-col justify-center">
                                <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3 py-1 rounded-full mb-3 w-fit">✦ Artikel Unggulan</span>
                                <h2 class="font-brand-serif text-2xl font-bold leading-snug mb-3 group-hover:text-brand-primary transition-colors" style="font-family: 'Playfair Display', Georgia, serif;">{{ $featuredPost->title }}</h2>
                                <p class="text-sm text-zinc-500 leading-relaxed mb-4">{{ Str::limit($featuredPost->excerpt, 140) }}</p>
                                <div class="text-xs text-zinc-500">{{ $featuredPost->author?->name }} &middot; {{ $featuredPost->permalinkDate()->translatedFormat('d M Y') }}</div>
                            </div>
                        </div>
                    </a>
                @endif

                @if ($posts->isEmpty())
                    <div class="text-center py-16 text-zinc-500">Belum ada artikel yang dipublikasikan.</div>
                @else
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        @foreach ($posts as $post)
                            <x-blog.post-card :post="$post" />
                        @endforeach
                    </div>

                    <div class="mt-10">
                        {{ $posts->links() }}
                    </div>
                @endif
            </div>

            <aside class="flex flex-col gap-8">
                @if ($categories->isNotEmpty())
                    <div class="bg-white border border-[#e0ebe7] rounded-2xl p-6">
                        <h3 class="font-brand-serif text-base font-bold mb-4" style="font-family: 'Playfair Display', Georgia, serif;">Kategori</h3>
                        <ul class="flex flex-col gap-2">
                            @foreach ($categories as $category)
                                <li>
                                    <a href="{{ route('blog.category', $category) }}" class="flex items-center justify-between text-sm text-zinc-600 hover:text-brand-primary transition-colors">
                                        <span>{{ $category->name }}</span>
                                        <span class="text-xs text-zinc-400">{{ $category->posts_count }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if ($popularPosts->isNotEmpty())
                    <div class="bg-white border border-[#e0ebe7] rounded-2xl p-6">
                        <h3 class="font-brand-serif text-base font-bold mb-4" style="font-family: 'Playfair Display', Georgia, serif;">Artikel Populer</h3>
                        <ul class="flex flex-col gap-4">
                            @foreach ($popularPosts as $post)
                                <li>
                                    <a href="{{ $post->permalink() }}" class="block text-sm font-semibold text-[#1a2420] hover:text-brand-primary transition-colors leading-snug">{{ $post->title }}</a>
                                    <span class="text-xs text-zinc-500">{{ $post->permalinkDate()->translatedFormat('d M Y') }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </aside>

        </div>
    </section>

</x-layouts.base>
