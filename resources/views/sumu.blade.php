<x-layouts.base
    title="Analisis SUMU & Harapan Digitalisasi Ekonomi Umat — Barizaloka"
    description="Analisis platform Serikat Usaha Muhammadiyah (sumu.or.id), keunggulan Laravel, prinsip transparansi, kepemilikan aset web vs media sosial, dan peluang marketplace mandiri dari Founder Barizaloka."
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
        {{-- Background Accents --}}
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
                💚 Dakwah Ekonomi Umat • Muhammadiyah
            </div>

            <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-zinc-900 leading-tight">
                Serikat Usaha Muhammadiyah <span class="gradient-text-green">(SUMU)</span><br>
                <span class="text-2xl sm:text-4xl font-bold text-zinc-700 font-brand-serif">Analisis Laravel & Harapan Web Software Engineer</span>
            </h1>

            <p class="text-base sm:text-lg text-zinc-600 max-w-2xl leading-relaxed">
                Refleksi dan ide pemikiran dari <strong class="text-zinc-900">Ahla (Founder Barizaloka)</strong> — seorang warga Muhammadiyah sekaligus <i>Web Software Engineer</i>, tentang akselerasi gerakan ekonomi wirausaha umat melalui fondasi <strong class="text-emerald-700">Laravel</strong>, prinsip transparansi, kepemilikan aset digital mandiri, hingga potensi pembuatan <strong class="text-indigo-700">Marketplace Sendiri</strong>.
            </p>

            <div class="flex flex-wrap items-center justify-center gap-3 mt-2">
                <a href="#analisis-teknis" class="px-6 py-3 rounded-xl bg-emerald-600 text-white font-bold text-sm hover:bg-emerald-700 transition-all shadow-md shadow-emerald-200">
                    💻 Lihat Analisis & Fondasi Laravel
                </a>
                <a href="#marketplace-mandiri" class="px-6 py-3 rounded-xl bg-indigo-600 text-white font-bold text-sm hover:bg-indigo-700 transition-all shadow-md shadow-indigo-200">
                    🛒 Potensi Marketplace Mandiri
                </a>
                <a href="https://sumu.or.id" target="_blank" rel="noopener noreferrer" class="px-6 py-3 rounded-xl bg-white border border-zinc-200 text-zinc-800 font-semibold text-sm hover:bg-zinc-50 transition-all shadow-sm flex items-center gap-2">
                    🌐 Kunjungi sumu.or.id
                    <svg class="size-4 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- Stats Highlight --}}
    <section class="bg-white py-10 border-b border-zinc-100">
        <div class="max-w-5xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div class="p-4 rounded-2xl bg-emerald-50/50 border border-emerald-100">
                <div class="text-3xl font-extrabold text-emerald-700 font-brand-serif">SUMU</div>
                <div class="text-xs text-zinc-600 font-medium mt-1">Serikat Usaha Muhammadiyah</div>
            </div>
            <div class="p-4 rounded-2xl bg-emerald-50/50 border border-emerald-100">
                <div class="text-3xl font-extrabold text-emerald-700 font-brand-serif">Laravel</div>
                <div class="text-xs text-zinc-600 font-medium mt-1">Sistem Web Berkinerja Tinggi</div>
            </div>
            <div class="p-4 rounded-2xl bg-emerald-50/50 border border-emerald-100">
                <div class="text-3xl font-extrabold text-emerald-700 font-brand-serif">Transparan</div>
                <div class="text-xs text-zinc-600 font-medium mt-1">Akuntabilitas Ekonomi Umat</div>
            </div>
            <div class="p-4 rounded-2xl bg-emerald-50/50 border border-emerald-100">
                <div class="text-3xl font-extrabold text-emerald-700 font-brand-serif">Mandiri</div>
                <div class="text-xs text-zinc-600 font-medium mt-1">Bebas Aturan Medsos Orang Lain</div>
            </div>
        </div>
    </section>

    {{-- Mengenal SUMU Section --}}
    <section class="py-16 bg-zinc-50/50">
        <div class="max-w-5xl mx-auto px-6">
            <div class="flex flex-col md:flex-row gap-10 items-center">
                <div class="w-full md:w-1/2">
                    <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-700 bg-emerald-100 px-3.5 py-1.5 rounded-full mb-3">Tentang SUMU</span>
                    <h2 class="text-2xl sm:text-3xl font-bold text-zinc-900 leading-tight mb-4 font-brand-serif">
                        Wadah Wirausaha Memakmurkan Anggota & Memajukan Indonesia
                    </h2>
                    <p class="text-zinc-600 leading-relaxed mb-4 text-sm sm:text-base">
                        <strong>Serikat Usaha Muhammadiyah (SUMU)</strong> adalah komunitas dan platform kolaborasi gerakan kewirausahaan inklusif yang digagas untuk memperkuat jaring-jaring wirausaha warga Muhammadiyah dan masyarakat luas.
                    </p>
                    <p class="text-zinc-600 leading-relaxed text-sm sm:text-base mb-6">
                        SUMU tidak hanya menjadi wadah silaturahmi pengusaha, tetapi juga mesin pertumbuhan ekonomi yang berorientasi pada pencetakan konglomerasi Islam yang beretika, profesional, transparan, dan berdaya saing global.
                    </p>
                    <div class="p-4 rounded-xl bg-white border border-emerald-200/80 shadow-sm flex items-start gap-3">
                        <span class="text-2xl">🎯</span>
                        <div>
                            <h4 class="font-bold text-zinc-900 text-sm">Visi Besar 2045</h4>
                            <p class="text-xs text-zinc-600 mt-0.5">Mengantarkan setidaknya 30 anggota SUMU masuk ke dalam daftar 100 orang terkaya di Indonesia pada tahun 2045, sejalan dengan visi Indonesia Emas.</p>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-1/2 grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="p-5 rounded-2xl bg-white border border-zinc-200/80 shadow-sm card-hover">
                        <span class="text-2xl">📱</span>
                        <h3 class="font-bold text-zinc-900 mt-2 text-sm sm:text-base">SUMU Pro</h3>
                        <p class="text-xs text-zinc-500 mt-1">Platform interaksi, aplikasi jejaring wirausaha, serta sesi mentoring antar anggota.</p>
                    </div>
                    <div class="p-5 rounded-2xl bg-white border border-zinc-200/80 shadow-sm card-hover">
                        <span class="text-2xl">⚡</span>
                        <h3 class="font-bold text-zinc-900 mt-2 text-sm sm:text-base">SUMU Catalyst</h3>
                        <p class="text-xs text-zinc-500 mt-1">Kolaborasi antar usaha anggota untuk akselerasi pertumbuhan bisnis secara sinergis.</p>
                    </div>
                    <div class="p-5 rounded-2xl bg-white border border-zinc-200/80 shadow-sm card-hover">
                        <span class="text-2xl">🚀</span>
                        <h3 class="font-bold text-zinc-900 mt-2 text-sm sm:text-base">Venture Builder</h3>
                        <p class="text-xs text-zinc-500 mt-1">Inkubasi & kurasi bisnis terstruktur untuk persiapan scaling up dan pasar ekspor.</p>
                    </div>
                    <div class="p-5 rounded-2xl bg-white border border-zinc-200/80 shadow-sm card-hover">
                        <span class="text-2xl">👑</span>
                        <h3 class="font-bold text-zinc-900 mt-2 text-sm sm:text-base">Exclusive Club</h3>
                        <p class="text-xs text-zinc-500 mt-1">Pendampingan strategi khusus bagi pelaku usaha skala besar (>100 karyawan / asset >Rp10M).</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Analisis Teknis & Laravel Framework --}}
    <section id="analisis-teknis" class="py-16 bg-white">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-700 bg-emerald-100 px-3.5 py-1.5 rounded-full mb-3">Perspektif Software Engineer</span>
                <h2 class="text-2xl sm:text-3xl font-bold text-zinc-900 font-brand-serif">
                    Membangun Sistem SUMU dengan Arsitektur <code class="text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded text-lg sm:text-xl font-mono">Laravel</code>
                </h2>
                <p class="text-zinc-600 text-sm sm:text-base mt-2">
                    Mengapa framework Laravel menjadi pilihan ideal untuk menghadirkan kecepatan tinggi, keamanan terjamin, serta keleluasaan membangun portal organisasi dan ekosistem bisnis modern.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                {{-- Keunggulan Laravel untuk Ekosistem SUMU --}}
                <div class="p-6 rounded-2xl bg-zinc-50 border border-zinc-200">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="size-10 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xl">🚀</div>
                        <div>
                            <h3 class="font-bold text-zinc-900 text-base">Mengapa Memilih Laravel?</h3>
                            <p class="text-xs text-zinc-500">Kinerja Maksimal, Skalabilitas, & Fleksibilitas</p>
                        </div>
                    </div>
                    <ul class="space-y-3 text-sm text-zinc-600">
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-600 font-bold">•</span>
                            <span><strong>Performa Ringan & Cepat:</strong> Laravel tidak memuat beban plugin berlebih. Halaman terbuka dalam hitungan milidetik, hemat kuota internet pengguna, dan sangat stabil di ponsel.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-600 font-bold">•</span>
                            <span><strong>Kustomisasi Tanpa Batas:</strong> Seluruh fitur (pendaftaran anggota, sistem kurasi bisnis, sertifikasi verifikasi) dapat disesuaikan 100% dengan alur kerja SUMU tanpa batasan template.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-600 font-bold">•</span>
                            <span><strong>Keamanan Tingkat Enterprise:</strong> Dilengkapi perlindungan bawaan terhadap serangan SQL Injection, Cross-Site Scripting (XSS), dan CSRF untuk menjaga data anggota tetap aman.</span>
                        </li>
                    </ul>
                </div>

                {{-- Prinsip Transparansi & Akuntabilitas Digital --}}
                <div class="p-6 rounded-2xl bg-zinc-50 border border-zinc-200">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="size-10 rounded-xl bg-indigo-100 text-indigo-700 flex items-center justify-center font-bold text-xl">🔍</div>
                        <div>
                            <h3 class="font-bold text-zinc-900 text-base">Prinsip Transparansi Digital</h3>
                            <p class="text-xs text-zinc-500">Akuntabilitas Publik & Kepercayaan Umat</p>
                        </div>
                    </div>
                    <ul class="space-y-3 text-sm text-zinc-600">
                        <li class="flex items-start gap-2">
                            <span class="text-indigo-600 font-bold">•</span>
                            <span><strong>Transparansi Data & Verifikasi Usaha:</strong> Setiap profil bisnis anggota terverifikasi secara terbuka, membangun kepercayaan tinggi di antara sesama wirausahawan dan konsumen.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-indigo-600 font-bold">•</span>
                            <span><strong>Laporan Arus Dana & Program Publik:</strong> Dashboard transparan untuk menampilkan perkembangan program pemberdayaan, statistik anggota, hingga pencapaian target usaha secara real-time.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-indigo-600 font-bold">•</span>
                            <span><strong>Open & Auditable Workflow:</strong> Sistem berbasis Laravel memungkinkan auditibilitas data yang jelas dan rapi untuk pelaporan keanggotaan persyarikatan.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Website Sendiri vs Media Sosial Orang Lain --}}
    <section class="py-16 bg-gradient-to-br from-zinc-900 via-zinc-800 to-zinc-900 text-white">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-400 bg-white/10 px-3.5 py-1.5 rounded-full mb-3">Pentingnya Kemandirian Digital</span>
                <h2 class="text-2xl sm:text-4xl font-bold font-brand-serif leading-tight">
                    Beda Website Milik Sendiri dengan <span class="text-emerald-400">Media Sosial Orang Lain</span>
                </h2>
                <p class="text-zinc-300 text-sm sm:text-base mt-3">
                    Mengapa wirausahawan dan organisasi Muhammadiyah tidak boleh hanya mengandalkan platform pihak ketiga.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                {{-- Media Sosial (Tanah Numpang/Sewa) --}}
                <div class="p-7 rounded-2xl bg-white/5 border border-red-500/30 relative overflow-hidden">
                    <div class="absolute top-0 right-0 px-3 py-1 bg-red-500/20 text-red-300 text-xs font-bold rounded-bl-xl border-l border-b border-red-500/30">📱 Media Sosial (Milik Pihak Ke-3)</div>
                    <h3 class="text-xl font-bold text-red-400 mb-4 mt-2">"Menumpang di Tanah Orang Lain"</h3>
                    <ul class="space-y-3 text-sm text-zinc-300">
                        <li class="flex items-start gap-2">
                            <span class="text-red-400 font-bold">✕</span>
                            <span><strong>Rentan Perubahan Algoritma:</strong> Jangkauan bisnis bisa anjlok drastis kapan saja tergantung kebijakan sepihak pemilik platform (Meta, TikTok, X).</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-400 font-bold">✕</span>
                            <span><strong>Risiko Blokir & Pembatasan Akun:</strong> Akun bisnis bisa ditangguhkan (*banned*) tanpa peringatan, membekukan akses ke seluruh pengikut dan pelanggan.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-400 font-bold">✕</span>
                            <span><strong>Data Bukan Milik Anda:</strong> Anda tidak memegang database email/WhatsApp pelanggan secara mandiri, melainkan dikuasai penuh oleh raksasa teknologi asing.</span>
                        </li>
                    </ul>
                </div>

                {{-- Website Sendiri (Rumah & Aset Digital Resmi) --}}
                <div class="p-7 rounded-2xl bg-emerald-950/40 border border-emerald-500/40 relative overflow-hidden">
                    <div class="absolute top-0 right-0 px-3 py-1 bg-emerald-500/20 text-emerald-300 text-xs font-bold rounded-bl-xl border-l border-b border-emerald-500/30">🏠 Website Laravel (Aset Mandiri)</div>
                    <h3 class="text-xl font-bold text-emerald-400 mb-4 mt-2">"Rumah & Aset Digital Milik Sendiri"</h3>
                    <ul class="space-y-3 text-sm text-zinc-200">
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-400 font-bold">✓</span>
                            <span><strong>Kontrol 100% Penuh & Bebas:</strong> Brand, tampilan, alur bisnis, dan konten sepenuhnya berada di tangan Anda tanpa campur tangan algoritma luar.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-400 font-bold">✓</span>
                            <span><strong>Kepemilikan Database Pelanggan:</strong> Data transaksi, daftar anggota, dan rekaman kontak menjadi aset berharga jangka panjang bagi usaha & organisasi.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-400 font-bold">✓</span>
                            <span><strong>Kredibilitas Profesional & Resmi:</strong> Memiliki domain resmi (`.or.id` / `.id` / `.com`) meningkatkan kepercayaan publik, perbankan, dan mitra bisnis global.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Potensi Membuat Marketplace Sendiri --}}
    <section id="marketplace-mandiri" class="py-16 bg-white">
        <div class="max-w-5xl mx-auto px-6">
            <div class="p-8 sm:p-10 rounded-3xl bg-gradient-to-br from-indigo-900 via-indigo-950 to-slate-900 text-white shadow-2xl relative overflow-hidden border border-indigo-700/50">
                <div class="absolute -top-12 -right-12 size-64 rounded-full bg-indigo-500/20 blur-3xl pointer-events-none"></div>

                <div class="relative z-10">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-indigo-500/20 border border-indigo-400/30 text-indigo-300 text-xs font-bold mb-4">
                        🛒 Kemandirian Ekonomi Digital
                    </div>

                    <h2 class="text-2xl sm:text-4xl font-extrabold text-white leading-tight font-brand-serif mb-4">
                        Bahkan, Kita Bisa Membangun <span class="text-indigo-300">Marketplace Sendiri</span>!
                    </h2>

                    <p class="text-indigo-100/90 text-sm sm:text-base leading-relaxed max-w-3xl mb-8">
                        Dengan keahlian *software engineering* dan fondasi framework **Laravel**, persyarikatan tidak hanya berhenti pada website profil biasa. Muhammadiyah melalui SUMU berpotensi membangun <strong>Platform Marketplace B2B & B2C Mandiri Ekosistem Muhammadiyah</strong>.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-left">
                        <div class="p-5 rounded-2xl bg-white/10 border border-white/15 backdrop-blur-sm">
                            <div class="text-3xl mb-2">🛍️</div>
                            <h3 class="font-bold text-white text-base mb-1">Bebas Biaya Komisi Luar</h3>
                            <p class="text-xs text-indigo-200 leading-relaxed">
                                Transaksi antar wirausahawan Muhammadiyah tanpa perlu terpotong biaya komisi tinggi dari platform marketplace komersial luar.
                            </p>
                        </div>

                        <div class="p-5 rounded-2xl bg-white/10 border border-white/15 backdrop-blur-sm">
                            <div class="text-3xl mb-2">🔗</div>
                            <h3 class="font-bold text-white text-base mb-1">Sinergi Rantai Pasok Internal</h3>
                            <p class="text-xs text-indigo-200 leading-relaxed">
                                Menghubungkan produsen bahan baku, distributor, hingga toko eceran milik anggota SUMU dalam satu rantai pasok terintegrasi.
                            </p>
                        </div>

                        <div class="p-5 rounded-2xl bg-white/10 border border-white/15 backdrop-blur-sm">
                            <div class="text-3xl mb-2">💳</div>
                            <h3 class="font-bold text-white text-base mb-1">Integrasi Pembayaran Nasional</h3>
                            <p class="text-xs text-indigo-200 leading-relaxed">
                                Mendukung QRIS, transfer bank nasional, hingga sistem pembayaran berbasis syariah yang aman, efisien, dan transparan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Harapan & Kontribusi Founder Barizaloka --}}
    <section class="py-16 bg-emerald-50/40 border-y border-emerald-100">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <div class="size-16 rounded-full bg-emerald-600 text-white flex items-center justify-center font-extrabold text-2xl mx-auto mb-4 shadow-lg shadow-emerald-200">
                A
            </div>
            <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-800 bg-white border border-emerald-200 px-3.5 py-1 rounded-full mb-3">Pernyataan & Harapan Founder</span>

            <blockquote class="text-xl sm:text-2xl font-brand-serif font-bold text-zinc-800 leading-snug italic max-w-3xl mx-auto mb-6">
                "Sebagai warga Muhammadiyah yang bergerak di bidang Software Engineering, saya melihat persyarikatan memiliki modal sosial yang sangat masif. Tugas kita adalah menyinergikan modal sosial tersebut dengan infrastruktur digital mandiri dan transparan berbasis Laravel."
            </blockquote>

            <p class="text-sm font-semibold text-emerald-900">Ahla — Founder Barizaloka</p>
            <p class="text-xs text-zinc-500 mt-0.5">Web Software Engineer • Pemuda Muhammadiyah Rembang, Jawa Tengah</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-left mt-12">
                <div class="p-6 rounded-2xl bg-white border border-emerald-100 shadow-sm">
                    <div class="text-3xl mb-3">🛠️</div>
                    <h3 class="font-bold text-zinc-900 text-base mb-2">1. Digitalisasi Website Mandiri</h3>
                    <p class="text-xs text-zinc-600 leading-relaxed">
                        Barizaloka siap mendukung penuh usaha anggota SUMU agar memiliki website mandiri berbasis Laravel yang cepat, aman, transparan, dan terpercaya tanpa tergantung media sosial pihak ketiga.
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-white border border-emerald-100 shadow-sm">
                    <div class="text-3xl mb-3">🤝</div>
                    <h3 class="font-bold text-zinc-900 text-base mb-2">2. Sinergi Teknis & Komunitas</h3>
                    <p class="text-xs text-zinc-600 leading-relaxed">
                        Melalui pilar <strong>Baricode</strong>, kami siap berkolaborasi dalam pendampingan teknologi, riset arsitektur web, hingga pengembangan prototipe portal & marketplace mandiri.
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-white border border-emerald-100 shadow-sm">
                    <div class="text-3xl mb-3">🌟</div>
                    <h3 class="font-bold text-zinc-900 text-base mb-2">3. Mewujudkan Kemandirian Umat</h3>
                    <p class="text-xs text-zinc-600 leading-relaxed">
                        Mendorong pertumbuhan ekosistem bisnis yang <i>Fastabiqul Khairat</i> — berlomba-lomba dalam kebaikan, transparansi, dan profesionalisme karya digital untuk kejayaan ekonomi Indonesia 2045.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Sinergi --}}
    <section class="py-20 bg-gradient-to-br from-emerald-900 via-teal-900 to-indigo-950 text-white relative overflow-hidden">
        <div class="relative max-w-3xl mx-auto px-6 text-center flex flex-col items-center gap-6">
            <span class="text-5xl">🚀</span>
            <h2 class="text-3xl sm:text-4xl font-bold leading-tight font-brand-serif">
                Mari Mendorong Kemajuan Ekonomi Umat Melalui Teknologi Web Modern
            </h2>
            <p class="text-emerald-100/90 text-base max-w-xl">
                Apakah Anda anggota SUMU, pengusaha UMKM, atau pengurus organisasi yang butuh solusi pembuatan website Laravel & digitalisasi marketplace mandiri?
            </p>

            <div class="flex flex-wrap justify-center items-center gap-3">
                <a href="https://wa.me/6285188158542?text=Halo%20Barizaloka,%20saya%20tertarik%20berkolaborasi%20dan%20diskusi%20pembuatan%20website%20Laravel/marketplace%20mandiri"
                   target="_blank" rel="noopener noreferrer"
                   class="px-8 py-4 rounded-xl bg-white text-emerald-900 font-bold text-sm hover:bg-emerald-50 transition-all shadow-lg">
                    💬 Diskusi & Kolaborasi via WhatsApp
                </a>
                <a href="{{ route('harga') }}"
                   class="px-8 py-4 rounded-xl bg-white/10 backdrop-blur-sm border border-white/20 text-white font-bold text-sm hover:bg-white/20 transition-all">
                    💰 Lihat Paket Web Barizaloka
                </a>
            </div>
        </div>
    </section>

</x-layouts.base>
