<x-layouts.base title="Solusi Digital — Barizaloka" description="Daftar platform dan solusi digital dari Barizaloka untuk memenuhi kebutuhan Anda.">

    <style>
        @keyframes slide-up {
            from { opacity: 0; transform: translateY(28px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .anim-up-1 { animation: slide-up 0.8s ease-out 0.1s both; }
        .anim-up-2 { animation: slide-up 0.8s ease-out 0.3s both; }
        .anim-up-3 { animation: slide-up 0.8s ease-out 0.5s both; }
        .gradient-text {
            background: linear-gradient(135deg, #6366f1, #8b5cf6, #ec4899, #f97316);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>

    {{-- Hero --}}
    <section class="relative overflow-hidden pt-20 pb-16">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_80%_60%_at_50%_-10%,rgba(139,92,246,0.15),transparent)]"></div>
        <div class="absolute top-16 left-6 size-64 rounded-full bg-gradient-to-br from-indigo-200/40 to-purple-200/40 blur-3xl pointer-events-none"></div>
        <div class="absolute top-24 right-6 size-48 rounded-full bg-gradient-to-br from-pink-200/40 to-orange-200/40 blur-3xl pointer-events-none"></div>

        <div class="relative max-w-6xl mx-auto px-6 text-center flex flex-col items-center gap-5">
            <a href="{{ route('home') }}" class="anim-up-1 inline-flex items-center gap-2 text-sm text-zinc-500 hover:text-zinc-700 transition-colors">
                <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Kembali ke Beranda
            </a>

            <span class="anim-up-1 inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/80 backdrop-blur-sm border border-purple-200 text-xs font-semibold text-purple-700 shadow-sm">
                <span class="size-2 rounded-full bg-green-500 animate-pulse"></span>
                💡 Platform & Solusi Digital
            </span>

            <h1 class="anim-up-2 text-4xl md:text-5xl font-bold leading-tight tracking-tight max-w-3xl text-zinc-900">
                Solusi Digital dari
                <span class="gradient-text">Barizaloka</span>
            </h1>

            <p class="anim-up-3 text-lg text-zinc-600 max-w-xl leading-relaxed">
                Platform dan produk digital yang kami kembangkan untuk memenuhi kebutuhan nyata masyarakat — sederhana, modern, dan terjangkau.
            </p>
        </div>
    </section>

    {{-- Section: Platform Siap Pakai --}}
    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6 flex flex-col gap-10">

            {{-- Section Header --}}
            <div class="flex flex-col gap-3">
                <div class="flex items-center gap-3">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-100 text-indigo-700 text-xs font-bold tracking-wide uppercase">
                        Platform Siap Pakai
                    </span>
                    <div class="h-px flex-1 bg-zinc-100"></div>
                </div>
                <p class="text-sm text-zinc-500 max-w-xl">
                    Bayar, langsung aktif — tidak perlu instalasi atau konfigurasi teknis. Kamu cukup isi data dan platform siap digunakan.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                {{-- Undangan Pernikahan --}}
                <div class="group flex flex-col gap-5 p-8 rounded-2xl border border-pink-100 bg-gradient-to-b from-pink-50/60 to-white hover:border-pink-300 hover:shadow-xl hover:shadow-pink-100 hover:-translate-y-1 transition-all duration-300">
                    <div class="flex items-start justify-between">
                        <div class="size-14 rounded-2xl bg-gradient-to-br from-pink-400 to-rose-600 flex items-center justify-center text-3xl shadow-lg shadow-pink-200 group-hover:scale-110 transition-transform duration-300">
                            💌
                        </div>
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">
                            <span class="size-1.5 rounded-full bg-green-500 animate-pulse"></span>
                            Tersedia
                        </span>
                    </div>

                    <div class="flex flex-col gap-2">
                        <h3 class="text-xl font-bold text-zinc-900">Undangan Pernikahan</h3>
                        <p class="text-sm font-semibold text-pink-600">💍 Undangan Digital yang Elegan</p>
                        <p class="text-sm text-zinc-500 leading-relaxed">
                            Sebarkan kabar bahagia Anda ke seluruh keluarga dan kerabat dengan undangan digital yang indah, modern, dan mudah dibagikan lewat WhatsApp maupun media sosial.
                        </p>
                    </div>

                    <ul class="flex flex-col gap-2">
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>🎨</span> Desain elegan & dapat dikustomisasi
                        </li>
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>🔗</span> Link undangan yang mudah dibagikan
                        </li>
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>📅</span> Countdown hari pernikahan
                        </li>
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>📍</span> Lokasi acara & peta interaktif
                        </li>
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>💬</span> Fitur ucapan & konfirmasi hadir
                        </li>
                    </ul>

                    <a href="https://instagram.com/namaku.ahla" target="_blank" rel="noopener noreferrer"
                       class="mt-auto flex items-center justify-center gap-2 px-4 py-3 rounded-xl bg-gradient-to-r from-pink-500 to-rose-600 text-white text-sm font-semibold hover:from-pink-400 hover:to-rose-500 hover:-translate-y-0.5 transition-all duration-200 shadow-md shadow-pink-200">
                        💌 Mulai Sekarang
                    </a>
                </div>

            </div>
        </div>
    </section>

    {{-- Section: Jasa Pengembangan --}}
    <section class="py-20 bg-zinc-50/60 border-t border-zinc-100">
        <div class="max-w-6xl mx-auto px-6 flex flex-col gap-10">

            {{-- Section Header --}}
            <div class="flex flex-col gap-3">
                <div class="flex items-center gap-3">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-zinc-800 text-white text-xs font-bold tracking-wide uppercase">
                        Jasa Pengembangan
                    </span>
                    <div class="h-px flex-1 bg-zinc-200"></div>
                </div>
                <p class="text-sm text-zinc-500 max-w-xl">
                    Dibangun khusus sesuai kebutuhan kamu — mulai dari konsultasi, desain, hingga peluncuran. Cocok untuk kebutuhan yang lebih spesifik dan unik.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                {{-- Website Profil --}}
                <div class="group flex flex-col gap-5 p-8 rounded-2xl border border-blue-100 bg-gradient-to-b from-blue-50/60 to-white hover:border-blue-300 hover:shadow-xl hover:shadow-blue-100 hover:-translate-y-1 transition-all duration-300">
                    <div class="flex items-start justify-between">
                        <div class="size-14 rounded-2xl bg-gradient-to-br from-blue-400 to-indigo-600 flex items-center justify-center text-3xl shadow-lg shadow-blue-200 group-hover:scale-110 transition-transform duration-300">
                            🌐
                        </div>
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">
                            <span class="size-1.5 rounded-full bg-green-500 animate-pulse"></span>
                            Tersedia
                        </span>
                    </div>

                    <div class="flex flex-col gap-2">
                        <h3 class="text-xl font-bold text-zinc-900">Website Profil</h3>
                        <p class="text-sm font-semibold text-blue-600">🏢 Company Profile & Landing Page</p>
                        <p class="text-sm text-zinc-500 leading-relaxed">
                            Tampilkan bisnis, organisasi, atau usaha Anda secara profesional di internet dengan website yang modern, cepat, dan responsif di semua perangkat.
                        </p>
                    </div>

                    <ul class="flex flex-col gap-2">
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>📱</span> Responsif di semua perangkat
                        </li>
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>⚡</span> Loading cepat & ringan
                        </li>
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>🎯</span> Desain sesuai identitas brand
                        </li>
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>📊</span> Formulir kontak & integrasi WA
                        </li>
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>🔒</span> SSL & hosting profesional
                        </li>
                    </ul>

                    <a href="https://instagram.com/namaku.ahla" target="_blank" rel="noopener noreferrer"
                       class="mt-auto flex items-center justify-center gap-2 px-4 py-3 rounded-xl bg-gradient-to-r from-blue-500 to-indigo-600 text-white text-sm font-semibold hover:from-blue-400 hover:to-indigo-500 hover:-translate-y-0.5 transition-all duration-200 shadow-md shadow-blue-200">
                        🌐 Konsultasi Gratis
                    </a>
                </div>

                {{-- Sistem Informasi Masjid --}}
                <div class="group flex flex-col gap-5 p-8 rounded-2xl border border-emerald-100 bg-gradient-to-b from-emerald-50/60 to-white hover:border-emerald-300 hover:shadow-xl hover:shadow-emerald-100 hover:-translate-y-1 transition-all duration-300">
                    <div class="flex items-start justify-between">
                        <div class="size-14 rounded-2xl bg-gradient-to-br from-emerald-400 to-green-600 flex items-center justify-center text-3xl shadow-lg shadow-emerald-200 group-hover:scale-110 transition-transform duration-300">
                            🕌
                        </div>
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">
                            <span class="size-1.5 rounded-full bg-green-500 animate-pulse"></span>
                            Tersedia
                        </span>
                    </div>

                    <div class="flex flex-col gap-2">
                        <h3 class="text-xl font-bold text-zinc-900">Website Masjid</h3>
                        <p class="text-sm font-semibold text-emerald-600">🕌 Sistem Informasi Masjid Digital</p>
                        <p class="text-sm text-zinc-500 leading-relaxed">
                            Bantu masjid Anda hadir secara digital dengan website yang memuat jadwal shalat, kegiatan, artikel dakwah, dan informasi keuangan secara transparan.
                        </p>
                    </div>

                    <ul class="flex flex-col gap-2">
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>🕐</span> Jadwal shalat & imsakiyah
                        </li>
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>📰</span> Artikel & dakwah digital
                        </li>
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>📋</span> Informasi kegiatan & pengumuman
                        </li>
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>💰</span> Laporan keuangan masjid
                        </li>
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>🤲</span> Donasi & infaq online
                        </li>
                    </ul>

                    <a href="https://instagram.com/namaku.ahla" target="_blank" rel="noopener noreferrer"
                       class="mt-auto flex items-center justify-center gap-2 px-4 py-3 rounded-xl bg-gradient-to-r from-emerald-500 to-green-600 text-white text-sm font-semibold hover:from-emerald-400 hover:to-green-500 hover:-translate-y-0.5 transition-all duration-200 shadow-md shadow-emerald-200">
                        🕌 Konsultasi Gratis
                    </a>
                </div>

                {{-- Toko Online --}}
                <div class="group flex flex-col gap-5 p-8 rounded-2xl border border-orange-100 bg-gradient-to-b from-orange-50/60 to-white hover:border-orange-300 hover:shadow-xl hover:shadow-orange-100 hover:-translate-y-1 transition-all duration-300">
                    <div class="flex items-start justify-between">
                        <div class="size-14 rounded-2xl bg-gradient-to-br from-orange-400 to-amber-600 flex items-center justify-center text-3xl shadow-lg shadow-orange-200 group-hover:scale-110 transition-transform duration-300">
                            🛒
                        </div>
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-amber-100 text-amber-700 text-xs font-semibold">
                            🔧 Segera Hadir
                        </span>
                    </div>

                    <div class="flex flex-col gap-2">
                        <h3 class="text-xl font-bold text-zinc-900">Toko Online</h3>
                        <p class="text-sm font-semibold text-orange-600">🛍️ Toko Digital Milik Sendiri</p>
                        <p class="text-sm text-zinc-500 leading-relaxed">
                            Kembangkan usaha Anda dengan toko online sendiri yang independen — tanpa bergantung pada marketplace besar. Kelola produk, pesanan, dan pelanggan dengan mudah.
                        </p>
                    </div>

                    <ul class="flex flex-col gap-2">
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>📦</span> Manajemen produk & stok
                        </li>
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>💳</span> Integrasi pembayaran online
                        </li>
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>🚚</span> Manajemen pesanan & pengiriman
                        </li>
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>📊</span> Laporan penjualan & analitik
                        </li>
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>🎁</span> Voucher & program diskon
                        </li>
                    </ul>

                    <button disabled
                       class="mt-auto flex items-center justify-center gap-2 px-4 py-3 rounded-xl bg-zinc-100 text-zinc-400 text-sm font-semibold cursor-not-allowed">
                        🔧 Segera Hadir
                    </button>
                </div>

                {{-- Sistem Absensi --}}
                <div class="group flex flex-col gap-5 p-8 rounded-2xl border border-violet-100 bg-gradient-to-b from-violet-50/60 to-white hover:border-violet-300 hover:shadow-xl hover:shadow-violet-100 hover:-translate-y-1 transition-all duration-300">
                    <div class="flex items-start justify-between">
                        <div class="size-14 rounded-2xl bg-gradient-to-br from-violet-400 to-purple-600 flex items-center justify-center text-3xl shadow-lg shadow-violet-200 group-hover:scale-110 transition-transform duration-300">
                            ✅
                        </div>
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-amber-100 text-amber-700 text-xs font-semibold">
                            🔧 Segera Hadir
                        </span>
                    </div>

                    <div class="flex flex-col gap-2">
                        <h3 class="text-xl font-bold text-zinc-900">Sistem Absensi</h3>
                        <p class="text-sm font-semibold text-violet-600">📋 Absensi Digital untuk Organisasi</p>
                        <p class="text-sm text-zinc-500 leading-relaxed">
                            Kelola kehadiran karyawan, santri, atau anggota komunitas secara digital. Laporan otomatis, rekapitulasi bulanan, dan notifikasi real-time.
                        </p>
                    </div>

                    <ul class="flex flex-col gap-2">
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>📱</span> Absensi via QR Code / link
                        </li>
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>📊</span> Rekap & laporan otomatis
                        </li>
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>🔔</span> Notifikasi izin & ketidakhadiran
                        </li>
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>📅</span> Kelola jadwal & shift
                        </li>
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>📤</span> Export data ke Excel/PDF
                        </li>
                    </ul>

                    <button disabled
                       class="mt-auto flex items-center justify-center gap-2 px-4 py-3 rounded-xl bg-zinc-100 text-zinc-400 text-sm font-semibold cursor-not-allowed">
                        🔧 Segera Hadir
                    </button>
                </div>

                {{-- CTA Card --}}
                <div class="flex flex-col gap-5 p-8 rounded-2xl bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 text-white relative overflow-hidden">
                    <div class="absolute top-0 right-0 size-40 rounded-full bg-white/10 blur-2xl pointer-events-none"></div>
                    <div class="absolute bottom-0 left-0 size-32 rounded-full bg-white/10 blur-2xl pointer-events-none"></div>

                    <div class="relative flex flex-col gap-4">
                        <span class="text-4xl">💡</span>
                        <h3 class="text-xl font-bold">Punya Kebutuhan Lain?</h3>
                        <p class="text-sm text-white/80 leading-relaxed">
                            Kami terbuka untuk berdiskusi tentang kebutuhan digital Anda. Ceritakan ide Anda dan kami akan bantu wujudkan.
                        </p>

                        <ul class="flex flex-col gap-2 mt-2">
                            <li class="flex items-center gap-2 text-sm text-white/90">
                                <span>✅</span> Konsultasi gratis tanpa syarat
                            </li>
                            <li class="flex items-center gap-2 text-sm text-white/90">
                                <span>✅</span> Harga terjangkau & transparan
                            </li>
                            <li class="flex items-center gap-2 text-sm text-white/90">
                                <span>✅</span> Didukung tim dari desa
                            </li>
                        </ul>

                        <a href="https://instagram.com/namaku.ahla" target="_blank" rel="noopener noreferrer"
                           class="mt-4 flex items-center justify-center gap-2 px-4 py-3 rounded-xl bg-white text-indigo-700 text-sm font-bold hover:bg-indigo-50 hover:-translate-y-0.5 transition-all duration-200 shadow-lg">
                            💬 Hubungi Kami
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Bottom CTA --}}
    <section class="py-16 bg-gradient-to-br from-zinc-50 to-white border-t border-zinc-100">
        <div class="max-w-3xl mx-auto px-6 text-center flex flex-col items-center gap-5">
            <h2 class="text-2xl md:text-3xl font-bold text-zinc-900">
                Butuh solusi yang belum ada di sini? 🤔
            </h2>
            <p class="text-zinc-500 leading-relaxed">
                Tim Barizaloka siap membangun solusi digital sesuai kebutuhan spesifik Anda. Hubungi kami sekarang untuk konsultasi gratis.
            </p>
            <div class="flex flex-col sm:flex-row items-center gap-3">
                <a href="https://instagram.com/namaku.ahla" target="_blank" rel="noopener noreferrer"
                   class="px-7 py-3.5 rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold text-sm hover:from-indigo-500 hover:to-purple-500 hover:-translate-y-0.5 transition-all duration-200 shadow-lg shadow-indigo-200">
                    📱 Hubungi via Instagram
                </a>
                <a href="{{ route('home') }}"
                   class="px-7 py-3.5 rounded-xl bg-white border border-zinc-200 text-zinc-700 font-semibold text-sm hover:bg-zinc-50 hover:-translate-y-0.5 transition-all duration-200 shadow-sm">
                    🏠 Kembali ke Beranda
                </a>
            </div>
        </div>
    </section>

</x-layouts.base>
