<x-layouts.base
    title="Testimoni Klien — Barizaloka"
    description="Apa kata klien pesantren, desa, UMKM, dan komunitas yang sudah menggunakan jasa pembuatan website Barizaloka."
>

    @if ($testimonials->isNotEmpty())
        <x-slot:head>
            <script type="application/ld+json">
                {!! json_encode([
                    '@@context' => 'https://schema.org',
                    '@type' => 'Organization',
                    'name' => 'Barizaloka',
                    'url' => url('/'),
                    'aggregateRating' => [
                        '@type' => 'AggregateRating',
                        'ratingValue' => $averageRating,
                        'reviewCount' => $testimonials->count(),
                    ],
                    'review' => $testimonials->map(fn ($testimonial) => [
                        '@type' => 'Review',
                        'author' => ['@type' => 'Person', 'name' => $testimonial->name],
                        'reviewRating' => ['@type' => 'Rating', 'ratingValue' => $testimonial->rating],
                        'reviewBody' => $testimonial->quote,
                    ])->values(),
                ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
            </script>
        </x-slot:head>
    @endif

    {{-- ===== HERO ===== --}}
    <section class="relative text-center py-24 overflow-hidden bg-brand-darker">
        <div class="absolute inset-0" style="background: radial-gradient(ellipse 80% 70% at 50% 60%, rgba(29,158,117,.3) 0%, transparent 70%);"></div>
        <div class="relative z-10 max-w-xl mx-auto px-6">
            <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3">Testimoni</span>
            <h1 class="font-brand-serif text-[clamp(2rem,5vw,3rem)] font-extrabold text-white leading-tight my-3" style="font-family: 'Playfair Display', Georgia, serif;">Apa Kata Klien Kami</h1>
            <p class="text-white/72 leading-relaxed">Pengalaman nyata dari pesantren, desa, UMKM, dan komunitas yang telah dibantu Barizaloka.</p>
        </div>
    </section>

    <section class="py-20 bg-[#f4f8f6]">
        <div class="max-w-[1100px] mx-auto px-6">
            @if ($testimonials->isEmpty())
                <div class="text-center py-16 text-zinc-500">
                    <p class="mb-4">Testimoni klien kami sedang kami kumpulkan dan akan segera tampil di sini.</p>
                    <a href="https://wa.me/6285188158542" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 bg-brand-dark text-white rounded-xl px-6 py-3 text-sm font-bold hover:-translate-y-0.5 transition-all">💬 Hubungi Kami</a>
                </div>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($testimonials as $testimonial)
                        <div class="bg-white border border-[#e0ebe7] rounded-2xl p-8">
                            <div class="text-amber-400 mb-4">{{ str_repeat('★', $testimonial->rating).str_repeat('☆', 5 - $testimonial->rating) }}</div>
                            <p class="text-sm text-zinc-600 leading-relaxed mb-6">&ldquo;{{ $testimonial->quote }}&rdquo;</p>
                            <div class="flex items-center gap-3">
                                @if ($testimonial->avatar)
                                    <img src="{{ Storage::url($testimonial->avatar) }}" alt="{{ $testimonial->name }}" class="size-10 rounded-full object-cover">
                                @else
                                    <div class="size-10 rounded-full bg-brand-light flex items-center justify-center text-sm font-bold text-brand-primary">{{ Str::substr($testimonial->name, 0, 1) }}</div>
                                @endif
                                <div>
                                    <div class="text-sm font-semibold">{{ $testimonial->name }}</div>
                                    @if ($testimonial->role)
                                        <div class="text-xs text-zinc-500">{{ $testimonial->role }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

</x-layouts.base>
