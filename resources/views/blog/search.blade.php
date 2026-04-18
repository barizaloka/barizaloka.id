<x-layouts.base
    :title="$query ? 'Hasil pencarian: ' . $query . ' — Barizaloka' : 'Cari Artikel — Barizaloka'"
    description="Cari artikel di blog Barizaloka seputar teknologi, pembuatan website, SaaS, komunitas lingkungan, dan inspirasi digital dari ekosistem Barizaloka, Rembang."
>
    <section class="max-w-6xl mx-auto px-6 py-12">

        {{-- Header --}}
        <div class="mb-10">
            <nav class="text-xs text-zinc-400 mb-4 flex items-center gap-2">
                <a href="{{ route('blog.index') }}" class="hover:text-zinc-600 transition-colors">Blog</a>
                <span>/</span>
                <span class="text-zinc-600">Pencarian</span>
            </nav>

            <h1 class="text-3xl font-bold text-zinc-900 mb-2">
                @if ($query)
                    Hasil untuk "<span class="text-amber-600">{{ $query }}</span>"
                @else
                    Cari Artikel
                @endif
            </h1>
            @if ($query)
                <p class="text-zinc-500 text-sm">{{ $posts->total() }} artikel ditemukan</p>
            @endif
        </div>

        {{-- Search bar --}}
        <form action="{{ route('blog.search') }}" method="GET" class="mb-10 flex gap-3 max-w-xl">
            <input
                type="search"
                name="q"
                value="{{ $query }}"
                placeholder="Cari artikel..."
                class="flex-1 rounded-lg border border-zinc-200 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-zinc-900"
            />
            <button type="submit"
                class="px-5 py-2.5 rounded-lg bg-zinc-900 text-white text-sm font-medium hover:bg-zinc-700 transition-colors">
                Cari
            </button>
        </form>

        @if ($query)
            @if ($posts->count())
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 mb-10">
                    @foreach ($posts as $post)
                        <a href="{{ route('blog.show', $post->slug) }}"
                           class="group flex flex-col rounded-xl border border-zinc-100 overflow-hidden hover:shadow-md transition-shadow">
                            @if ($post->featured_image)
                                <img src="{{ Storage::url($post->featured_image) }}"
                                     alt="{{ $post->title }}"
                                     class="w-full h-44 object-cover">
                            @else
                                <div class="w-full h-44 bg-zinc-50 flex items-center justify-center text-4xl">📝</div>
                            @endif
                            <div class="p-5 flex flex-col flex-1">
                                @if ($post->category)
                                    <span class="text-xs font-medium text-amber-600 mb-2">{{ $post->category->name }}</span>
                                @endif
                                <h3 class="font-bold text-zinc-900 group-hover:text-amber-600 transition-colors mb-2 line-clamp-2">
                                    {{ $post->title }}
                                </h3>
                                @if ($post->excerpt)
                                    <p class="text-zinc-500 text-sm leading-relaxed line-clamp-2 mb-4">{{ $post->excerpt }}</p>
                                @endif
                                <div class="mt-auto flex items-center gap-2 text-xs text-zinc-400">
                                    <span>{{ $post->author->name }}</span>
                                    <span>·</span>
                                    <span>{{ $post->published_at?->translatedFormat('d M Y') }}</span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>

                {{ $posts->links() }}
            @else
                <div class="text-center py-20 text-zinc-400">
                    <p class="text-5xl mb-4">🔍</p>
                    <p class="text-lg font-medium">Tidak ada artikel yang cocok.</p>
                    <p class="text-sm mt-2">Coba kata kunci lain atau jelajahi semua artikel.</p>
                    <a href="{{ route('blog.index') }}" class="mt-4 inline-block text-sm text-zinc-600 underline">
                        Lihat Semua Artikel
                    </a>
                </div>
            @endif
        @endif

    </section>
</x-layouts.base>
