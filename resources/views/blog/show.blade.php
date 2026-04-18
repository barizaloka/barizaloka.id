<x-layouts.base
    :title="$post->meta_title ?? $post->title . ' — Barizaloka'"
    :description="$post->meta_description ?? $post->excerpt"
    ogType="article"
    :ogImage="$post->featured_image ? Storage::url($post->featured_image) : null"
>
    <article class="max-w-4xl mx-auto px-6 py-12">

        {{-- Breadcrumb --}}
        <nav class="text-xs text-zinc-400 mb-8 flex items-center gap-2">
            <a href="{{ route('blog.index') }}" class="hover:text-zinc-600 transition-colors">Blog</a>
            @if ($post->category)
                <span>/</span>
                <a href="{{ route('blog.category', $post->category->slug) }}"
                   class="hover:text-zinc-600 transition-colors">
                    {{ $post->category->name }}
                </a>
            @endif
            <span>/</span>
            <span class="text-zinc-600 line-clamp-1">{{ $post->title }}</span>
        </nav>

        {{-- Header --}}
        <header class="mb-8">
            @if ($post->category)
                <a href="{{ route('blog.category', $post->category->slug) }}"
                   class="inline-block text-xs font-semibold uppercase tracking-wider text-amber-600 bg-amber-50 px-2.5 py-1 rounded mb-4 hover:bg-amber-100 transition-colors">
                    {{ $post->category->name }}
                </a>
            @endif

            <h1 class="text-3xl md:text-4xl font-bold text-zinc-900 leading-tight mb-4">
                {{ $post->title }}
            </h1>

            @if ($post->excerpt)
                <p class="text-xl text-zinc-500 leading-relaxed mb-6">{{ $post->excerpt }}</p>
            @endif

            <div class="flex flex-wrap items-center gap-4 text-sm text-zinc-500 border-t border-b border-zinc-100 py-4">
                <div class="flex items-center gap-2">
                    <div class="size-8 rounded-full bg-zinc-200 flex items-center justify-center text-xs font-bold text-zinc-600">
                        {{ strtoupper(substr($post->author->name, 0, 1)) }}
                    </div>
                    <span class="font-medium text-zinc-700">{{ $post->author->name }}</span>
                </div>
                <span>·</span>
                <time datetime="{{ $post->published_at?->toDateString() }}">
                    {{ $post->published_at?->translatedFormat('d F Y') }}
                </time>
                <span>·</span>
                <span>{{ number_format($post->views_count) }} dilihat</span>
            </div>
        </header>

        {{-- Featured image --}}
        @if ($post->featured_image)
            <figure class="mb-8 rounded-2xl overflow-hidden">
                <img src="{{ Storage::url($post->featured_image) }}"
                     alt="{{ $post->title }}"
                     class="w-full h-auto object-cover">
            </figure>
        @endif

        {{-- Content --}}
        <div class="prose prose-zinc max-w-none mb-10
            prose-headings:font-bold prose-headings:text-zinc-900
            prose-p:text-zinc-700 prose-p:leading-relaxed
            prose-a:text-amber-600 prose-a:no-underline hover:prose-a:underline
            prose-img:rounded-xl prose-img:mx-auto
            prose-blockquote:border-amber-400 prose-blockquote:text-zinc-600
            prose-code:bg-zinc-100 prose-code:rounded prose-code:px-1
            prose-pre:bg-zinc-900">
            {!! $post->content !!}
        </div>

        {{-- Tags --}}
        @if ($post->tags->count())
            <div class="flex flex-wrap gap-2 mb-10 pb-10 border-b border-zinc-100">
                <span class="text-sm text-zinc-500 mr-1">Tag:</span>
                @foreach ($post->tags as $tag)
                    <a href="{{ route('blog.tag', $tag->slug) }}"
                       class="text-xs px-3 py-1 rounded-full bg-zinc-100 text-zinc-600 hover:bg-zinc-200 transition-colors">
                        #{{ $tag->name }}
                    </a>
                @endforeach
            </div>
        @endif

        {{-- Related posts --}}
        @if ($relatedPosts->count())
            <section class="mb-12">
                <h2 class="text-xl font-bold text-zinc-900 mb-6">Artikel Terkait</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach ($relatedPosts as $related)
                        <a href="{{ route('blog.show', $related->slug) }}"
                           class="group block rounded-xl border border-zinc-100 overflow-hidden hover:shadow-md transition-shadow">
                            @if ($related->featured_image)
                                <img src="{{ Storage::url($related->featured_image) }}"
                                     alt="{{ $related->title }}"
                                     class="w-full h-36 object-cover">
                            @else
                                <div class="w-full h-36 bg-zinc-50 flex items-center justify-center text-3xl">📝</div>
                            @endif
                            <div class="p-4">
                                <h3 class="text-sm font-bold text-zinc-900 group-hover:text-amber-600 transition-colors line-clamp-2">
                                    {{ $related->title }}
                                </h3>
                                <p class="text-xs text-zinc-400 mt-1">
                                    {{ $related->published_at?->translatedFormat('d M Y') }}
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </section>
        @endif

    </article>
</x-layouts.base>
