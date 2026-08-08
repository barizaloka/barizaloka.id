<x-layouts.base
    title="Cari Artikel — Blog Barizaloka"
    description="Cari artikel di Blog Barizaloka."
    robots="noindex, follow"
>

    {{-- ===== HERO ===== --}}
    <section class="relative text-center py-24 overflow-hidden bg-brand-darker">
        <div class="absolute inset-0" style="background: radial-gradient(ellipse 80% 70% at 50% 60%, rgba(29,158,117,.3) 0%, transparent 70%);"></div>
        <div class="relative z-10 max-w-xl mx-auto px-6">
            <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3">Pencarian</span>
            <h1 class="font-brand-serif text-[clamp(1.8rem,4.5vw,2.8rem)] font-extrabold text-white leading-tight my-3" style="font-family: 'Playfair Display', Georgia, serif;">Cari Artikel</h1>

            <form action="{{ route('blog.search') }}" method="GET" class="mt-8 flex gap-2 max-w-md mx-auto">
                <input type="search" name="q" value="{{ $query }}" placeholder="Cari artikel..." class="flex-1 rounded-xl border-0 px-4 py-3 text-sm text-brand-dark placeholder:text-zinc-400 focus:outline-none focus:ring-2 focus:ring-brand-primary">
                <button type="submit" class="bg-white text-brand-dark rounded-xl px-5 py-3 text-sm font-bold hover:-translate-y-0.5 hover:shadow-xl transition-all">Cari</button>
            </form>
        </div>
    </section>

    <section class="py-16 bg-[#f4f8f6]">
        <div class="max-w-[1100px] mx-auto px-6">
            @if ($query)
                <p class="text-sm text-zinc-500 mb-8">Menampilkan hasil untuk "<strong class="text-brand-dark">{{ $query }}</strong>"</p>
            @endif

            @if ($posts->isEmpty())
                <div class="text-center py-16 text-zinc-500">Tidak ada artikel yang cocok dengan pencarianmu.</div>
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
