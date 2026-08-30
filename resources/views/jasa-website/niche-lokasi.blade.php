<x-layouts.base
    title="Jasa Pembuatan Website {{ $niche['label'] }} di {{ $location['name'] }} — Barizaloka"
    :description="'Jasa pembuatan website ' . $niche['label'] . ' di ' . $location['name'] . ', mulai Rp 350.000/tahun. ' . \Illuminate\Support\Str::after($niche['meta_description'], 'tahun. ')"
>

    <x-slot:head>
        @if (! empty($niche['faqs']))
            <script type="application/ld+json">
                {!! json_encode([
                    '@@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => collect($niche['faqs'])->map(fn ($faq) => [
                        '@type' => 'Question',
                        'name' => $faq['q'],
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text' => $faq['a'],
                        ],
                    ])->values(),
                ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
            </script>
        @endif
        <script type="application/ld+json">
            {!! json_encode([
                '@@context' => 'https://schema.org',
                '@type' => 'BreadcrumbList',
                'itemListElement' => [
                    ['@type' => 'ListItem', 'position' => 1, 'name' => 'Beranda', 'item' => url('/')],
                    ['@type' => 'ListItem', 'position' => 2, 'name' => 'Jasa Website', 'item' => route('jasa-website')],
                    ['@type' => 'ListItem', 'position' => 3, 'name' => "Website {$niche['label']} di {$location['name']}", 'item' => route('niche-lokasi.show', [$niche['slug'], $location['slug']])],
                ],
            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
        </script>
    </x-slot:head>

    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-10px) rotate(2deg); }
        }
        .float-icon { animation: float 5s ease-in-out infinite; }
        .gradient-text-green {
            background: linear-gradient(135deg, #10816f, #01a54d, #2c368b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .card-hover {
            transition: transform 0.3s cubic-bezier(.22,.68,0,1.2), box-shadow 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
        }
    </style>

    {{-- ===== HERO ===== --}}
    <section class="relative overflow-hidden pt-24 pb-20 bg-gradient-to-br from-emerald-50 via-teal-50/50 to-indigo-50/40 border-b border-emerald-100/60">
        <div class="absolute top-10 left-8 size-72 rounded-full bg-emerald-200/40 blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-10 right-8 size-80 rounded-full bg-indigo-200/40 blur-3xl pointer-events-none"></div>

        <div class="relative max-w-4xl mx-auto px-6 text-center flex flex-col items-center gap-5">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'Jasa Website', 'url' => route('jasa-website')],
                ['label' => 'Website '.$niche['label'].' di '.$location['name']],
            ]" />

            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/90 backdrop-blur-sm border border-emerald-200 text-xs sm:text-sm font-bold text-emerald-800 shadow-sm">
                <span class="size-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
                {{ $niche['hero_badge'] }}
            </div>

            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-zinc-900 leading-tight">
                Website {{ $niche['label'] }}<br>
                <span class="gradient-text-green">di {{ $location['name'] }}</span>
            </h1>

            <p class="text-base sm:text-lg text-zinc-600 max-w-2xl leading-relaxed">
                {{ $niche['hero_subtitle'] }}
            </p>
            <p class="text-xs sm:text-sm text-zinc-500 font-semibold flex items-center gap-1.5 justify-center">
                <span>📍 {{ $location['region'] }}</span>
            </p>

            <div class="flex flex-wrap items-center justify-center gap-3.5 mt-3">
                <a href="{{ route('harga') }}" class="px-7 py-3.5 rounded-xl bg-emerald-600 text-white font-bold text-sm hover:bg-emerald-700 transition-all shadow-md shadow-emerald-200 flex items-center gap-2">
                    💎 Lihat Paket &amp; Harga
                </a>
                <a href="https://wa.me/6285188158542?text=Halo%20Barizaloka%2C%20saya%20dari%20{{ urlencode($location['name']) }}%20ingin%20konsultasi%20website%20{{ urlencode($niche['label']) }}" target="_blank" rel="noopener noreferrer" class="px-7 py-3.5 rounded-xl bg-white border border-zinc-200 text-zinc-800 font-semibold text-sm hover:bg-zinc-50 transition-all shadow-sm flex items-center gap-2">
                    💬 Konsultasi WA Gratis
                </a>
            </div>
        </div>
    </section>

    {{-- ===== INTRO ===== --}}
    <section class="py-16 bg-white">
        <div class="max-w-3xl mx-auto px-6 text-center space-y-4">
            <h2 class="text-2xl font-bold text-zinc-900 font-brand-serif">Solusi Spesifik {{ $niche['label'] }} di {{ $location['name'] }}</h2>
            <p class="text-zinc-600 leading-relaxed text-base">{{ $niche['intro'] }}</p>
            <p class="text-zinc-600 leading-relaxed text-base">{{ $location['intro'] }}</p>
        </div>
    </section>

    {{-- ===== PAIN POINTS ===== --}}
    <section class="py-20 bg-zinc-50 border-y border-zinc-200">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center max-w-lg mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-red-700 bg-red-100 px-3.5 py-1.5 rounded-full mb-3.5">⚠️ Kenali Masalahnya</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3 text-zinc-900">Tantangan {{ $niche['label'] }} di {{ $location['name'] }}</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($niche['pain_points'] as $point)
                <div class="bg-white border border-zinc-200 rounded-2xl p-8 text-center card-hover">
                    <div class="size-16 rounded-full bg-red-50 text-red-600 flex items-center justify-center text-3xl mx-auto mb-5">{{ $point['icon'] }}</div>
                    <h3 class="font-brand-serif text-lg font-bold mb-3 text-zinc-900">{{ $point['title'] }}</h3>
                    <p class="text-xs sm:text-sm text-zinc-600 leading-relaxed">{{ $point['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== BENEFITS ===== --}}
    <section class="py-20 bg-white">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center max-w-lg mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-700 bg-emerald-100 px-3.5 py-1.5 rounded-full mb-3.5">✨ Yang Anda Dapatkan</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3 text-zinc-900">Fitur Website {{ $niche['label'] }} dari Barizaloka</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach ($niche['benefits'] as $benefit)
                <div class="flex gap-4 bg-emerald-50/40 border border-emerald-100 rounded-2xl p-8 card-hover">
                    <span class="text-3xl shrink-0">{{ $benefit['icon'] }}</span>
                    <div>
                        <h3 class="font-bold text-zinc-900 text-base mb-1.5">{{ $benefit['title'] }}</h3>
                        <p class="text-xs sm:text-sm text-zinc-600 leading-relaxed">{{ $benefit['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('harga') }}" class="inline-flex items-center gap-2 bg-emerald-600 text-white rounded-xl px-8 py-3.5 text-sm font-bold hover:bg-emerald-700 transition-all shadow-md shadow-emerald-200">Lihat Paket &amp; Harga Lengkap →</a>
            </div>
        </div>
    </section>

    {{-- ===== FAQ ===== --}}
    @if (! empty($niche['faqs']))
    <section class="py-20 bg-zinc-50 border-t border-zinc-200" x-data="{ openFaq: 1 }">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center max-w-lg mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-700 bg-emerald-100 px-3.5 py-1.5 rounded-full mb-3.5">❓ FAQ</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3 text-zinc-900">Pertanyaan Seputar Website {{ $niche['label'] }}</h2>
            </div>

            <div class="space-y-4">
                @foreach ($niche['faqs'] as $index => $faq)
                <div class="border border-zinc-200 rounded-2xl overflow-hidden bg-white">
                    <button @click="openFaq = openFaq === {{ $index + 1 }} ? null : {{ $index + 1 }}" class="w-full p-5 text-left font-bold text-zinc-900 flex justify-between items-center gap-4 hover:bg-zinc-50 transition-colors">
                        <span class="text-base sm:text-lg">{{ $faq['q'] }}</span>
                        <span class="text-xl font-mono text-emerald-700 shrink-0" x-text="openFaq === {{ $index + 1 }} ? '−' : '+'"></span>
                    </button>
                    <div x-show="openFaq === {{ $index + 1 }}" x-collapse class="px-5 pb-5 text-sm text-zinc-600 leading-relaxed border-t border-zinc-100 pt-3">
                        {{ $faq['a'] }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- ===== OTHER NICHES IN THIS LOCATION ===== --}}
    @if (count($otherNiches))
    <section class="py-16 bg-white border-t border-zinc-100">
        <div class="max-w-[1100px] mx-auto px-6">
            <h3 class="font-brand-serif text-xl font-bold mb-6 text-center text-zinc-900">Layanan Sektor Lain di {{ $location['name'] }}</h3>
            <div class="flex flex-wrap justify-center gap-3">
                @foreach ($otherNiches as $other)
                <a href="{{ route('niche-lokasi.show', [$other['slug'], $location['slug']]) }}" class="inline-flex items-center gap-2 bg-zinc-50 border border-zinc-200 rounded-xl px-5 py-3 text-sm font-semibold text-zinc-800 hover:bg-emerald-600 hover:text-white transition-all">Website {{ $other['label'] }} di {{ $location['name'] }}</a>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- ===== OTHER LOCATIONS FOR THIS NICHE ===== --}}
    @if (count($otherLocations))
    <section class="py-16 bg-zinc-50 border-t border-zinc-200">
        <div class="max-w-[1100px] mx-auto px-6">
            <h3 class="font-brand-serif text-xl font-bold mb-6 text-center text-zinc-900">Website {{ $niche['label'] }} di Wilayah Sekitar</h3>
            <div class="flex flex-wrap justify-center gap-3">
                @foreach ($otherLocations as $other)
                <a href="{{ route('niche-lokasi.show', [$niche['slug'], $other['slug']]) }}" class="inline-flex items-center gap-2 bg-white border border-zinc-200 rounded-xl px-5 py-3 text-sm font-semibold text-zinc-800 hover:bg-emerald-600 hover:text-white transition-all">Website {{ $niche['label'] }} di {{ $other['name'] }}</a>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- ===== FINAL CTA ===== --}}
    <section class="py-20 bg-gradient-to-br from-emerald-900 via-teal-900 to-indigo-950 text-white relative overflow-hidden">
        <div class="relative max-w-3xl mx-auto px-6 text-center flex flex-col items-center gap-6">
            <span class="text-5xl float-icon">🚀</span>
            <h2 class="text-3xl sm:text-4xl font-bold leading-tight font-brand-serif">
                Siap Buat Website {{ $niche['label'] }} di {{ $location['name'] }}?
            </h2>
            <p class="text-emerald-100/90 text-base max-w-xl">
                Konsultasikan kebutuhan pembuatan website {{ $niche['label'] }} Anda di {{ $location['name'] }} secara gratis bersama tim Barizaloka.
            </p>
            <a href="https://wa.me/6285188158542?text=Halo%20Barizaloka%2C%20saya%20dari%20{{ urlencode($location['name']) }}%20ingin%20konsultasi%20website%20{{ urlencode($niche['label']) }}" target="_blank" rel="noopener noreferrer" class="px-8 py-4 rounded-xl bg-white text-emerald-950 font-bold text-sm hover:bg-emerald-50 transition-all shadow-lg flex items-center gap-2">
                💬 Mulai Konsultasi WhatsApp {{ $location['name'] }}
            </a>
        </div>
    </section>

</x-layouts.base>
