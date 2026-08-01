<x-layouts.base
    :title="$service->meta_title ?: $service->name.' — Barizaloka'"
    :description="$service->meta_description ?: $service->summary"
>

    <x-slot:head>
        <script type="application/ld+json">
            {!! json_encode([
                '@@context' => 'https://schema.org',
                '@type' => 'Service',
                'name' => $service->name,
                'description' => $service->summary,
                'provider' => [
                    '@type' => 'Organization',
                    'name' => 'Barizaloka',
                    'url' => url('/'),
                ],
                'areaServed' => 'ID',
                'url' => route('layanan.show', $service),
            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
        </script>
    </x-slot:head>

    {{-- ===== HERO ===== --}}
    <section class="relative text-center py-24 overflow-hidden bg-brand-darker">
        <div class="absolute inset-0" style="background: radial-gradient(ellipse 80% 70% at 50% 60%, rgba(29,158,117,.3) 0%, transparent 70%);"></div>
        <div class="relative z-10 max-w-2xl mx-auto px-6">
            <div class="text-5xl mb-4">{{ $service->icon }}</div>
            <h1 class="font-brand-serif text-[clamp(1.8rem,5vw,2.8rem)] font-extrabold text-white leading-tight my-3" style="font-family: 'Playfair Display', Georgia, serif;">{{ $service->name }}</h1>
            <p class="text-white/72 leading-relaxed">{{ $service->summary }}</p>
            <div class="flex flex-wrap gap-3 justify-center mt-8">
                <a href="https://wa.me/6285188158542?text={{ urlencode('Halo Barizaloka, saya tertarik dengan '.$service->name) }}" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 bg-white text-brand-dark rounded-xl px-7 py-3.5 text-sm font-bold hover:-translate-y-0.5 hover:shadow-xl transition-all">💬 Konsultasi Gratis</a>
                <a href="{{ route('harga') }}" class="inline-flex items-center gap-1.5 bg-transparent border border-white/50 text-white rounded-xl px-7 py-3.5 text-sm font-semibold hover:bg-white/10 transition-colors">💎 Lihat Harga</a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-[1100px] mx-auto px-6 grid grid-cols-1 lg:grid-cols-[2fr_1fr] gap-12">

            <div>
                <div class="prose max-w-none text-zinc-600 leading-relaxed">
                    {!! $service->description !!}
                </div>
            </div>

            <aside class="flex flex-col gap-6">
                @if (!empty($service->features))
                    <div class="bg-[#f4f8f6] border border-[#e0ebe7] rounded-2xl p-6">
                        <h3 class="font-brand-serif text-base font-bold mb-4" style="font-family: 'Playfair Display', Georgia, serif;">Yang Anda Dapatkan</h3>
                        <ul class="flex flex-col gap-3 text-sm text-[#1a2420]">
                            @foreach ($service->features as $feature)
                                <li class="flex gap-2">✅ <span>{{ $feature }}</span></li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if ($service->price_from)
                    <div class="bg-brand-dark text-white rounded-2xl p-6 text-center">
                        <div class="text-sm text-white/70 mb-1">Mulai dari</div>
                        <div class="font-brand-serif text-3xl font-extrabold" style="font-family: 'Playfair Display', Georgia, serif;">{{ $service->price_from }}</div>
                    </div>
                @endif
            </aside>

        </div>
    </section>

    @if ($relatedServices->isNotEmpty())
        <section class="py-16 bg-[#f4f8f6]">
            <div class="max-w-[1100px] mx-auto px-6">
                <h2 class="font-brand-serif text-xl font-bold mb-8 text-center" style="font-family: 'Playfair Display', Georgia, serif;">Layanan Lainnya</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach ($relatedServices as $related)
                        <a href="{{ route('layanan.show', $related) }}" class="group block bg-white border border-[#e0ebe7] rounded-2xl p-6 hover:shadow-md hover:-translate-y-1 transition-all">
                            <div class="text-3xl mb-3">{{ $related->icon }}</div>
                            <h3 class="font-semibold mb-1 group-hover:text-brand-primary transition-colors">{{ $related->name }}</h3>
                            <p class="text-xs text-zinc-500">{{ Str::limit($related->summary, 80) }}</p>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

</x-layouts.base>
