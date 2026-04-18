<x-layouts.base
    :title="'Kategori: ' . $category->name . ' — Barizaloka'"
    :description="$category->meta_description ?? $category->description ?? 'Artikel dalam kategori ' . $category->name"
>
    <section class="max-w-6xl mx-auto px-6 py-12">

        {{-- Header --}}
        <div class="mb-10">
            <nav class="text-xs text-zinc-400 mb-4 flex items-center gap-2">
                <a href="{{ route('blog.index') }}" class="hover:text-zinc-600 transition-colors">Blog</a>
                <span>/</span>
                <span class="text-zinc-600">{{ $category->name }}</span>
            </nav>

            <h1 class="text-3xl font-bold text-zinc-900 mb-2">{{ $category->name }}</h1>
            @if ($category->description)
                <p class="text-zinc-500">{{ $category->description }}</p>
            @endif
        </div>

        {{-- Posts grid --}}
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
                <p class="text-5xl mb-4">📭</p>
                <p class="text-lg font-medium">Belum ada artikel dalam kategori ini.</p>
                <a href="{{ route('blog.index') }}" class="mt-4 inline-block text-sm text-zinc-600 underline">
                    Kembali ke Blog
                </a>
            </div>
        @endif

    </section>
</x-layouts.base>
