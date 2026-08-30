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
                ['label' => 'Cakupan Provinsi', 'url' => route('provinsi.index')],
                ['label' => '🇮🇩 '.$page['name']],
            ]" />

            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/90 backdrop-blur-sm border border-emerald-200 text-xs sm:text-sm font-bold text-emerald-800 shadow-sm">
                <span class="size-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
                {{ $page['hero_badge'] ?? '📍 Potensi Digital Provinsi' }}
            </div>

            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-zinc-900 leading-tight">
                Potensi Digital &amp; Jasa Website<br>
                <span class="gradient-text-green">{{ $page['name'] }}</span>
            </h1>

            <p class="text-base sm:text-lg text-zinc-600 max-w-2xl leading-relaxed">
                {{ $page['hero_subtitle'] ?? 'Solusi pembuatan website profesional untuk pesantren, masjid, desa, dan UMKM di '.$page['name'] }}
            </p>
            <p class="text-xs sm:text-sm text-zinc-500 font-semibold flex items-center gap-1.5 justify-center">
                <span>📍 Ibu kota: {{ $page['ibukota'] ?? 'Pusat Daerah' }} &middot; {{ count($page['kabupaten_kota'] ?? []) }} Kabupaten/Kota</span>
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
                <div class="text-3xl font-extrabold text-emerald-700 font-brand-serif">{{ count($page['kabupaten_kota'] ?? []) }}</div>
                <div class="text-xs text-zinc-600 font-medium mt-1">Kabupaten &amp; Kota Terjangkau</div>
            </div>
            <div class="p-4 rounded-2xl bg-emerald-50/50 border border-emerald-100">
                <div class="text-3xl font-extrabold text-emerald-700 font-brand-serif">Laravel 13</div>
                <div class="text-xs text-zinc-600 font-medium mt-1">Arsitektur Super Cepat</div>
            </div>
            <div class="p-4 rounded-2xl bg-emerald-50/50 border border-emerald-100">
                <div class="text-3xl font-extrabold text-emerald-700 font-brand-serif">100% Online</div>
                <div class="text-xs text-zinc-600 font-medium mt-1">Layanan Pengerjaan Cepat</div>
            </div>
            <div class="p-4 rounded-2xl bg-emerald-50/50 border border-emerald-100">
                <div class="text-3xl font-extrabold text-emerald-700 font-brand-serif">Termasuk</div>
                <div class="text-xs text-zinc-600 font-medium mt-1">Domain, Hosting, SSL &amp; Support</div>
            </div>
        </div>
    </section>

    {{-- ===== INTRO ===== --}}
    <section class="py-16 bg-white">
        <div class="max-w-3xl mx-auto px-6 text-center">
            <h2 class="text-2xl font-bold text-zinc-900 font-brand-serif mb-4">Pengembangan Digitalisasi Sektor Unggulan {{ $page['name'] }}</h2>
            <p class="text-zinc-600 leading-relaxed text-base sm:text-lg">
                {{ $page['intro'] ?? '' }}
            </p>
        </div>
    </section>

    {{-- ===== KABUPATEN/KOTA ===== --}}
    @if (! empty($page['kabupaten_kota']))
    <section class="py-20 bg-zinc-50 border-y border-zinc-200">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center max-w-lg mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-700 bg-emerald-100 px-3.5 py-1.5 rounded-full mb-3.5">🏘️ Wilayah Administratif</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3 text-zinc-900">Kabupaten &amp; Kota di {{ $page['name'] }}</h2>
                <p class="text-zinc-600 text-sm sm:text-base">{{ $page['name'] }} terdiri dari {{ count($page['kabupaten_kota']) }} kabupaten/kota yang masing-masing memiliki potensi besar.</p>
            </div>

            <div class="flex flex-wrap justify-center gap-2.5 max-w-4xl mx-auto">
                @foreach ($page['kabupaten_kota'] as $kabupaten)
                <span class="inline-flex items-center bg-white border border-zinc-200 shadow-xs rounded-xl px-4 py-2 text-sm font-semibold text-zinc-800 hover:border-emerald-500 transition-colors">
                    📍 {{ $kabupaten }}
                </span>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- ===== POTENSI ===== --}}
    @if (! empty($page['potensi']))
    <section class="py-20 bg-white">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center max-w-lg mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-700 bg-emerald-100 px-3.5 py-1.5 rounded-full mb-3.5">✨ Sektor Unggulan</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3 text-zinc-900">Potensi Ekonomi &amp; Digital {{ $page['name'] }}</h2>
                <p class="text-zinc-600 text-sm">Potensi ini dapat berkembang lebih pesat bila didukung infrastruktur website mandiri.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach ($page['potensi'] as $item)
                <div class="flex gap-4 bg-emerald-50/40 border border-emerald-100 rounded-2xl p-8 card-hover">
                    <span class="text-3xl shrink-0">{{ $item['icon'] }}</span>
                    <div>
                        <h3 class="font-bold text-zinc-900 text-base mb-1.5">{{ $item['title'] }}</h3>
                        <p class="text-xs sm:text-sm text-zinc-600 leading-relaxed">{{ $item['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- ===== KENAPA BUTUH WEBSITE ===== --}}
    <section class="py-20 bg-zinc-50 border-t border-zinc-200">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center max-w-lg mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-700 bg-emerald-100 px-3.5 py-1.5 rounded-full mb-3.5">🚀 Akselerasi Digital</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3 text-zinc-900">Mengapa Lembaga &amp; Usaha di {{ $page['name'] }} Butuh Website?</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white border border-zinc-200 rounded-2xl p-8 card-hover">
                    <div class="text-3xl mb-4">🌐</div>
                    <h3 class="font-bold text-zinc-900 text-base mb-2">Promosi UMKM &amp; Produk Unggulan Luas</h3>
                    <p class="text-xs sm:text-sm text-zinc-600 leading-relaxed">Website membantu UMKM dan produk khas {{ $page['name'] }} tampil profesional di mesin pencari Google, menjangkau pembeli dari seluruh Indonesia.</p>
                </div>
                <div class="bg-white border border-zinc-200 rounded-2xl p-8 card-hover">
                    <div class="text-3xl mb-4">📈</div>
                    <h3 class="font-bold text-zinc-900 text-base mb-2">Pariwisata &amp; Potensi Kreatif Terlihat</h3>
                    <p class="text-xs sm:text-sm text-zinc-600 leading-relaxed">Destinasi wisata dan produk kreatif di {{ $page['name'] }} bisa ditemukan calon wisatawan sebelum berkunjung, lengkap dengan info lokasi dan kontak.</p>
                </div>
                <div class="bg-white border border-zinc-200 rounded-2xl p-8 card-hover">
                    <div class="text-3xl mb-4">🏛️</div>
                    <h3 class="font-bold text-zinc-900 text-base mb-2">Transparansi Informasi Desa &amp; Lembaga</h3>
                    <p class="text-xs sm:text-sm text-zinc-600 leading-relaxed">Website resmi membantu pemerintah desa dan lembaga di {{ $page['name'] }} menyampaikan informasi program dan layanan publik secara terbuka.</p>
                </div>
                <div class="bg-white border border-zinc-200 rounded-2xl p-8 card-hover">
                    <div class="text-3xl mb-4">🤝</div>
                    <h3 class="font-bold text-zinc-900 text-base mb-2">Investasi &amp; Kemitraan Mudah Masuk</h3>
                    <p class="text-xs sm:text-sm text-zinc-600 leading-relaxed">Investor dan mitra bisnis yang ingin masuk ke {{ $page['name'] }} mendapatkan gambaran potensi daerah secara cepat lewat website resmi.</p>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('harga') }}" class="inline-flex items-center gap-2 bg-emerald-600 text-white rounded-xl px-8 py-3.5 text-sm font-bold hover:bg-emerald-700 transition-all shadow-md shadow-emerald-200">Lihat Paket &amp; Harga Website →</a>
            </div>
        </div>
    </section>

    {{-- ===== NICHE LIST ===== --}}
    <section class="py-20 bg-white">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center max-w-lg mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-700 bg-emerald-100 px-3.5 py-1.5 rounded-full mb-3.5">🛠️ Layanan Kami</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3 text-zinc-900">Website untuk Berbagai Sektor di {{ $page['name'] }}</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                @foreach (config('niche_pages') as $slug => $niche)
                <a href="{{ route('niche.show', $slug) }}" class="bg-zinc-50 border border-zinc-200 rounded-2xl p-6 text-center card-hover">
                    <h3 class="font-brand-serif text-base font-bold text-zinc-900">Website {{ $niche['label'] }}</h3>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== FAQ ACCORDION ===== --}}
    <section class="py-20 bg-zinc-50 border-t border-zinc-200" x-data="{ openFaq: 1 }">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center max-w-lg mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-700 bg-emerald-100 px-3.5 py-1.5 rounded-full mb-3.5">❓ FAQ</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3 text-zinc-900">Pertanyaan Seputar Jasa Website di {{ $page['name'] }}</h2>
            </div>

            <div class="space-y-4">
                <div class="border border-zinc-200 rounded-2xl overflow-hidden bg-white">
                    <button @click="openFaq = openFaq === 1 ? null : 1" class="w-full p-5 text-left font-bold text-zinc-900 flex justify-between items-center gap-4 hover:bg-zinc-50 transition-colors">
                        <span class="text-base sm:text-lg">Apakah Barizaloka melayani pembuatan website untuk seluruh wilayah {{ $page['name'] }}?</span>
                        <span class="text-xl font-mono text-emerald-700 shrink-0" x-text="openFaq === 1 ? '−' : '+'"></span>
                    </button>
                    <div x-show="openFaq === 1" x-collapse class="px-5 pb-5 text-sm text-zinc-600 leading-relaxed border-t border-zinc-100 pt-3">
                        Ya, kami melayani pembuatan website untuk pesantren, UMKM, masjid, dan desa di seluruh kabupaten/kota di {{ $page['name'] }}, dikerjakan secara profesional dan online dari mana saja.
                    </div>
                </div>

                <div class="border border-zinc-200 rounded-2xl overflow-hidden bg-white">
                    <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full p-5 text-left font-bold text-zinc-900 flex justify-between items-center gap-4 hover:bg-zinc-50 transition-colors">
                        <span class="text-base sm:text-lg">Berapa lama estimasi pengerjaan website di {{ $page['name'] }}?</span>
                        <span class="text-xl font-mono text-emerald-700 shrink-0" x-text="openFaq === 2 ? '−' : '+'"></span>
                    </button>
                    <div x-show="openFaq === 2" x-collapse class="px-5 pb-5 text-sm text-zinc-600 leading-relaxed border-t border-zinc-100 pt-3">
                        Proses pengerjaan cepat berkisar antara 1 hingga 7 hari kerja setelah materi foto dan teks lengkap diserahkan.
                    </div>
                </div>

                <div class="border border-zinc-200 rounded-2xl overflow-hidden bg-white">
                    <button @click="openFaq = openFaq === 3 ? null : 3" class="w-full p-5 text-left font-bold text-zinc-900 flex justify-between items-center gap-4 hover:bg-zinc-50 transition-colors">
                        <span class="text-base sm:text-lg">Apakah harga sama untuk semua daerah di {{ $page['name'] }}?</span>
                        <span class="text-xl font-mono text-emerald-700 shrink-0" x-text="openFaq === 3 ? '−' : '+'"></span>
                    </button>
                    <div x-show="openFaq === 3" x-collapse class="px-5 pb-5 text-sm text-zinc-600 leading-relaxed border-t border-zinc-100 pt-3">
                        Ya, harga paket kami transparan dan sama rata mulai Rp 350.000/tahun tanpa biaya tersembunyi.
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== RELATED PROVINCES ===== --}}
    @if (! empty($relatedProvinces))
    <section class="py-16 bg-white border-t border-zinc-100">
        <div class="max-w-[1100px] mx-auto px-6">
            <h3 class="font-brand-serif text-xl font-bold mb-6 text-center text-zinc-900">Provinsi Lain di Sekitar {{ $page['name'] }}</h3>
            <div class="flex flex-wrap justify-center gap-3">
                @foreach ($relatedProvinces as $related)
                <a href="{{ route('provinsi.show', $related['slug']) }}" class="inline-flex items-center gap-2 bg-zinc-50 border border-zinc-200 rounded-xl px-5 py-3 text-sm font-semibold text-zinc-800 hover:bg-emerald-600 hover:text-white transition-all">Potensi {{ $related['name'] }}</a>
                @endforeach
            </div>
            <div class="text-center mt-8">
                <a href="{{ route('provinsi.index') }}" class="text-sm font-bold text-emerald-700 hover:underline">Lihat Semua 34 Provinsi di Indonesia &rarr;</a>
            </div>
        </div>
    </section>
    @endif

    {{-- ===== FINAL CTA ===== --}}
    <section class="py-20 bg-gradient-to-br from-emerald-900 via-teal-900 to-indigo-950 text-white relative overflow-hidden">
        <div class="relative max-w-3xl mx-auto px-6 text-center flex flex-col items-center gap-6">
            <span class="text-5xl float-icon">🇮🇩</span>
            <h2 class="text-3xl sm:text-4xl font-bold leading-tight font-brand-serif">
                Siap Wujudkan Potensi Digital di {{ $page['name'] }}?
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
