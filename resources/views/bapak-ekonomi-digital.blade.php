<x-layouts.base
    title="Bapak Ekonomi Indonesia: Solusi Digital Sekarang untuk Kedaulatan Bisnis — Barizaloka"
    description="Analisis komprehensif pemikiran Drs. Mohammad Hatta (Bung Hatta) tentang Kedaulatan Ekonomi & Koperasi, serta penerapannya dalam bentuk solusi teknologi digital, website mandiri, dan kemandirian UMKM modern."
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
        <div class="absolute top-10 left-8 size-72 rounded-full bg-emerald-200/30 blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-10 right-8 size-80 rounded-full bg-indigo-200/30 blur-3xl pointer-events-none"></div>

        <div class="relative max-w-4xl mx-auto px-6 text-center flex flex-col items-center gap-5">
            <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-sm text-zinc-500 hover:text-emerald-700 transition-colors">
                <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Kembali ke Beranda
            </a>

            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/90 backdrop-blur-sm border border-emerald-200 text-xs font-bold text-emerald-800 shadow-sm">
                <span class="size-2 rounded-full bg-emerald-500 animate-pulse"></span>
                🇮🇩 Warisan Bung Hatta & Digitalisasi Ekonomi Kerakyatan
            </div>

            <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-zinc-900 leading-tight">
                Bapak Ekonomi Indonesia:<br>
                <span class="gradient-text-green">Solusi Digital Sekarang untuk Kedaulatan Bisnis Mandiri</span>
            </h1>

            <p class="text-base sm:text-lg text-zinc-600 max-w-2xl leading-relaxed">
                Menghubungkan pesan abadi Drs. Mohammad Hatta (Bung Hatta) tentang <strong>Demokrasi Ekonomi, Koperasi, dan Berdikari</strong> dengan teknologi modern: membangun aset digital mandiri yang bebas dari ketergantungan penuh pada platform pihak ketiga.
            </p>

            <div class="flex flex-wrap items-center justify-center gap-3 mt-2">
                <a href="#analisis-ekonomi" class="px-6 py-3 rounded-xl bg-emerald-600 text-white font-bold text-sm hover:bg-emerald-700 transition-all shadow-md shadow-emerald-200">
                    📖 Pelajari Relevansi Digital
                </a>
                <a href="{{ route('harga') }}" class="px-6 py-3 rounded-xl bg-indigo-600 text-white font-bold text-sm hover:bg-indigo-700 transition-all shadow-md shadow-indigo-200">
                    🚀 Bangun Website Mandiri Sekarang
                </a>
            </div>
        </div>
    </section>

    {{-- Blockquote Section: Quote Bung Hatta --}}
    <section class="py-16 bg-white border-b border-zinc-100">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <div class="size-16 rounded-full bg-emerald-600 text-white flex items-center justify-center font-extrabold text-2xl mx-auto mb-4 shadow-lg shadow-emerald-200">
                🇮🇩
            </div>
            <blockquote class="text-xl sm:text-2xl font-brand-serif font-bold text-zinc-800 leading-snug italic max-w-3xl mx-auto mb-6">
                "Ekonomi Indonesia bukan didirikan atas dasar individualisme, melainkan atas dasar kekeluargaan dan gotong royong. Kedaulatan ekonomi rakyat hanya bisa berdiri kokoh jika kita mampu menguasai alat produksi dan saluran distribusi kita sendiri."
            </blockquote>
            <p class="text-sm font-semibold text-emerald-900">Drs. Mohammad Hatta (Bung Hatta)</p>
            <p class="text-xs text-zinc-500 mt-0.5">Wakil Presiden Pertama RI & Bapak Ekonomi / Koperasi Indonesia</p>
        </div>
    </section>

    {{-- Stats Highlight Grid --}}
    <section class="py-12 bg-emerald-50/40 border-b border-emerald-100/60">
        <div class="max-w-5xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div class="p-5 rounded-2xl bg-white border border-emerald-100 shadow-sm">
                <div class="text-3xl font-extrabold text-emerald-700 font-brand-serif">100%</div>
                <div class="text-xs text-zinc-600 font-medium mt-1">Kepemilikan Data & Asset Digital</div>
            </div>
            <div class="p-5 rounded-2xl bg-white border border-emerald-100 shadow-sm">
                <div class="text-3xl font-extrabold text-emerald-700 font-brand-serif">0%</div>
                <div class="text-xs text-zinc-600 font-medium mt-1">Potongan Biaya Komisi Admin</div>
            </div>
            <div class="p-5 rounded-2xl bg-white border border-emerald-100 shadow-sm">
                <div class="text-3xl font-extrabold text-emerald-700 font-brand-serif">&lt; 1 Detik</div>
                <div class="text-xs text-zinc-600 font-medium mt-1">Kecepatan Akses Laravel</div>
            </div>
            <div class="p-5 rounded-2xl bg-white border border-emerald-100 shadow-sm">
                <div class="text-3xl font-extrabold text-emerald-700 font-brand-serif">24/7</div>
                <div class="text-xs text-zinc-600 font-medium mt-1">Transparansi Operasional Digital</div>
            </div>
        </div>
    </section>

    {{-- Analisis Ekonomi & 4 Pilar Pemikiran Bung Hatta --}}
    <section id="analisis-ekonomi" class="py-16 bg-white">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-700 bg-emerald-100 px-3.5 py-1.5 rounded-full mb-3">
                    Analisis Strategis
                </span>
                <h2 class="text-2xl sm:text-4xl font-bold text-zinc-900 font-brand-serif leading-tight">
                    Transformasi 4 Pilar Bung Hatta di Era Ekonomi Digital
                </h2>
                <p class="text-zinc-600 text-sm sm:text-base mt-2">
                    Bagaimana prinsip ekonomi kerakyatan Bung Hatta menjadi kompas utama bagi UMKM, Koperasi, dan Pengusaha Indonesia dalam mengarungi arus digitalisasi.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                {{-- Pilar 1 --}}
                <div class="p-7 rounded-3xl bg-zinc-50 border border-zinc-200/80 shadow-sm card-hover flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <div class="size-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xl shrink-0">
                                🏛️
                            </div>
                            <div>
                                <h3 class="font-bold text-zinc-900 text-lg">1. Demokrasi Ekonomi &amp; Kedaulatan Digital</h3>
                                <p class="text-xs text-emerald-700 font-semibold">Berdikari di Atas Domain &amp; Server Sendiri</p>
                            </div>
                        </div>
                        <p class="text-sm text-zinc-600 leading-relaxed mb-4">
                            Bung Hatta menekankan pentingnya rakyat menguasai saluran usahanya sendiri. Di era internet, menumpang 100% pada media sosial atau marketplace pihak ketiga membuat bisnis rentan terhadap perubahan algoritma, kenaikan biaya komisi mendadak, hingga penutupan akun sepihak.
                        </p>
                    </div>
                    <div class="p-4 rounded-xl bg-emerald-50/80 border border-emerald-100 text-xs text-emerald-900">
                        ✨ <strong>Solusi Digital:</strong> Memiliki website mandiri (`.id` / `.co.id`) adalah langkah nyata menegakkan kedaulatan digital dan mengamankan database pelanggan Anda.
                    </div>
                </div>

                {{-- Pilar 2 --}}
                <div class="p-7 rounded-3xl bg-zinc-50 border border-zinc-200/80 shadow-sm card-hover flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <div class="size-12 rounded-2xl bg-indigo-100 text-indigo-700 flex items-center justify-center font-bold text-xl shrink-0">
                                🤝
                            </div>
                            <div>
                                <h3 class="font-bold text-zinc-900 text-lg">2. Koperasi &amp; Gotong Royong Modern</h3>
                                <p class="text-xs text-indigo-700 font-semibold">Saling Menguatkan Lewat Ekosistem Marketplace Mandiri</p>
                            </div>
                        </div>
                        <p class="text-sm text-zinc-600 leading-relaxed mb-4">
                            Koperasi bukan sekadar lembaga simpan pinjam konvensional, melainkan simbol kolaborasi ekonomi. Dengan teknologi web modern, koperasi dan asosiasi bisnis dapat membangun katalog bersama, direktori anggota, dan jaringan distribusi tanpa komisi predator.
                        </p>
                    </div>
                    <div class="p-4 rounded-xl bg-indigo-50/80 border border-indigo-100 text-xs text-indigo-900">
                        🛒 <strong>Solusi Digital:</strong> Integrasi portal marketplace mandiri yang menghubungkan produsen lokal langsung ke konsumen secara efisien.
                    </div>
                </div>

                {{-- Pilar 3 --}}
                <div class="p-7 rounded-3xl bg-zinc-50 border border-zinc-200/80 shadow-sm card-hover flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <div class="size-12 rounded-2xl bg-teal-100 text-teal-700 flex items-center justify-center font-bold text-xl shrink-0">
                                📈
                            </div>
                            <div>
                                <h3 class="font-bold text-zinc-900 text-lg">3. Kebangkitan UMKM &amp; Ekonomi Kerakyatan</h3>
                                <p class="text-xs text-teal-700 font-semibold">Teknologi Kelas Enterprise yang Terjangkau</p>
                            </div>
                        </div>
                        <p class="text-sm text-zinc-600 leading-relaxed mb-4">
                            Teknologi canggih seperti framework <code class="text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded text-xs font-mono">Laravel</code> yang dulunya hanya mampu dibeli oleh korporasi raksasa, kini hadir secara terjangkau bagi UMKM dan pedagang lokal melalui sistem pembangunan terstruktur.
                        </p>
                    </div>
                    <div class="p-4 rounded-xl bg-teal-50/80 border border-teal-100 text-xs text-teal-900">
                        ⚡ <strong>Solusi Digital:</strong> Aksesibilitas sistem informasi bisnis berkecepatan tinggi tanpa beban biaya langganan bulanan yang mencekik.
                    </div>
                </div>

                {{-- Pilar 4 --}}
                <div class="p-7 rounded-3xl bg-zinc-50 border border-zinc-200/80 shadow-sm card-hover flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <div class="size-12 rounded-2xl bg-amber-100 text-amber-800 flex items-center justify-center font-bold text-xl shrink-0">
                                🔍
                            </div>
                            <div>
                                <h3 class="font-bold text-zinc-900 text-lg">4. Transparansi &amp; Akuntabilitas Keuangan</h3>
                                <p class="text-xs text-amber-800 font-semibold">Pencatatan &amp; Pelaporan Terbuka Real-Time</p>
                            </div>
                        </div>
                        <p class="text-sm text-zinc-600 leading-relaxed mb-4">
                            Kepercayaan (*trust*) adalah fondasi utama ekonomi kerakyatan Bung Hatta. Sistem digital memfasilitasi pencatatan arus dana, transaksi penjualan, dan laporan keuangan yang presisi, aman dari manipulasi data, dan mudah diaudit.
                        </p>
                    </div>
                    <div class="p-4 rounded-xl bg-amber-50/80 border border-amber-200 text-xs text-amber-900">
                        📊 <strong>Solusi Digital:</strong> Dashboard manajemen transaksi dan otomatisasi kwitansi digital yang meningkatkan tingkat kepercayaan pelanggan.
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Digital Sovereignty Comparison Section (Pattern E) --}}
    <section class="py-16 bg-gradient-to-br from-indigo-950 via-slate-900 to-zinc-900 text-white">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-400 bg-white/10 px-3.5 py-1.5 rounded-full mb-3">
                    Kedaulatan Digital
                </span>
                <h2 class="text-2xl sm:text-4xl font-bold font-brand-serif leading-tight">
                    Medsos Pihak Ke-3 vs Website Mandiri
                </h2>
                <p class="text-zinc-300 text-sm sm:text-base mt-2">
                    Mengapa pebisnis dan koperasi di Indonesia perlu mengalihkan pusat aktivitas digitalnya ke aset milik sendiri.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Negative / Risk Side -->
                <div class="p-7 rounded-3xl bg-white/5 border border-red-500/30 relative overflow-hidden flex flex-col justify-between">
                    <div class="absolute top-0 right-0 px-3 py-1 bg-red-500/20 text-red-300 text-xs font-bold rounded-bl-xl border-l border-b border-red-500/30">
                        📱 Media Sosial &amp; Platform Pihak Ke-3
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-red-400 mb-4 mt-2">"Menumpang di Tanah Orang Lain"</h3>
                        <ul class="space-y-3.5 text-sm text-zinc-300">
                            <li class="flex items-start gap-2.5">
                                <span class="text-red-400 font-bold shrink-0">✕</span>
                                <span><strong>Risiko Suspend &amp; Pemblokiran:</strong> Akun jualan atau toko bisa ditutup sewaktu-waktu tanpa pemberitahuan jelas.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="text-red-400 font-bold shrink-0">✕</span>
                                <span><strong>Biaya Admin Melonjak:</strong> Potongan komisi penjualan mencapai 5% hingga 20% yang tergolong <a href="{{ route('kalkulator-biaya-admin-marketplace') }}" class="underline text-red-300 hover:text-red-200">memberatkan marjin UMKM</a>.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="text-red-400 font-bold shrink-0">✕</span>
                                <span><strong>Bukan Milik Anda:</strong> Data kontak pelanggan dan riwayat transaksi dikuasai penuh oleh penyedia platform.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-6 p-4 rounded-xl bg-red-950/40 border border-red-500/30 text-xs text-red-200">
                        ⚠️ <em>Bisnis tidak memiliki ketahanan jangka panjang jika hanya bergantung pada aturan main platform orang lain.</em>
                    </div>
                </div>

                <!-- Positive / Solution Side -->
                <div class="p-7 rounded-3xl bg-emerald-950/40 border border-emerald-500/40 relative overflow-hidden flex flex-col justify-between">
                    <div class="absolute top-0 right-0 px-3 py-1 bg-emerald-500/20 text-emerald-300 text-xs font-bold rounded-bl-xl border-l border-b border-emerald-500/30">
                        🏠 Website Mandiri (Aset Milik Sendiri)
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-emerald-400 mb-4 mt-2">"Rumah &amp; Aset Digital Bebas Kendali"</h3>
                        <ul class="space-y-3.5 text-sm text-zinc-200">
                            <li class="flex items-start gap-2.5">
                                <span class="text-emerald-400 font-bold shrink-0">✓</span>
                                <span><strong>100% Kepemilikan Hak Cipta &amp; Data:</strong> Database pelanggan, riwayat pesan, dan domain resmi sepenuhnya milik usaha Anda.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="text-emerald-400 font-bold shrink-0">✓</span>
                                <span><strong>Bebas Potongan Komisi:</strong> Setiap rupiah nilai penjualan masuk utuh ke rekening usaha atau akun QRIS Anda.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="text-emerald-400 font-bold shrink-0">✓</span>
                                <span><strong>Peringkat Pencarian Google (SEO):</strong> Mudah ditemukan calon pembeli yang aktif mencari kata kunci produk Anda di Google.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-6 p-4 rounded-xl bg-emerald-900/40 border border-emerald-500/30 text-xs text-emerald-200">
                        ✅ <em>Menegakkan kedaulatan ekonomi digital sesuai cita-cita kemandirian Bung Hatta.</em>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Technical Analysis Grid Section (Pattern D) --}}
    <section class="py-16 bg-zinc-50">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-700 bg-emerald-100 px-3.5 py-1.5 rounded-full mb-3">
                    Analisis Teknis Software
                </span>
                <h2 class="text-2xl sm:text-4xl font-bold text-zinc-900 font-brand-serif leading-tight">
                    Mengapa Website Barizaloka Menjadi Solusi Digital Tepat?
                </h2>
                <p class="text-zinc-600 text-sm sm:text-base mt-2">
                    Kami merancang setiap baris kode dengan fondasi terbaik untuk menjamin kecepatan, keandalan, dan keamanan aset digital Anda.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="p-6 rounded-2xl bg-white border border-zinc-200 shadow-sm card-hover">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="size-10 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xl shrink-0">🚀</div>
                        <div>
                            <h3 class="font-bold text-zinc-900 text-base">Arsitektur Laravel 13 &amp; Livewire 4</h3>
                            <p class="text-xs text-zinc-500">Performa Tinggi Tanpa Overhead Heavy Plugins</p>
                        </div>
                    </div>
                    <ul class="space-y-3 text-sm text-zinc-600">
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-600 font-bold">•</span>
                            <span><strong>Loading Super Cepat:</strong> Waktu muat halaman di bawah 1 detik, memberikan pengalaman pengguna (*user experience*) terbaik.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-600 font-bold">•</span>
                            <span><strong>Kode Bersih &amp; Terstruktur:</strong> Dikelola sesuai konvensi standar Laravel modern yang mudah dikembangkan di masa mendatang.</span>
                        </li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-white border border-zinc-200 shadow-sm card-hover">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="size-10 rounded-xl bg-indigo-100 text-indigo-700 flex items-center justify-center font-bold text-xl shrink-0">💳</div>
                        <div>
                            <h3 class="font-bold text-zinc-900 text-base">Integrasi Payment Gateway &amp; QRIS</h3>
                            <p class="text-xs text-zinc-500">Otomatisasi Pembayaran Langsung</p>
                        </div>
                    </div>
                    <ul class="space-y-3 text-sm text-zinc-600">
                        <li class="flex items-start gap-2">
                            <span class="text-indigo-600 font-bold">•</span>
                            <span><strong>Kemudahan Konsumen:</strong> Mendukung pembayaran via QRIS All Payment, Virtual Account Bank, serta e-Wallet.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-indigo-600 font-bold">•</span>
                            <span><strong>Verifikasi Otomatis:</strong> Sistem mengonfirmasi transaksi secara otomatis tanpa perlunya cek mutasi manual.</span>
                        </li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-white border border-zinc-200 shadow-sm card-hover">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="size-10 rounded-xl bg-teal-100 text-teal-700 flex items-center justify-center font-bold text-xl shrink-0">🛡️</div>
                        <div>
                            <h3 class="font-bold text-zinc-900 text-base">Keamanan Enterprise Bawaan</h3>
                            <p class="text-xs text-zinc-500">Proteksi Data Pelanggan Terjamin</p>
                        </div>
                    </div>
                    <ul class="space-y-3 text-sm text-zinc-600">
                        <li class="flex items-start gap-2">
                            <span class="text-teal-600 font-bold">•</span>
                            <span><strong>Anti CSRF &amp; SQL Injection:</strong> Proteksi tingkat tinggi mencegah kebocoran data pelanggan dan ancaman peretasan.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-teal-600 font-bold">•</span>
                            <span><strong>Enkripsi Data SSL:</strong> Menjamin kerahasiaan komunikasi data antara pembeli dan server website Anda.</span>
                        </li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-white border border-zinc-200 shadow-sm card-hover">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="size-10 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center font-bold text-xl shrink-0">📱</div>
                        <div>
                            <h3 class="font-bold text-zinc-900 text-base">Desain Responsive &amp; Mobile-First</h3>
                            <p class="text-xs text-zinc-500">Optimal di Semua Ukuran Layar</p>
                        </div>
                    </div>
                    <ul class="space-y-3 text-sm text-zinc-600">
                        <li class="flex items-start gap-2">
                            <span class="text-amber-600 font-bold">•</span>
                            <span><strong>Layout Tailwind CSS v4:</strong> Tampilan yang sangat rapi, fleksibel, dan nyaman diakses melalui ponsel maupun laptop.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-amber-600 font-bold">•</span>
                            <span><strong>Integrasi WhatsApp Direct:</strong> Fitur tombol pemesanan instan yang langsung terhubung ke WhatsApp bisnis Anda.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Glassmorphism Highlight Banner (Pattern F) --}}
    <section class="py-16 bg-white">
        <div class="max-w-5xl mx-auto px-6">
            <div class="p-8 sm:p-10 rounded-3xl bg-gradient-to-br from-emerald-900 via-teal-950 to-indigo-950 text-white shadow-2xl relative overflow-hidden border border-emerald-700/50">
                <div class="absolute -top-12 -right-12 size-64 rounded-full bg-emerald-500/20 blur-3xl pointer-events-none"></div>
                <div class="relative z-10">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-500/20 border border-emerald-400/30 text-emerald-300 text-xs font-bold mb-4">
                        🌱 Wujudkan Spirit Ekonomi Kerakyatan
                    </div>
                    <h2 class="text-2xl sm:text-4xl font-extrabold text-white leading-tight font-brand-serif mb-4">
                        Saatnya UMKM &amp; Koperasi Indonesia Naik Kelas dengan Web Mandiri
                    </h2>
                    <p class="text-emerald-100/90 text-sm sm:text-base max-w-2xl leading-relaxed mb-8">
                        Barizaloka berkomitmen mendampingi para pelaku usaha, pemilik brand lokal, koperasi, dan lembaga lokal untuk memiliki infrastruktur web yang andal, estetis, dan terjangkau.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-left">
                        <div class="p-5 rounded-2xl bg-white/10 border border-white/15 backdrop-blur-sm">
                            <div class="text-3xl mb-2">🏢</div>
                            <h3 class="font-bold text-white text-base mb-1">Company Profile</h3>
                            <p class="text-xs text-emerald-200 leading-relaxed">Meningkatkan kepercayaan mitra bisnis dan calon pembeli secara instan.</p>
                        </div>
                        <div class="p-5 rounded-2xl bg-white/10 border border-white/15 backdrop-blur-sm">
                            <div class="text-3xl mb-2">🛍️</div>
                            <h3 class="font-bold text-white text-base mb-1">Katalog E-Commerce</h3>
                            <p class="text-xs text-emerald-200 leading-relaxed">Menampilkan deretan produk unggulan dengan opsi pemesanan otomatis.</p>
                        </div>
                        <div class="p-5 rounded-2xl bg-white/10 border border-white/15 backdrop-blur-sm">
                            <div class="text-3xl mb-2">📊</div>
                            <h3 class="font-bold text-white text-base mb-1">Portal Operasional</h3>
                            <p class="text-xs text-emerald-200 leading-relaxed">Sistem informasi manajemen transaksi dan keanggotaan terintegrasi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Grand CTA Section --}}
    <section class="py-20 bg-gradient-to-br from-emerald-900 via-teal-900 to-indigo-950 text-white text-center">
        <div class="max-w-3xl mx-auto px-6 flex flex-col items-center gap-6">
            <span class="text-5xl">🇮🇩</span>
            <h2 class="text-3xl sm:text-4xl font-bold leading-tight font-brand-serif">
                Siap Menegakkan Kedaulatan Digital Bisnis Anda?
            </h2>
            <p class="text-emerald-100/90 text-base max-w-xl">
                Jangan tunda kepemilikan aset digital mandiri. Konsultasikan kebutuhan website bisnis atau sistem koperasi Anda bersama tim spesialis Barizaloka.
            </p>

            <div class="flex flex-wrap justify-center items-center gap-3">
                <a href="https://wa.me/6285188158542?text=Halo%20Barizaloka,%20saya%20tertarik%20konsultasi%20pembuatan%20website%20mandiri%20berdasarkan%20semangat%20Bapak%20Ekonomi%20Indonesia"
                   target="_blank" rel="noopener noreferrer"
                   class="px-8 py-4 rounded-xl bg-white text-emerald-950 font-bold text-sm hover:bg-emerald-50 transition-all shadow-lg">
                    💬 Konsultasi Gratis via WhatsApp
                </a>
                <a href="{{ route('harga') }}"
                   class="px-8 py-4 rounded-xl bg-white/10 backdrop-blur-sm border border-white/20 text-white font-bold text-sm hover:bg-white/20 transition-all">
                    💰 Lihat Paket Pembuatan Website
                </a>
            </div>
        </div>
    </section>

</x-layouts.base>
