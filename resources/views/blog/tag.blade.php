<x-layouts.base
    title="#{{ $tag->name }} — Blog Barizaloka"
    description="Artikel dengan tag {{ $tag->name }} di Blog Barizaloka."
>

    {{-- ===== HERO ===== --}}
    <section class="relative text-center py-24 overflow-hidden bg-brand-darker">
        <div class="absolute inset-0" style="background: radial-gradient(ellipse 80% 70% at 50% 60%, rgba(29,158,117,.3) 0%, transparent 70%);"></div>
        <div class="relative z-10 max-w-xl mx-auto px-6">
            <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3">Tag</span>
            <h1 class="font-brand-serif text-[clamp(1.8rem,4.5vw,2.8rem)] font-extrabold text-white leading-tight my-3" style="font-family: 'Playfair Display', Georgia, serif;">#{{ $tag->name }}</h1>
        </div>
    </section>

    <section class="py-16 bg-[#f4f8f6]">
        <div class="max-w-[1100px] mx-auto px-6">
            @if ($posts->isEmpty())
                <div class="text-center py-16 text-zinc-500">Belum ada artikel dengan tag ini.</div>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($posts as $post)
                        <x-blog.post-card :post="$post" />
                    @endforeach
                </div>

                <div class="mt-10">
                    {{ $posts->links() }}
                </div>
            @endif
        </div>
    </section>

</x-layouts.base>
