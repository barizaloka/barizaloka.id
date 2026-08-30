<x-layouts.base
    title="Panduan Sekolah Digital & Solusi Sinergi Vendor Web Server — Barizaloka"
    description="Inisiatif Sekolah Digital: Cara memulai transformasi digital sekolah melalui kolaborasi dengan vendor pembuatan website dan server cloud profesional seperti Barizaloka. Bebas ribet IT server."
>

    <x-slot:head>
        @php
            $faqs = [
                [
                    'q' => 'Apa yang dimaksud dengan Sekolah Digital?',
                    'a' => 'Sekolah Digital adalah lembaga pendidikan yang memanfaatkan teknologi web dan infrastruktur internet untuk menyajikan informasi profil, layanan pendaftaran murid (PPDB), pengumuman, dan komunikasi publik secara cepat, transparan, dan modern.'
                ],
                [
                    'q' => 'Mengapa sekolah perlu bekerja sama dengan vendor pembuatan website & server seperti Barizaloka?',
                    'a' => 'Kerja sama dengan vendor profesional membebaskan sekolah dari kerumitan teknis seperti instalasi server Linux, konfigurasi SSL, perawatan sistem, hingga penanganan lonjakan trafik saat PPDB. Sekolah cukup fokus pada kegiatan belajar mengajar, sementara aspek teknis dikelola penuh oleh vendor.'
                ],
                [
                    'q' => 'Bagaimana cara pengurusan domain resmi sekolah (.sch.id)?',
                    'a' => 'Vendor seperti Barizaloka akan mendampingi proses verifikasi dokumen resmi sekolah (seperti SK Pendirian Sekolah / NPSN dan Surat Permohonan) ke PANDI hingga domain .sch.id resmi aktif dan siap digunakan.'
                ],
                [
                    'q' => 'Apakah staf atau guru sekolah perlu keahlian koding untuk memperbarui isi website?',
                    'a' => 'Tidak perlu. Website sekolah dirancang dengan sistem manajemen konten yang ramah pengguna. Guru atau staf admin sekolah dapat dengan mudah mengunggah berita kegiatan, pengumuman, atau artikel baru layaknya menulis di media sosial.'
                ],
                [
                    'q' => 'Bagaimana langkah pertama sekolah untuk memulai kolaborasi digital ini?',
                    'a' => 'Langkah pertama sangat sederhana: hubungi tim Barizaloka melalui WhatsApp atau formulir kontak untuk sesi diskusi gratis. Kami akan mendengarkan kebutuhan sekolah dan menyusun rencana transformasi digital yang paling sesuai.'
                ],
            ];
        @endphp

        {{-- Schema.org FAQPage --}}
        <script type="application/ld+json">
            {!! json_encode([
                '@@context' => 'https://schema.org',
                '@type' => 'FAQPage',
                'mainEntity' => collect($faqs)->map(fn ($faq) => [
                    '@type' => 'Question',
                    'name' => $faq['q'],
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => $faq['a']
                    ],
                ])->values(),
            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
        </script>

        {{-- Schema.org BreadcrumbList --}}
        <script type="application/ld+json">
            {!! json_encode([
                '@@context' => 'https://schema.org',
                '@type' => 'BreadcrumbList',
                'itemListElement' => [
                    ['@type' => 'ListItem', 'position' => 1, 'name' => 'Beranda', 'item' => url('/')],
                    ['@type' => 'ListItem', 'position' => 2, 'name' => 'Sekolah Digital', 'item' => url('/sekolah-digital')],
                ],
            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
        </script>

        {{-- Schema.org WebPage --}}
        <script type="application/ld+json">
            {!! json_encode([
                '@@context' => 'https://schema.org',
                '@type' => 'WebPage',
                'name' => 'Inisiatif Sekolah Digital & Kolaborasi Vendor Web Server',
                'description' => 'Panduan cara memulai digitalisasi sekolah melalui kemitraan strategis vendor jasa pembuatan website dan managed cloud server Barizaloka.',
                'url' => url('/sekolah-digital'),
                'publisher' => [
                    '@type' => 'Organization',
                    'name' => 'Barizaloka',
                    'url' => url('/'),
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

    {{-- ===== HERO SECTION ===== --}}
    <section class="relative overflow-hidden pt-24 pb-20 bg-gradient-to-br from-emerald-50 via-teal-50/50 to-indigo-50/40 border-b border-emerald-100/60">
        <div class="absolute top-10 left-8 size-72 rounded-full bg-emerald-200/40 blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-10 right-8 size-80 rounded-full bg-indigo-200/40 blur-3xl pointer-events-none"></div>

        <div class="relative max-w-4xl mx-auto px-6 text-center flex flex-col items-center gap-5">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => '🎓 Inisiatif Sekolah Digital'],
            ]" />

            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/90 backdrop-blur-sm border border-emerald-200 text-xs sm:text-sm font-bold text-emerald-800 shadow-sm">
                <span class="size-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
                🏫 Inisiatif Transformasi Pendidikan Indonesia
            </div>

            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-zinc-900 leading-tight">
                Menuju <span class="gradient-text-green">Sekolah Digital</span><br>
                <span class="text-2xl sm:text-4xl font-bold text-zinc-700 font-brand-serif">Cara Memulai &amp; Sinergi Bersama Vendor Web &amp; Server</span>
            </h1>

            <p class="text-base sm:text-lg text-zinc-600 max-w-3xl leading-relaxed">
                Menjadikan sekolah modern, transparan, dan tepercaya melalui kemitraan pembuatan website resmi, pengelolaan server cloud yang tangguh, serta pendampingan teknologi terpadu tanpa perlu membebani tim pengajar.
            </p>

            <div class="flex flex-wrap items-center justify-center gap-3.5 mt-3">
                <a href="https://wa.me/6285188158542?text=Halo%20Barizaloka%2C%20sekolah%20kami%20ingin%20berkolaborasi%20untuk%20inisiatif%20Sekolah%20Digital" target="_blank" rel="noopener noreferrer" class="px-7 py-3.5 rounded-xl bg-emerald-600 text-white font-bold text-sm hover:bg-emerald-700 transition-all shadow-md shadow-emerald-200 flex items-center gap-2">
                    🤝 Ajak Kolaborasi Sekarang
                </a>
                <a href="{{ route('kontak') }}" class="px-7 py-3.5 rounded-xl bg-white border border-zinc-200 text-zinc-800 font-semibold text-sm hover:bg-zinc-50 transition-all shadow-sm flex items-center gap-2">
                    ✉️ Diskusi via Halaman Kontak
                </a>
            </div>
        </div>
    </section>

    {{-- ===== STATS HIGHLIGHT ===== --}}
    <section class="bg-white py-10 border-b border-zinc-100">
        <div class="max-w-5xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div class="p-4 rounded-2xl bg-emerald-50/50 border border-emerald-100">
                <div class="text-3xl font-extrabold text-emerald-700 font-brand-serif">100% Fokus KBM</div>
                <div class="text-xs text-zinc-600 font-medium mt-1">Guru Fokus Mendidik, Bebas Urusan IT</div>
            </div>
            <div class="p-4 rounded-2xl bg-emerald-50/50 border border-emerald-100">
                <div class="text-3xl font-extrabold text-emerald-700 font-brand-serif">Domain .sch.id</div>
                <div class="text-xs text-zinc-600 font-medium mt-1">Verifikasi Resmi Identitas Sekolah</div>
            </div>
            <div class="p-4 rounded-2xl bg-emerald-50/50 border border-emerald-100">
                <div class="text-3xl font-extrabold text-emerald-700 font-brand-serif">Managed Server</div>
                <div class="text-xs text-zinc-600 font-medium mt-1">Aman &amp; Tangguh Saat PPDB Online</div>
            </div>
            <div class="p-4 rounded-2xl bg-emerald-50/50 border border-emerald-100">
                <div class="text-3xl font-extrabold text-emerald-700 font-brand-serif">Pendampingan</div>
                <div class="text-xs text-zinc-600 font-medium mt-1">Bimbingan Staf Admin Berkelanjutan</div>
            </div>
        </div>
    </section>

    {{-- ===== PENTINGNYA SEKOLAH DIGITAL ===== --}}
    <section class="py-16 bg-zinc-50/50 border-b border-zinc-100">
        <div class="max-w-5xl mx-auto px-6">
            <div class="flex flex-col md:flex-row gap-10 items-center">
                <div class="w-full md:w-1/2">
                    <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-700 bg-emerald-100 px-3.5 py-1.5 rounded-full mb-3">Visi Transformasi</span>
                    <h2 class="text-2xl sm:text-3xl font-bold text-zinc-900 leading-tight mb-4 font-brand-serif">
                        Mengapa Setiap Lembaga Pendidikan Perlu Menjadi Sekolah Digital?
                    </h2>
                    <p class="text-zinc-600 leading-relaxed mb-4 text-sm sm:text-base">
                        Di era transparansi dan informasi serba cepat, keberadaan website sekolah resmi bukan lagi sekadar pelengkap, melainkan <strong>fondasi identitas dan kredibilitas lembaga pendidikan</strong>.
                    </p>
                    <p class="text-zinc-600 leading-relaxed text-sm sm:text-base mb-6">
                        Orang tua, wali murid, dan calon siswa mencari kepastian informasi profil sekolah, fasilitas, kurikulum, serta pendaftaran (PPDB) langsung dari sumber tepercaya di internet, bukan kabar burung atau akun yang tidak terverifikasi.
                    </p>
                    <div class="p-4 rounded-xl bg-white border border-emerald-200/80 shadow-sm flex items-start gap-3">
                        <span class="text-2xl">💡</span>
                        <div>
                            <h3 class="font-bold text-zinc-900 text-sm">Dampak Nyata Sekolah Digital</h3>
                            <p class="text-xs text-zinc-600 mt-0.5">Meningkatkan kepercayaan wali murid, mempermudah koordinasi pengumuman, serta memperluas jangkauan penerimaan siswa baru tanpa batasan wilayah.</p>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-1/2 grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="p-5 rounded-2xl bg-white border border-zinc-200/80 shadow-sm card-hover">
                        <span class="text-3xl mb-2 block">🌟</span>
                        <h3 class="font-bold text-zinc-900 text-sm sm:text-base">Kredibilitas Resmi</h3>
                        <p class="text-xs text-zinc-500 mt-1">Domain <code>.sch.id</code> menandakan lembaga pendidikan terdaftar dan diakui secara nasional.</p>
                    </div>
                    <div class="p-5 rounded-2xl bg-white border border-zinc-200/80 shadow-sm card-hover">
                        <span class="text-3xl mb-2 block">📝</span>
                        <h3 class="font-bold text-zinc-900 text-sm sm:text-base">PPDB Online Praktis</h3>
                        <p class="text-xs text-zinc-500 mt-1">Memudahkan orang tua mengunggah berkas dan mendaftar dari mana saja tanpa antre.</p>
                    </div>
                    <div class="p-5 rounded-2xl bg-white border border-zinc-200/80 shadow-sm card-hover">
                        <span class="text-3xl mb-2 block">📢</span>
                        <h3 class="font-bold text-zinc-900 text-sm sm:text-base">Informasi Real-Time</h3>
                        <p class="text-xs text-zinc-500 mt-1">Publikasi kalender akademik, jadwal ujian, dan prestasi siswa dalam hitungan detik.</p>
                    </div>
                    <div class="p-5 rounded-2xl bg-white border border-zinc-200/80 shadow-sm card-hover">
                        <span class="text-3xl mb-2 block">🔒</span>
                        <h3 class="font-bold text-zinc-900 text-sm sm:text-base">Arsip Digital Safe</h3>
                        <p class="text-xs text-zinc-500 mt-1">Galeri kegiatan, berita, dan dokumen penting tersimpan aman di infrastruktur cloud.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== MENGAPA BERMITRA DENGAN VENDOR WEBSITE & SERVER ===== --}}
    <section class="py-16 bg-white border-b border-zinc-100">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-700 bg-emerald-100 px-3.5 py-1.5 rounded-full mb-3">Model Kemitraan</span>
                <h2 class="text-2xl sm:text-3xl font-bold text-zinc-900 font-brand-serif">
                    Mengapa Sekolah Lebih Baik Bermitra dengan Vendor Pembuatan Website &amp; Server?
                </h2>
                <p class="text-zinc-600 text-sm sm:text-base mt-3 leading-relaxed">
                    Mengembangkan dan mengelola infrastruktur server web secara mandiri sering kali membebani sekolah dengan biaya rekrutmen IT, masalah server bermasalah (down), hingga risiko keamanan data.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                {{-- Opsi Mandiri / Beban Internal --}}
                <div class="p-7 rounded-2xl bg-zinc-900 text-white relative overflow-hidden border border-red-500/30">
                    <div class="absolute top-0 right-0 px-3 py-1 bg-red-500/20 text-red-300 text-xs font-bold rounded-bl-xl border-l border-b border-red-500/30">
                        ⚠️ Kelola Server &amp; Web Sendiri (Internal)
                    </div>
                    <h3 class="text-xl font-bold text-red-400 mb-4 mt-2 font-brand-serif">
                        Tantangan &amp; Beban Operasional Sekolah
                    </h3>
                    <ul class="space-y-3.5 text-sm text-zinc-300">
                        <li class="flex items-start gap-2.5">
                            <span class="text-red-400 font-bold shrink-0">✕</span>
                            <span><strong>Beban Ganda pada Guru IT:</strong> Guru TIK dipaksa menjadi sysadmin server, pemrogram web, dan desainer sekaligus.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="text-red-400 font-bold shrink-0">✕</span>
                            <span><strong>Server Down Saat PPDB:</strong> Server sekolah lokal sering kali tumbang karena lonjakan akses pendaftar secara bersamaan.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="text-red-400 font-bold shrink-0">✕</span>
                            <span><strong>Kerumitan Pemeliharaan Keamanan:</strong> Kerentanan virus, malware, sertifikat SSL kedaluwarsa, dan ancaman peretasan.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="text-red-400 font-bold shrink-0">✕</span>
                            <span><strong>Proses Legalitas Domain Rumit:</strong> Kesulitan mengurus verifikasi syarat dokumen domain <code>.sch.id</code> ke PANDI.</span>
                        </li>
                    </ul>
                </div>

                {{-- Opsi Kolaborasi Vendor --}}
                <div class="p-7 rounded-2xl bg-emerald-950 text-white relative overflow-hidden border border-emerald-500/40">
                    <div class="absolute top-0 right-0 px-3 py-1 bg-emerald-500/20 text-emerald-300 text-xs font-bold rounded-bl-xl border-l border-b border-emerald-500/30">
                        ✓ Kemitraan Vendor (Seperti Barizaloka)
                    </div>
                    <h3 class="text-xl font-bold text-emerald-400 mb-4 mt-2 font-brand-serif">
                        Solusi Kolaborasi Praktis &amp; Bebas Pusing
                    </h3>
                    <ul class="space-y-3.5 text-sm text-zinc-200">
                        <li class="flex items-start gap-2.5">
                            <span class="text-emerald-400 font-bold shrink-0">✓</span>
                            <span><strong>Full Managed Cloud Server:</strong> Server berkinerja tinggi yang siap menampung lonjakan ribuan pendaftar PPDB tanpa down.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="text-emerald-400 font-bold shrink-0">✓</span>
                            <span><strong>Pendampingan Domain .sch.id:</strong> Tim vendor membantu seluruh berkas administrasi verifikasi domain resmi sekolah.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="text-emerald-400 font-bold shrink-0">✓</span>
                            <span><strong>Keamanan &amp; Backup Terjadwal:</strong> Proteksi penuh dengan enkripsi SSL, firewall, serta backup data berkas sekolah secara teratur.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="text-emerald-400 font-bold shrink-0">✓</span>
                            <span><strong>Layanan &amp; Pelatihan Berkelanjutan:</strong> Tim staf sekolah diajari cara mengisi berita dengan mudah, didukung tim bantuan jika ada kendala.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== CARA MEMULAI: 5 LANGKAH DIGITALISASI SEKOLAH ===== --}}
    <section class="py-16 bg-zinc-50/50 border-b border-zinc-100">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-14">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-700 bg-emerald-100 px-3.5 py-1.5 rounded-full mb-3">Langkah Praktis</span>
                <h2 class="text-2xl sm:text-3xl font-bold text-zinc-900 font-brand-serif">
                    5 Tahap Cara Memulai Transformasi Sekolah Digital
                </h2>
                <p class="text-zinc-600 text-sm sm:text-base mt-2">
                    Prosedur terstruktur dan mudah diikuti oleh kepala sekolah, pengurus yayasan, maupun panitia IT sekolah.
                </p>
            </div>

            <div class="space-y-6 max-w-4xl mx-auto">
                {{-- Step 1 --}}
                <div class="p-6 rounded-2xl bg-white border border-zinc-200/80 shadow-sm flex flex-col md:flex-row items-start gap-5 card-hover">
                    <div class="size-12 rounded-2xl bg-emerald-600 text-white flex items-center justify-center font-extrabold text-xl shrink-0 shadow-md shadow-emerald-200">
                        1
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-zinc-900">Pemetaan Kebutuhan &amp; Visi Sekolah</h3>
                        <p class="text-sm text-zinc-600 mt-1 leading-relaxed">
                            Pihak sekolah menentukan fitur utama yang ingin dihadirkan pada website: profil sekolah, sejarah &amp; visi-misi, galeri fasilitas, formulir pendaftaran murid baru (PPDB online), atau tautan portal pembelajaran (LMS/CBT).
                        </p>
                    </div>
                </div>

                {{-- Step 2 --}}
                <div class="p-6 rounded-2xl bg-white border border-zinc-200/80 shadow-sm flex flex-col md:flex-row items-start gap-5 card-hover">
                    <div class="size-12 rounded-2xl bg-emerald-600 text-white flex items-center justify-center font-extrabold text-xl shrink-0 shadow-md shadow-emerald-200">
                        2
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-zinc-900">Diskusi Kolaborasi Bersama Vendor (Barizaloka)</h3>
                        <p class="text-sm text-zinc-600 mt-1 leading-relaxed">
                            Menghubungi tim Barizaloka untuk berkonsultasi mengenai alur navigasi, skema warna identitas sekolah, struktur halaman, serta penentuan kapasitas server yang optimal sesuai perkiraan jumlah pendaftar.
                        </p>
                    </div>
                </div>

                {{-- Step 3 --}}
                <div class="p-6 rounded-2xl bg-white border border-zinc-200/80 shadow-sm flex flex-col md:flex-row items-start gap-5 card-hover">
                    <div class="size-12 rounded-2xl bg-emerald-600 text-white flex items-center justify-center font-extrabold text-xl shrink-0 shadow-md shadow-emerald-200">
                        3
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-zinc-900">Persiapan Berkas &amp; Registrasi Domain .sch.id</h3>
                        <p class="text-sm text-zinc-600 mt-1 leading-relaxed">
                            Pihak sekolah menyiapkan berkas identitas resmi (SK Pendirian Sekolah dari Kemdikbud/Kemenag atau NPSN, serta Surat Kuasa Kepala Sekolah). Tim Barizaloka akan mengurus verifikasi domain hingga aktif penuh.
                        </p>
                    </div>
                </div>

                {{-- Step 4 --}}
                <div class="p-6 rounded-2xl bg-white border border-zinc-200/80 shadow-sm flex flex-col md:flex-row items-start gap-5 card-hover">
                    <div class="size-12 rounded-2xl bg-emerald-600 text-white flex items-center justify-center font-extrabold text-xl shrink-0 shadow-md shadow-emerald-200">
                        4
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-zinc-900">Pengembangan Website &amp; Setup Cloud Server</h3>
                        <p class="text-sm text-zinc-600 mt-1 leading-relaxed">
                            Website dibangun menggunakan arsitektur web modern yang responsif, super cepat, dan ramah pengguna di perangkat smartphone maupun laptop. Server dikonfigurasi lengkap dengan enkripsi SSL dan perlindungan keamanan.
                        </p>
                    </div>
                </div>

                {{-- Step 5 --}}
                <div class="p-6 rounded-2xl bg-white border border-zinc-200/80 shadow-sm flex flex-col md:flex-row items-start gap-5 card-hover">
                    <div class="size-12 rounded-2xl bg-emerald-600 text-white flex items-center justify-center font-extrabold text-xl shrink-0 shadow-md shadow-emerald-200">
                        5
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-zinc-900">Peluncuran, Pelatihan Admin, &amp; Dukungan Rutin</h3>
                        <p class="text-sm text-zinc-600 mt-1 leading-relaxed">
                            Setelah website siap, tim sekolah diberikan bimbingan cara mengunggah artikel dan pengumuman. Vendor tetap mendampingi untuk memastikan server selalu stabil, aman, dan beroperasi tanpa masalah.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== KOMPONEN UTAMA EKOSISTEM SEKOLAH DIGITAL ===== --}}
    <section class="py-16 bg-white border-b border-zinc-100">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-700 bg-emerald-100 px-3.5 py-1.5 rounded-full mb-3">Modul &amp; Fitur Utama</span>
                <h2 class="text-2xl sm:text-3xl font-bold text-zinc-900 font-brand-serif">
                    Pilar Utama Ekosistem Website &amp; Server Sekolah Modern
                </h2>
                <p class="text-zinc-600 text-sm sm:text-base mt-2">
                    Fitur esensial yang menjadikan website sekolah berdaya guna tinggi bagi seluruh civitas akademika dan masyarakat.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="p-6 rounded-2xl bg-zinc-50 border border-zinc-200/80 card-hover">
                    <div class="size-12 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-2xl mb-4">
                        🏛️
                    </div>
                    <h3 class="font-bold text-zinc-900 text-base mb-2">Profil &amp; Identitas Sekolah</h3>
                    <p class="text-xs text-zinc-600 leading-relaxed">
                        Menampilkan Sejarah, Visi &amp; Misi, Struktur Organisasi, Profil Kepala Sekolah &amp; Guru, serta Galeri Fasilitas unggulan sekolah.
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-zinc-50 border border-zinc-200/80 card-hover">
                    <div class="size-12 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-2xl mb-4">
                        📋
                    </div>
                    <h3 class="font-bold text-zinc-900 text-base mb-2">Modul PPDB / PMB Online</h3>
                    <p class="text-xs text-zinc-600 leading-relaxed">
                        Formulir pendaftaran calon siswa secara online, upload dokumen pendukung, dan pengumuman hasil seleksi yang praktis.
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-zinc-50 border border-zinc-200/80 card-hover">
                    <div class="size-12 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-2xl mb-4">
                        📰
                    </div>
                    <h3 class="font-bold text-zinc-900 text-base mb-2">Warta &amp; Pengumuman Sekolah</h3>
                    <p class="text-xs text-zinc-600 leading-relaxed">
                        Publikasi kegiatan ekstrakurikuler, berita kelulusan, jadwal kegiatan sekolah, dan kabar prestasi siswa terbaru.
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-zinc-50 border border-zinc-200/80 card-hover">
                    <div class="size-12 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-2xl mb-4">
                        ⚡
                    </div>
                    <h3 class="font-bold text-zinc-900 text-base mb-2">Infrastruktur Server High Traffic</h3>
                    <p class="text-xs text-zinc-600 leading-relaxed">
                        Server cloud yang dioptimasi agar tetap fleksibel dan stabil ketika diakses ribuan pengguna secara bersamaan.
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-zinc-50 border border-zinc-200/80 card-hover">
                    <div class="size-12 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-2xl mb-4">
                        🔒
                    </div>
                    <h3 class="font-bold text-zinc-900 text-base mb-2">Sertifikat SSL &amp; Keamanan</h3>
                    <p class="text-xs text-zinc-600 leading-relaxed">
                        Jaminan enkripsi data (HTTPS) untuk keamanan identitas siswa dan pencegahan aksi kejahatan siber pada domain sekolah.
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-zinc-50 border border-zinc-200/80 card-hover">
                    <div class="size-12 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-2xl mb-4">
                        💬
                    </div>
                    <h3 class="font-bold text-zinc-900 text-base mb-2">Integrasi WA Center &amp; Sosmed</h3>
                    <p class="text-xs text-zinc-600 leading-relaxed">
                        Menghubungkan pengunjung website secara cepat ke akun WhatsApp Humas/Panitia PPDB dan media sosial resmi sekolah.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== KOMITMEN KOLABORASI BARIZALOKA ===== --}}
    <section class="py-16 bg-zinc-50/50 border-b border-zinc-100">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <div class="size-16 rounded-full bg-emerald-600 text-white flex items-center justify-center font-extrabold text-2xl mx-auto mb-4 shadow-lg shadow-emerald-200">
                BL
            </div>
            <blockquote class="text-xl sm:text-2xl font-brand-serif font-bold text-zinc-800 leading-snug italic max-w-3xl mx-auto mb-6">
                "Digitalisasi sekolah bukan hanya tentang memiliki alamat website, melainkan membangun kepercayaan publik dan memberikan kemudahan layanan bagi generasi penerus bangsa. Barizaloka hadir sebagai mitra teknologi yang siap mendampingi sekolah tumbuh bersama."
            </blockquote>
            <p class="text-sm font-semibold text-emerald-900">Ahla (Founder Barizaloka)</p>
            <p class="text-xs text-zinc-500 mt-0.5">Pengembang Website &amp; Layanan Server Cloud</p>
        </div>
    </section>

    {{-- ===== FAQ SECTION ===== --}}
    <section class="py-16 bg-white border-b border-zinc-100">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-700 bg-emerald-100 px-3.5 py-1.5 rounded-full mb-3">Tanya Jawab</span>
                <h2 class="text-2xl sm:text-3xl font-bold text-zinc-900 font-brand-serif">
                    Pertanyaan Umum Seputar Inisiatif Sekolah Digital
                </h2>
            </div>

            <div class="space-y-4">
                @foreach ($faqs as $faq)
                    <div class="p-6 rounded-2xl bg-zinc-50 border border-zinc-200/80">
                        <h3 class="text-base font-bold text-zinc-900 flex items-start gap-2.5">
                            <span class="text-emerald-600 font-bold shrink-0">Q:</span>
                            <span>{{ $faq['q'] }}</span>
                        </h3>
                        <p class="text-sm text-zinc-600 mt-2.5 leading-relaxed pl-6">
                            {{ $faq['a'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== CTA BANNER AJAKAN KOLABORASI ===== --}}
    <section class="py-16 bg-white">
        <div class="max-w-5xl mx-auto px-6">
            <div class="p-8 sm:p-12 rounded-3xl bg-gradient-to-br from-emerald-900 via-teal-900 to-indigo-950 text-white shadow-2xl relative overflow-hidden border border-emerald-700/50 text-center">
                <div class="absolute -top-12 -right-12 size-64 rounded-full bg-emerald-500/20 blur-3xl pointer-events-none"></div>
                <div class="relative z-10 max-w-3xl mx-auto">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 border border-white/20 text-emerald-300 text-xs font-bold mb-4">
                        🤝 Mari Bergandengan Tangan
                    </div>
                    <h2 class="text-2xl sm:text-4xl font-extrabold text-white leading-tight font-brand-serif mb-4">
                        Siap Menjadikan Sekolah Anda Sekolah Digital yang Modern &amp; Terpercaya?
                    </h2>
                    <p class="text-sm sm:text-base text-emerald-100 leading-relaxed mb-8">
                        Mari berkolaborasi bersama Barizaloka. Kami siap menjadi mitra pengembang website dan pengelola server cloud yang andal bagi SD/MI, SMP/MTs, SMA/SMK/MA, maupun Perguruan Tinggi di seluruh Indonesia.
                    </p>
                    <div class="flex flex-wrap items-center justify-center gap-4">
                        <a href="https://wa.me/6285188158542?text=Halo%20Barizaloka%2C%20saya%20ingin%20konsultasi%20kolaborasi%20Sekolah%20Digital" target="_blank" rel="noopener noreferrer" class="px-8 py-4 rounded-xl bg-emerald-500 text-white font-bold text-sm hover:bg-emerald-400 transition-all shadow-lg shadow-emerald-900/50 flex items-center gap-2">
                            💬 Konsultasi Kolaborasi via WA
                        </a>
                        <a href="{{ route('kontak') }}" class="px-8 py-4 rounded-xl bg-white/10 border border-white/20 text-white font-semibold text-sm hover:bg-white/20 transition-all">
                            ✉️ Kirim Pesan via Kontak
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.base>
