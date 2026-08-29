<x-layouts.base
    title="Perbedaan Website Sendiri vs Marketplace (Shopee, Tokopedia, TikTok Shop) — Barizaloka"
    description="Analisis mendalam perbandingan jualan di Marketplace vs Memiliki Website Toko Online Sendiri. Pahami keunggulan hemat biaya komisi, kepemilikan database pelanggan, dan strategi hibrida terbaik untuk UMKM."
>

    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-12px) rotate(3deg); }
        }
        .float-icon { animation: float 6s ease-in-out infinite; }
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

    {{-- Hero Section --}}
    <section class="relative overflow-hidden pt-24 pb-20 bg-gradient-to-br from-emerald-50 via-teal-50/50 to-indigo-50/40 border-b border-emerald-100/60">
        <div class="absolute top-10 left-8 size-72 rounded-full bg-emerald-200/40 blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-10 right-8 size-80 rounded-full bg-indigo-200/40 blur-3xl pointer-events-none"></div>

        <div class="relative max-w-4xl mx-auto px-6 text-center flex flex-col items-center gap-5">
            <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-sm text-zinc-500 hover:text-emerald-700 transition-colors">
                <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Kembali ke Beranda
            </a>

            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/90 backdrop-blur-sm border border-emerald-200 text-xs font-bold text-emerald-800 shadow-sm">
                <span class="size-2 rounded-full bg-emerald-500 animate-pulse"></span>
                🛒 Edukasi Bisnis Digital • Website Mandiri vs Marketplace
            </div>

            <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-zinc-900 leading-tight">
                Beda Website Sendiri vs Marketplace:<br>
                <span class="gradient-text-green">Mana yang Paling Menguntungkan & Aman untuk Bisnis Anda?</span>
            </h1>

            <p class="text-base sm:text-lg text-zinc-600 max-w-2xl leading-relaxed">
                Ulasan komprehensif membandingkan jualan di marketplace pihak ketiga (Shopee, Tokopedia, TikTok Shop) dengan memiliki <strong class="text-emerald-700">Website Toko Online Mandiri</strong>. Pelajari dampaknya terhadap margin keuntungan, kedaulatan data pelanggan, serta keberlanjutan bisnis jangka panjang.
            </p>

            <div class="flex flex-wrap items-center justify-center gap-3 mt-2">
                <a href="#perbandingan-langsung" class="px-6 py-3 rounded-xl bg-emerald-600 text-white font-bold text-sm hover:bg-emerald-700 transition-all shadow-md shadow-emerald-200">
                    📊 Lihat Perbandingan Langsung
                </a>
                <a href="{{ route('kalkulator-biaya-admin-marketplace') }}" class="px-6 py-3 rounded-xl bg-indigo-600 text-white font-bold text-sm hover:bg-indigo-700 transition-all shadow-md shadow-indigo-200">
                    🧮 Hitung Potongan Admin Marketplace
                </a>
                <a href="{{ route('harga') }}" class="px-6 py-3 rounded-xl bg-white border border-zinc-200 text-zinc-800 font-semibold text-sm hover:bg-zinc-50 transition-all shadow-sm flex items-center gap-2">
                    🚀 Buat Website Mandiri
                </a>
            </div>
        </div>
    </section>

    {{-- Stats Highlight Grid --}}
    <section class="bg-white py-10 border-b border-zinc-100">
        <div class="max-w-5xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div class="p-4 rounded-2xl bg-emerald-50/50 border border-emerald-100">
                <div class="text-3xl font-extrabold text-emerald-700 font-brand-serif">0%</div>
                <div class="text-xs text-zinc-600 font-medium mt-1">Biaya Komisi Penjualan Web Sendiri</div>
            </div>
            <div class="p-4 rounded-2xl bg-emerald-50/50 border border-emerald-100">
                <div class="text-3xl font-extrabold text-indigo-700 font-brand-serif">Up to 15%+</div>
                <div class="text-xs text-zinc-600 font-medium mt-1">Potongan Biaya Admin Marketplace</div>
            </div>
            <div class="p-4 rounded-2xl bg-emerald-50/50 border border-emerald-100">
                <div class="text-3xl font-extrabold text-emerald-700 font-brand-serif">100%</div>
                <div class="text-xs text-zinc-600 font-medium mt-1">Hak Akses & Milik Data Pelanggan</div>
            </div>
            <div class="p-4 rounded-2xl bg-emerald-50/50 border border-emerald-100">
                <div class="text-3xl font-extrabold text-emerald-700 font-brand-serif">&lt; 1 Detik</div>
                <div class="text-xs text-zinc-600 font-medium mt-1">Kecepatan Membuka Website Laravel</div>
            </div>
        </div>
    </section>

    {{-- Digital Sovereignty Comparison (Medsos / Marketplace vs Website Mandiri) --}}
    <section id="perbandingan-langsung" class="py-16 bg-zinc-900 text-white relative overflow-hidden">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-400 bg-emerald-950 px-3.5 py-1.5 rounded-full mb-3 border border-emerald-800/50">
                    Studi Komparasi
                </span>
                <h2 class="text-2xl sm:text-4xl font-bold text-white font-brand-serif leading-tight">
                    Marketplace Pihak Ke-3 vs Website Mandiri
                </h2>
                <p class="text-zinc-400 text-sm sm:text-base mt-2">
                    Mengapa mengandalkan 100% marketplace berisiko bagi bisnis jangka panjang, dan bagaimana website sendiri memberikan kedaulatan penuh.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                {{-- Negative / Marketplace Side --}}
                <div class="p-7 rounded-2xl bg-zinc-800/70 border border-red-500/30 relative overflow-hidden flex flex-col justify-between">
                    <div class="absolute top-0 right-0 px-3.5 py-1.5 bg-red-500/20 text-red-300 text-xs font-bold rounded-bl-xl border-l border-b border-red-500/30">
                        📱 Marketplace (Shopee, Tokopedia, TikTok Shop)
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-red-400 mb-4 mt-2">"Menumpang di Lapak Orang Lain"</h3>
                        <ul class="space-y-4 text-sm text-zinc-300">
                            <li class="flex items-start gap-3">
                                <span class="text-red-400 font-bold shrink-0 text-base">✕</span>
                                <span><strong>Biaya Admin Tinggi & Berlapis:</strong> Potongan komisi terus naik (6% hingga 15%+ per transaksi), menggerus margin keuntungan bersih UMKM.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-red-400 font-bold shrink-0 text-base">✕</span>
                                <span><strong>Perang Harga Kejam:</strong> Pembeli dengan mudah melihat produk kompetitor sejenis yang lebih murah persis di bawah produk Anda.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-red-400 font-bold shrink-0 text-base">✕</span>
                                <span><strong>Data Pelanggan Terkunci:</strong> Nomor WhatsApp & email konsumen di-sensor/dianonimkan, membuat Anda sulit melakukan <i>direct marketing</i> atau retargeting.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-red-400 font-bold shrink-0 text-base">✕</span>
                                <span><strong>Risiko Akun Dibekukan:</strong> Perubahan algoritma atau kesalahan sepele bisa membuat toko di-ban atau di-shadowban tanpa peringatan.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-6 pt-4 border-t border-zinc-700/60 text-xs text-red-300/80 italic">
                        *Bisnis Anda sangat rentan terhadap keputusan sepihak pemilik platform.
                    </div>
                </div>

                {{-- Positive / Solution Side --}}
                <div class="p-7 rounded-2xl bg-emerald-950/40 border border-emerald-500/40 relative overflow-hidden flex flex-col justify-between">
                    <div class="absolute top-0 right-0 px-3.5 py-1.5 bg-emerald-500/20 text-emerald-300 text-xs font-bold rounded-bl-xl border-l border-b border-emerald-500/30">
                        🏠 Website Sendiri (Aset Digital Mandiri)
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-emerald-400 mb-4 mt-2">"Rumah & Aset Digital Milik Sendiri"</h3>
                        <ul class="space-y-4 text-sm text-zinc-200">
                            <li class="flex items-start gap-3">
                                <span class="text-emerald-400 font-bold shrink-0 text-base">✓</span>
                                <span><strong>0% Biaya Komisi Penjualan:</strong> Uang hasil penjualan 100% masuk langsung ke rekening bank atau sistem payment gateway milik Anda.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-emerald-400 font-bold shrink-0 text-base">✓</span>
                                <span><strong>Bebas Perang Harga:</strong> Pengunjung hanya melihat produk Anda tanpa adanya distraksi atau iklan produk kompetitor.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-emerald-400 font-bold shrink-0 text-base">✓</span>
                                <span><strong>Kedaulatan Database Full:</strong> Data pelanggan (nama, WA, histori belanja) 100% tersimpan aman untuk strategi <i>repeat order</i>.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-emerald-400 font-bold shrink-0 text-base">✓</span>
                                <span><strong>Kepercayaan & Brand Equity:</strong> Domain resmi (`.com` / `.id`) meningkatkan kredibilitas brand di mata konsumen & pembeli B2B.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-6 pt-4 border-t border-emerald-900/60 text-xs text-emerald-300/80 italic">
                        *Aset digital yang terus berkembang dan bisa menjadi ekosistem marketplace mandiri.
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Matrix Comparison Table Section --}}
    <section class="py-16 bg-white">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-700 bg-emerald-100 px-3.5 py-1.5 rounded-full mb-3">
                    Matriks Evaluasi
                </span>
                <h2 class="text-2xl sm:text-4xl font-bold text-zinc-900 font-brand-serif leading-tight">
                    Tabel Perbandingan Rinci Fitur & Lisensi
                </h2>
                <p class="text-zinc-600 text-sm sm:text-base mt-2">
                    Berikut adalah gambaran mendetail perbedaan operasional harian antara Marketplace vs Website Sendiri.
                </p>
            </div>

            <div class="overflow-x-auto rounded-2xl border border-zinc-200 shadow-sm">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-zinc-100/80 text-zinc-900 text-sm font-bold border-b border-zinc-200">
                            <th class="p-4 sm:p-5">Fitur / Parameter</th>
                            <th class="p-4 sm:p-5 bg-red-50/60 text-red-900 border-l border-r border-zinc-200">Marketplace Pihak Ke-3</th>
                            <th class="p-4 sm:p-5 bg-emerald-50/60 text-emerald-900">Website Sendiri (Barizaloka)</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-zinc-200 text-sm text-zinc-700">
                        <tr>
                            <td class="p-4 sm:p-5 font-semibold text-zinc-900">Biaya Komisi Penjualan</td>
                            <td class="p-4 sm:p-5 bg-red-50/20 text-red-700 border-l border-r border-zinc-200">Tinggi (6% - 15%+ per order)</td>
                            <td class="p-4 sm:p-5 bg-emerald-50/20 text-emerald-800 font-bold">0% (Bebas Komisi Penjualan)</td>
                        </tr>
                        <tr>
                            <td class="p-4 sm:p-5 font-semibold text-zinc-900">Kepemilikan Database Pelanggan</td>
                            <td class="p-4 sm:p-5 bg-red-50/20 text-red-700 border-l border-r border-zinc-200">Tidak Ada (Dihapus / Sensor)</td>
                            <td class="p-4 sm:p-5 bg-emerald-50/20 text-emerald-800 font-bold">100% Hak Milik Anda</td>
                        </tr>
                        <tr>
                            <td class="p-4 sm:p-5 font-semibold text-zinc-900">Kompetisi & Distraksi Pembeli</td>
                            <td class="p-4 sm:p-5 bg-red-50/20 text-red-700 border-l border-r border-zinc-200">Sangat Tinggi (Iklan Kompetitor)</td>
                            <td class="p-4 sm:p-5 bg-emerald-50/20 text-emerald-800 font-bold">Nihil (Hanya Produk Anda)</td>
                        </tr>
                        <tr>
                            <td class="p-4 sm:p-5 font-semibold text-zinc-900">Branding & Desain Layout</td>
                            <td class="p-4 sm:p-5 bg-red-50/20 text-red-700 border-l border-r border-zinc-200">Terbatas Template Standar</td>
                            <td class="p-4 sm:p-5 bg-emerald-50/20 text-emerald-800 font-bold">Bebas Kustomisasi 100% Sesuai Brand</td>
                        </tr>
                        <tr>
                            <td class="p-4 sm:p-5 font-semibold text-zinc-900">SEO & Ranking Google</td>
                            <td class="p-4 sm:p-5 bg-red-50/20 text-red-700 border-l border-r border-zinc-200">Meningkatkan Ranking Marketplace</td>
                            <td class="p-4 sm:p-5 bg-emerald-50/20 text-emerald-800 font-bold">Membangun Ranking & Authority Domain Anda</td>
                        </tr>
                        <tr>
                            <td class="p-4 sm:p-5 font-semibold text-zinc-900">Pilihan Pembayaran & Kurir</td>
                            <td class="p-4 sm:p-5 bg-red-50/20 text-red-700 border-l border-r border-zinc-200">Terikat Sistem Marketplace</td>
                            <td class="p-4 sm:p-5 bg-emerald-50/20 text-emerald-800 font-bold">Bebas Integrasi QRIS, Bank, E-Wallet, & Ekspedisi</td>
                        </tr>
                        <tr>
                            <td class="p-4 sm:p-5 font-semibold text-zinc-900">Kontrol Aturan & Kebijakan Toko</td>
                            <td class="p-4 sm:p-5 bg-red-50/20 text-red-700 border-l border-r border-zinc-200">Tergantung Keputusan Pengelola</td>
                            <td class="p-4 sm:p-5 bg-emerald-50/20 text-emerald-800 font-bold">Sepenuhnya di Bawah Kendali Anda</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    {{-- Technical Analysis Grid (#analisis-teknis pattern) --}}
    <section class="py-16 bg-zinc-50 border-t border-b border-zinc-200/70">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-700 bg-emerald-100 px-3.5 py-1.5 rounded-full mb-3">
                    Analisis Strategis & Teknis
                </span>
                <h2 class="text-2xl sm:text-4xl font-bold text-zinc-900 font-brand-serif leading-tight">
                    Mengapa Website Laravel Menjadi Fondasi Terbaik?
                </h2>
                <p class="text-zinc-600 text-sm sm:text-base mt-2">
                    Bagaimana arsitektur modern Laravel yang digunakan oleh Barizaloka memberikan keunggulan teknis melebihi CMS biasa atau toko marketplace.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                {{-- Point 1 --}}
                <div class="p-6 rounded-2xl bg-white border border-zinc-200 shadow-sm card-hover">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="size-10 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xl">🚀</div>
                        <div>
                            <h3 class="font-bold text-zinc-900 text-base">Performa Kecepatan Tinggi (Ultra Fast)</h3>
                            <p class="text-xs text-zinc-500">Kinerja Milidetik Tanpa Plugin Berlebih</p>
                        </div>
                    </div>
                    <ul class="space-y-3 text-sm text-zinc-600">
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-600 font-bold">•</span>
                            <span><strong>Respon Milidetik:</strong> Dibangun di atas <code class="text-emerald-700 bg-emerald-50 px-1.5 py-0.5 rounded text-xs font-mono">Laravel 13</code> dan <code class="text-emerald-700 bg-emerald-50 px-1.5 py-0.5 rounded text-xs font-mono">Livewire 4</code>, menghasilkan waktu muat halaman yang sangat cepat untuk konversi transaksi maksimal.</span>
                        </li>
                    </ul>
                </div>

                {{-- Point 2 --}}
                <div class="p-6 rounded-2xl bg-white border border-zinc-200 shadow-sm card-hover">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="size-10 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xl">📱</div>
                        <div>
                            <h3 class="font-bold text-zinc-900 text-base">Kemudahan Pembayaran & Integrasi WA</h3>
                            <p class="text-xs text-zinc-500">Checkout Sekali Klik via WhatsApp / QRIS</p>
                        </div>
                    </div>
                    <ul class="space-y-3 text-sm text-zinc-600">
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-600 font-bold">•</span>
                            <span><strong>Direct Order:</strong> Pembeli dapat memesan secara efisien via form otomatis terhubung ke WhatsApp penjual atau opsi pembayaran instan QRIS dan Transfer Bank.</span>
                        </li>
                    </ul>
                </div>

                {{-- Point 3 --}}
                <div class="p-6 rounded-2xl bg-white border border-zinc-200 shadow-sm card-hover">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="size-10 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xl">🛡️</div>
                        <div>
                            <h3 class="font-bold text-zinc-900 text-base">Keamanan & Kedaulatan Sistem</h3>
                            <p class="text-xs text-zinc-500">Perlindungan Anti SQLi, XSS, & CSRF</p>
                        </div>
                    </div>
                    <ul class="space-y-3 text-sm text-zinc-600">
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-600 font-bold">•</span>
                            <span><strong>Proteksi Kelas Enteprise:</strong> Database dan data pelanggan Anda dilindungi dengan standar enkripsi modern, aman dari kebocoran data pihak ketiga.</span>
                        </li>
                    </ul>
                </div>

                {{-- Point 4 --}}
                <div class="p-6 rounded-2xl bg-white border border-zinc-200 shadow-sm card-hover">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="size-10 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xl">📈</div>
                        <div>
                            <h3 class="font-bold text-zinc-900 text-base">Skalabilitas & Pengembangan Fitur</h3>
                            <p class="text-xs text-zinc-500">Dapat Dikembangkan Jadi Marketplace Mandiri</p>
                        </div>
                    </div>
                    <ul class="space-y-3 text-sm text-zinc-600">
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-600 font-bold">•</span>
                            <span><strong>Investasi Jangka Panjang:</strong> Website dapat ditingkatkan menjadi platform e-commerce multi-vendor, sistem keanggotaan, atau integrasi API pergudangan kapan saja.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Glassmorphism Highlight Banner (Hybrid Strategy Pattern) --}}
    <section class="py-16 bg-white">
        <div class="max-w-5xl mx-auto px-6">
            <div class="p-8 sm:p-10 rounded-3xl bg-gradient-to-br from-indigo-900 via-indigo-950 to-slate-900 text-white shadow-2xl relative overflow-hidden border border-indigo-700/50">
                <div class="absolute -top-12 -right-12 size-64 rounded-full bg-indigo-500/20 blur-3xl pointer-events-none"></div>
                <div class="relative z-10">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-indigo-500/20 border border-indigo-400/30 text-indigo-300 text-xs font-bold mb-4">
                        💡 Strategi Pemasaran Cerdas
                    </div>
                    <h2 class="text-2xl sm:text-4xl font-extrabold text-white leading-tight font-brand-serif mb-4">
                        Solusi Hibrida: Gunakan Marketplace Sebagai "Corong", Tarik Pembeli ke Website Sendiri!
                    </h2>
                    <p class="text-indigo-200 text-sm sm:text-base max-w-3xl leading-relaxed">
                        Anda tidak perlu langsung menutup toko marketplace saat ini. Strategi terbaik pengusaha sukses adalah menjadikan marketplace tempat mencari pelanggan baru (Top of Funnel), kemudian arahkan pelanggan tersebut untuk melakukan pembeliaan ulang (Repeat Order) di <strong>Website Sendiri</strong> untuk menghemat 100% komisi!
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-left mt-8">
                        <div class="p-5 rounded-2xl bg-white/10 border border-white/15 backdrop-blur-sm">
                            <div class="text-3xl mb-2">1️⃣</div>
                            <h3 class="font-bold text-white text-base mb-1">Akuisisi di Marketplace</h3>
                            <p class="text-xs text-indigo-200 leading-relaxed">Manfaatkan trafik besar marketplace untuk menjaring pembeli yang belum mengenal brand Anda.</p>
                        </div>
                        <div class="p-5 rounded-2xl bg-white/10 border border-white/15 backdrop-blur-sm">
                            <div class="text-3xl mb-2">2️⃣</div>
                            <h3 class="font-bold text-white text-base mb-1">Voucher di Kemasan</h3>
                            <p class="text-xs text-indigo-200 leading-relaxed">Insert kartu ucapan & kupon diskon khusus untuk pembelian berikutnya melalui domain website resmi Anda.</p>
                        </div>
                        <div class="p-5 rounded-2xl bg-white/10 border border-white/15 backdrop-blur-sm">
                            <div class="text-3xl mb-2">3️⃣</div>
                            <h3 class="font-bold text-white text-base mb-1">Repeat Order 0% Komisi</h3>
                            <p class="text-xs text-indigo-200 leading-relaxed">Pelanggan puas membeli kembali di website Anda. Margin utuh, data tersimpan, kedaulatan bisnis terjaga!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Founder Quote Section --}}
    <section class="py-16 bg-zinc-50 border-t border-b border-zinc-200/60">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <div class="size-16 rounded-full bg-emerald-600 text-white flex items-center justify-center font-extrabold text-2xl mx-auto mb-4 shadow-lg shadow-emerald-200">
                💬
            </div>
            <blockquote class="text-xl sm:text-2xl font-brand-serif font-bold text-zinc-800 leading-snug italic max-w-3xl mx-auto mb-6">
                "Marketplace adalah tempat beriklan, tapi Website Mandiri adalah rumah tempat bisnis Anda bertumbuh tanpa batas. Memiliki website sendiri bukan lagi kemewahan, melainkan fondasi kedaulatan usaha digital."
            </blockquote>
            <p class="text-sm font-semibold text-emerald-900">Ahla</p>
            <p class="text-xs text-zinc-500 mt-0.5">Founder & Web Software Engineer Barizaloka</p>
        </div>
    </section>

    {{-- FAQ Section --}}
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-700 bg-emerald-100 px-3.5 py-1.5 rounded-full mb-3">
                    Pertanyaan Umum (FAQ)
                </span>
                <h2 class="text-2xl sm:text-3xl font-bold text-zinc-900 font-brand-serif">
                    Hal yang Sering Ditanyakan Mengenai Website vs Marketplace
                </h2>
            </div>

            <div class="space-y-4">
                <div class="p-6 rounded-2xl bg-zinc-50 border border-zinc-200">
                    <h3 class="font-bold text-zinc-900 text-base mb-2">Apakah saya harus berhenti jualan di marketplace?</h3>
                    <p class="text-sm text-zinc-600 leading-relaxed">
                        Tidak perlu. Anda bisa tetap berjualan di marketplace sebagai saluran promosi dan menjangkau pembeli baru. Namun, jadikan website sendiri sebagai pusat transaksi utama dan saluran untuk repeat order pelanggan setia Anda.
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-zinc-50 border border-zinc-200">
                    <h3 class="font-bold text-zinc-900 text-base mb-2">Berapa besar penghematan biaya komisi jika memiliki website sendiri?</h3>
                    <p class="text-sm text-zinc-600 leading-relaxed">
                        Jika omset bulanan Anda Rp 50.000.000 dan komisi marketplace rata-rata 10%, Anda membayar Rp 5.000.000 setiap bulan hanya untuk biaya admin! Dengan website sendiri, angka potongan komisi penjualan tersebut menjadi 0%.
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-zinc-50 border border-zinc-200">
                    <h3 class="font-bold text-zinc-900 text-base mb-2">Apakah sulit mengelola website toko online sendiri?</h3>
                    <p class="text-sm text-zinc-600 leading-relaxed">
                        Tidak. Website buatan Barizaloka dilengkapi dengan panel admin intuitif dan integrasi checkout via WhatsApp atau Payment Gateway otomatis yang dirancang agar sangat mudah dioperasikan bahkan oleh pemula sekalipun.
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-zinc-50 border border-zinc-200">
                    <h3 class="font-bold text-zinc-900 text-base mb-2">Bagaimana cara memesan jasa pembuatan website di Barizaloka?</h3>
                    <p class="text-sm text-zinc-600 leading-relaxed">
                        Anda dapat melihat pilihan paket kami di halaman <a href="{{ route('harga') }}" class="text-emerald-700 underline font-semibold">Daftar Harga Barizaloka</a> atau langsung berkonsultasi gratis dengan tim teknis kami melalui WhatsApp.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Footer Section --}}
    <section class="py-16 bg-gradient-to-br from-emerald-900 via-teal-900 to-indigo-950 text-white relative overflow-hidden">
        <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
            <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-300 bg-emerald-950/80 border border-emerald-700/50 px-3.5 py-1.5 rounded-full mb-4">
                Siap Berdikari Secara Digital?
            </span>
            <h2 class="text-3xl sm:text-5xl font-extrabold font-brand-serif leading-tight mb-4">
                Mulai Bangun Rumah Digital & Bebaskan Bisnis Anda Dari Komisi Tinggi
            </h2>
            <p class="text-emerald-100 text-base sm:text-lg max-w-2xl mx-auto mb-8 leading-relaxed">
                Konsultasikan kebutuhan pembuatan website toko online mandiri Anda bersama tim ahli Barizaloka hari ini.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="https://wa.me/6281234567890?text=Halo%20Barizaloka,%20saya%20ingin%20konsultasi%20pembuatan%20website%20toko%20online%20mandiri" target="_blank" rel="noopener noreferrer" class="px-7 py-3.5 rounded-xl bg-emerald-500 text-zinc-950 font-bold text-sm hover:bg-emerald-400 transition-all shadow-lg shadow-emerald-900/50 flex items-center gap-2">
                    💬 Konsultasi Gratis via WhatsApp
                </a>
                <a href="{{ route('kalkulator-biaya-admin-marketplace') }}" class="px-7 py-3.5 rounded-xl bg-white/10 border border-white/20 text-white font-bold text-sm hover:bg-white/20 transition-all">
                    🧮 Hitung Potongan Admin
                </a>
                <a href="{{ route('harga') }}" class="px-7 py-3.5 rounded-xl bg-indigo-600 text-white font-bold text-sm hover:bg-indigo-500 transition-all shadow-md">
                    🏷️ Lihat Paket Website
                </a>
            </div>
        </div>
    </section>

</x-layouts.base>
