<x-layouts.base
    title="Blog — Barizaloka"
    description="Artikel, tips, dan cerita dari ekosistem Barizaloka."
>
    <section class="max-w-6xl mx-auto px-6 py-12">

        {{-- Header --}}
        <div class="mb-10 text-center">
            <h1 class="text-4xl font-bold text-zinc-900 mb-3">Blog</h1>
            <p class="text-zinc-500 text-lg">Artikel, tips, dan cerita dari ekosistem Barizaloka.</p>
        </div>

        {{-- Search bar --}}
        <form action="{{ route('blog.search') }}" method="GET" class="mb-10 flex gap-3 max-w-xl mx-auto">
            <input
                type="search"
                name="q"
                placeholder="Cari artikel..."
                class="flex-1 rounded-lg border border-zinc-200 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-zinc-900"
            />
            <button type="submit"
                class="px-5 py-2.5 rounded-lg bg-zinc-900 text-white text-sm font-medium hover:bg-zinc-700 transition-colors">
                Cari
            </button>
        </form>

        <div class="flex flex-col lg:flex-row gap-10">

            {{-- Main content --}}
            <div class="flex-1 min-w-0">

                {{-- Featured post --}}
                @if ($featuredPost && $posts->currentPage() === 1)
                    <a href="{{ route('blog.show', $featuredPost->slug) }}"
                       class="group block mb-10 rounded-2xl overflow-hidden border border-zinc-100 hover:shadow-md transition-shadow">
                        @if ($featuredPost->featured_image)
                            <img src="{{ Storage::url($featuredPost->featured_image) }}"
                                 alt="{{ $featuredPost->title }}"
                                 class="w-full h-64 object-cover">
                        @else
                            <div class="w-full h-64 bg-zinc-100 flex items-center justify-center">
                                <span class="text-zinc-400 text-5xl">✍️</span>
                            </div>
                        @endif
                        <div class="p-6">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="text-xs font-semibold uppercase tracking-wider text-amber-600 bg-amber-50 px-2 py-1 rounded">
                                    Unggulan
                                </span>
                                @if ($featuredPost->category)
                                    <span class="text-xs text-zinc-500">{{ $featuredPost->category->name }}</span>
                                @endif
                            </div>
                            <h2 class="text-2xl font-bold text-zinc-900 group-hover:text-amber-600 transition-colors mb-2">
                                {{ $featuredPost->title }}
                            </h2>
                            @if ($featuredPost->excerpt)
                                <p class="text-zinc-500 text-sm leading-relaxed mb-4">{{ $featuredPost->excerpt }}</p>
                            @endif
                            <div class="flex items-center gap-3 text-xs text-zinc-400">
                                <span>{{ $featuredPost->author->name }}</span>
                                <span>·</span>
                                <span>{{ $featuredPost->published_at?->translatedFormat('d M Y') }}</span>
                                <span>·</span>
                                <span>{{ number_format($featuredPost->views_count) }} dilihat</span>
                            </div>
                        </div>
                    </a>
                @endif

                {{-- Post grid --}}
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
                                    <div class="w-full h-44 bg-zinc-50 flex items-center justify-center">
                                        <span class="text-4xl">📝</span>
                                    </div>
                                @endif

                                <div class="p-5 flex flex-col flex-1">
                                    @if ($post->category)
                                        <span class="text-xs font-medium text-amber-600 mb-2">
                                            {{ $post->category->name }}
                                        </span>
                                    @endif

                                    <h3 class="font-bold text-zinc-900 group-hover:text-amber-600 transition-colors mb-2 line-clamp-2">
                                        {{ $post->title }}
                                    </h3>

                                    @if ($post->excerpt)
                                        <p class="text-zinc-500 text-sm leading-relaxed line-clamp-2 mb-4">
                                            {{ $post->excerpt }}
                                        </p>
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

                    {{-- Pagination --}}
                    {{ $posts->links() }}
                @else
                    <div class="text-center py-20 text-zinc-400">
                        <p class="text-5xl mb-4">📭</p>
                        <p class="text-lg font-medium">Belum ada artikel.</p>
                    </div>
                @endif

            </div>

            {{-- Sidebar --}}
            <aside class="w-full lg:w-72 shrink-0 space-y-8">

                {{-- Categories --}}
                @if ($categories->count())
                    <div class="rounded-xl border border-zinc-100 p-6">
                        <h3 class="font-bold text-zinc-900 mb-4">Kategori</h3>
                        <ul class="space-y-2">
                            @foreach ($categories as $cat)
                                <li>
                                    <a href="{{ route('blog.category', $cat->slug) }}"
                                       class="flex items-center justify-between text-sm text-zinc-600 hover:text-zinc-900 transition-colors">
                                        <span>{{ $cat->name }}</span>
                                        <span class="text-xs bg-zinc-100 text-zinc-500 rounded px-2 py-0.5">
                                            {{ $cat->posts_count }}
                                        </span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- Popular posts --}}
                @if ($popularPosts->count())
                    <div class="rounded-xl border border-zinc-100 p-6">
                        <h3 class="font-bold text-zinc-900 mb-4">Artikel Populer</h3>
                        <ul class="space-y-4">
                            @foreach ($popularPosts as $pop)
                                <li>
                                    <a href="{{ route('blog.show', $pop->slug) }}"
                                       class="group text-sm text-zinc-700 hover:text-zinc-900 transition-colors font-medium leading-snug">
                                        {{ $pop->title }}
                                    </a>
                                    <p class="text-xs text-zinc-400 mt-0.5">{{ number_format($pop->views_count) }} dilihat</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </aside>
        </div>
    </section>
</x-layouts.base>
