<x-layouts.base
    title="Potensi Digital 34 Provinsi Indonesia — Barizaloka"
    description="Jelajahi potensi digital 34 provinsi di Indonesia: kabupaten/kota, sektor unggulan, dan bagaimana website & aplikasi membuat potensi daerah tumbuh lebih besar."
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
                ['label' => '🗺️ 34 Provinsi Indonesia'],
            ]" />

            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/90 backdrop-blur-sm border border-emerald-200 text-xs sm:text-sm font-bold text-emerald-800 shadow-sm">
                <span class="size-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
                🗺️ Jangkauan Layanan Web 34 Provinsi Indonesia
            </div>

            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-zinc-900 leading-tight">
                Potensi Digital &amp; Jasa Website<br>
                <span class="gradient-text-green">Setiap Provinsi di Indonesia</span>
            </h1>

            <p class="text-base sm:text-lg text-zinc-600 max-w-2xl leading-relaxed">
                Setiap provinsi memiliki kabupaten/kota, sektor unggulan, dan potensi ekonomi yang dapat tumbuh lebih pesat bila didukung website dan aplikasi modern berbasis <code class="text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded font-mono font-bold">Laravel 13</code>.
            </p>

            <div class="flex flex-wrap items-center justify-center gap-3.5 mt-3">
                <a href="{{ route('harga') }}" class="px-7 py-3.5 rounded-xl bg-emerald-600 text-white font-bold text-sm hover:bg-emerald-700 transition-all shadow-md shadow-emerald-200 flex items-center gap-2">
                    💎 Lihat Paket &amp; Harga
                </a>
                <a href="https://wa.me/6285188158542?text=Halo%20Barizaloka%2C%20saya%20ingin%20konsultasi%20website%20untuk%20daerah%20saya" target="_blank" rel="noopener noreferrer" class="px-7 py-3.5 rounded-xl bg-white border border-zinc-200 text-zinc-800 font-semibold text-sm hover:bg-zinc-50 transition-all shadow-sm flex items-center gap-2">
                    💬 Konsultasi WA Gratis
                </a>
            </div>
        </div>
    </section>

    {{-- ===== INTRO ===== --}}
    <section class="py-16 bg-white">
        <div class="max-w-3xl mx-auto px-6 text-center">
            <h2 class="text-2xl font-bold text-zinc-900 font-brand-serif mb-4">Pengembangan Digitalisasi Daerah Seluruh Indonesia</h2>
            <p class="text-zinc-600 leading-relaxed text-base">
                Indonesia memiliki 34 provinsi dengan ribuan kabupaten/kota, masing-masing menyimpan potensi ekonomi yang berbeda: pertanian, perikanan, pariwisata, hingga industri kreatif. Sayangnya, banyak UMKM, pesantren, desa, dan pelaku usaha di daerah belum tampil online sehingga potensi tersebut belum tergarap maksimal. Pilih provinsi Anda untuk melihat potensinya secara lebih detail.
            </p>
        </div>
    </section>

    {{-- ===== PROVINCE GRID ===== --}}
    <section class="py-20 bg-zinc-50 border-y border-zinc-200">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center max-w-lg mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-700 bg-emerald-100 px-3.5 py-1.5 rounded-full mb-3.5">📍 Direktori Provinsi</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3 text-zinc-900">34 Provinsi Indonesia</h2>
                <p class="text-zinc-600 text-sm">Klik provinsi untuk melihat rincian kabupaten/kota dan potensi unggulannya.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5">
                @foreach ($provinces as $province)
                <a href="{{ route('provinsi.show', $province['slug']) }}" class="bg-white border border-zinc-200 rounded-2xl p-6 card-hover flex flex-col justify-between">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wide text-emerald-700 bg-emerald-50 px-2.5 py-1 rounded-md inline-block mb-2">
                            {{ $province['pulau'] ?? 'Indonesia' }}
                        </span>
                        <h3 class="font-brand-serif text-lg font-bold text-zinc-900">{{ $province['name'] }}</h3>
                        <p class="text-xs text-zinc-500 mt-1">Ibu kota: {{ $province['ibukota'] ?? 'Pusat Daerah' }} &middot; {{ count($province['kabupaten_kota'] ?? []) }} Kabupaten/Kota</p>
                    </div>
                    <div class="mt-4 text-xs font-semibold text-emerald-700 flex items-center gap-1">
                        <span>Lihat Potensi Digital →</span>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== FINAL CTA ===== --}}
    <section class="py-20 bg-gradient-to-br from-emerald-900 via-teal-900 to-indigo-950 text-white relative overflow-hidden">
        <div class="relative max-w-3xl mx-auto px-6 text-center flex flex-col items-center gap-6">
            <span class="text-5xl float-icon">🗺️</span>
            <h2 class="text-3xl sm:text-4xl font-bold leading-tight font-brand-serif">
                Siap Wujudkan Potensi Daerah Anda Secara Online?
            </h2>
            <p class="text-emerald-100/90 text-base max-w-xl">
                Konsultasi gratis via WhatsApp, tanpa biaya, tanpa kewajiban. Punya website profesional dan cepat untuk usaha atau lembaga Anda di daerah.
            </p>
            <a href="https://wa.me/6285188158542?text=Halo%20Barizaloka%2C%20saya%20ingin%20konsultasi%20website%20untuk%20daerah%20saya" target="_blank" rel="noopener noreferrer" class="px-8 py-4 rounded-xl bg-white text-emerald-950 font-bold text-sm hover:bg-emerald-50 transition-all shadow-lg flex items-center gap-2">
                💬 Mulai Konsultasi WhatsApp Gratis
            </a>
        </div>
    </section>

</x-layouts.base>
