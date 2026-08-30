<x-layouts.base
    :title="$page['title']"
    :description="$page['meta_description']"
>

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
                ['label' => '📍 Jasa Website di '.$page['name']],
            ]" />

            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/90 backdrop-blur-sm border border-emerald-200 text-xs sm:text-sm font-bold text-emerald-800 shadow-sm">
                <span class="size-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
                {{ $page['hero_badge'] }}
            </div>

            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-zinc-900 leading-tight">
                Jasa Pembuatan Website<br>
                <span class="gradient-text-green">di {{ $page['name'] }}</span>
            </h1>

            <p class="text-base sm:text-lg text-zinc-600 max-w-2xl leading-relaxed">
                {{ $page['hero_subtitle'] }}
            </p>
            <p class="text-xs sm:text-sm text-zinc-500 font-semibold flex items-center gap-1.5 justify-center">
                <span>📍 {{ $page['region'] }}</span>
            </p>

            <div class="flex flex-wrap items-center justify-center gap-3.5 mt-3">
                <a href="{{ route('harga') }}" class="px-7 py-3.5 rounded-xl bg-emerald-600 text-white font-bold text-sm hover:bg-emerald-700 transition-all shadow-md shadow-emerald-200 flex items-center gap-2">
                    💎 Lihat Paket &amp; Harga
                </a>
                <a href="https://wa.me/6285188158542?text=Halo%20Barizaloka%2C%20saya%20dari%20{{ urlencode($page['name']) }}%20ingin%20konsultasi%20pembuatan%20website" target="_blank" rel="noopener noreferrer" class="px-7 py-3.5 rounded-xl bg-white border border-zinc-200 text-zinc-800 font-semibold text-sm hover:bg-zinc-50 transition-all shadow-sm flex items-center gap-2">
                    💬 Konsultasi WA Gratis
                </a>
            </div>
        </div>
    </section>

    {{-- ===== STATS HIGHLIGHT ===== --}}
    <section class="bg-white py-10 border-b border-zinc-100">
        <div class="max-w-5xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div class="p-4 rounded-2xl bg-emerald-50/50 border border-emerald-100">
                <div class="text-3xl font-extrabold text-emerald-700 font-brand-serif">Lokal</div>
                <div class="text-xs text-zinc-600 font-medium mt-1">Layanan Tatap Muka / Online</div>
            </div>
            <div class="p-4 rounded-2xl bg-emerald-50/50 border border-emerald-100">
                <div class="text-3xl font-extrabold text-emerald-700 font-brand-serif">Laravel 13</div>
                <div class="text-xs text-zinc-600 font-medium mt-1">Super Cepat &amp; Bebas Lemot</div>
            </div>
            <div class="p-4 rounded-2xl bg-emerald-50/50 border border-emerald-100">
                <div class="text-3xl font-extrabold text-emerald-700 font-brand-serif">Lengkap</div>
                <div class="text-xs text-zinc-600 font-medium mt-1">Domain, Hosting, &amp; SSL</div>
            </div>
            <div class="p-4 rounded-2xl bg-emerald-50/50 border border-emerald-100">
                <div class="text-3xl font-extrabold text-emerald-700 font-brand-serif">Pendampingan</div>
                <div class="text-xs text-zinc-600 font-medium mt-1">Garansi Maintenance &amp; Support</div>
            </div>
        </div>
    </section>

    {{-- ===== INTRO ===== --}}
    <section class="py-16 bg-white">
        <div class="max-w-3xl mx-auto px-6 text-center">
            <h2 class="text-2xl font-bold text-zinc-900 font-brand-serif mb-4">Pengembangan Website Terpercaya di {{ $page['name'] }}</h2>
            <p class="text-zinc-600 leading-relaxed text-base sm:text-lg">
                {{ $page['intro'] }}
            </p>
        </div>
    </section>

    {{-- ===== NICHE LIST ===== --}}
    <section class="py-20 bg-zinc-50 border-y border-zinc-200">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center max-w-lg mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-700 bg-emerald-100 px-3.5 py-1.5 rounded-full mb-3.5">🛠️ Layanan Kami di {{ $page['name'] }}</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3 text-zinc-900">Website untuk Berbagai Kebutuhan Sektor</h2>
                <p class="text-zinc-600 text-sm sm:text-base">Kami melayani pembuatan website profesional untuk lembaga dan usaha di {{ $page['name'] }} dan sekitarnya.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                @foreach ($niches as $niche)
                <a href="{{ route('niche.show', $niche['slug']) }}" class="bg-white border border-zinc-200 rounded-2xl p-7 text-center card-hover flex flex-col items-center justify-center gap-3">
                    <span class="text-4xl">
                        @if ($niche['slug'] === 'pesantren') 🕌
                        @elseif ($niche['slug'] === 'masjid') 🕋
                        @elseif ($niche['slug'] === 'desa') 🏘️
                        @elseif ($niche['slug'] === 'umkm') 🛍️
                        @elseif ($niche['slug'] === 'sepeda-listrik') 🚲
                        @else 💻 @endif
                    </span>
                    <h3 class="font-brand-serif text-base font-bold text-zinc-900">Website {{ $niche['label'] }}</h3>
                    <span class="text-xs text-emerald-700 font-semibold hover:underline">Pelajari Detail →</span>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== NEARBY LOCATIONS ===== --}}
    @if (count($nearbyLocations))
    <section class="py-16 bg-white border-b border-zinc-100">
        <div class="max-w-[1100px] mx-auto px-6">
            <h3 class="font-brand-serif text-xl font-bold mb-6 text-center text-zinc-900">Jangkauan Layanan Wilayah Sekitar {{ $page['name'] }}</h3>
            <div class="flex flex-wrap justify-center gap-3">
                @foreach ($nearbyLocations as $nearby)
                <a href="{{ route('lokasi.show', $nearby['slug']) }}" class="inline-flex items-center gap-2 bg-zinc-50 border border-zinc-200 rounded-xl px-5 py-3 text-sm font-semibold text-zinc-800 hover:bg-emerald-600 hover:text-white transition-all">
                    📍 Jasa Website di {{ $nearby['name'] }}
                </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- ===== FINAL CTA ===== --}}
    <section class="py-20 bg-gradient-to-br from-emerald-900 via-teal-900 to-indigo-950 text-white relative overflow-hidden">
        <div class="relative max-w-3xl mx-auto px-6 text-center flex flex-col items-center gap-6">
            <span class="text-5xl float-icon">📍</span>
            <h2 class="text-3xl sm:text-4xl font-bold leading-tight font-brand-serif">
                Siap Buat Website di {{ $page['name'] }}?
            </h2>
            <p class="text-emerald-100/90 text-base max-w-xl">
                Konsultasikan kebutuhan pembuatan website instansi atau usaha Anda di {{ $page['name'] }} secara gratis bersama tim Barizaloka.
            </p>
            <a href="https://wa.me/6285188158542?text=Halo%20Barizaloka%2C%20saya%20dari%20{{ urlencode($page['name']) }}%20ingin%20konsultasi%20website" target="_blank" rel="noopener noreferrer" class="px-8 py-4 rounded-xl bg-white text-emerald-950 font-bold text-sm hover:bg-emerald-50 transition-all shadow-lg flex items-center gap-2">
                💬 Mulai Konsultasi WhatsApp {{ $page['name'] }}
            </a>
        </div>
    </section>

</x-layouts.base>
