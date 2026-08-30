<x-layouts.base
    title="Jasa Pembuatan Website Profesional & Performa Tinggi — Barizaloka"
    description="Jasa pembuatan website profesional untuk pesantren, masjid, desa, UMKM, dan perusahaan mulai Rp 350.000/tahun. Arsitektur Laravel modern, cepat jadi, bebas lemot, sudah termasuk domain, hosting, SSL, dan garansi maintenance."
>

    <x-slot:head>
        <script type="application/ld+json">
            {!! json_encode([
                '@@context' => 'https://schema.org',
                '@type' => 'Product',
                'name' => 'Jasa Pembuatan Website Barizaloka',
                'description' => 'Jasa pembuatan website profesional untuk pesantren, masjid, desa, UMKM, dan perusahaan berbasis framework Laravel.',
                'image' => url('/og-image.png'),
                'brand' => ['@type' => 'Brand', 'name' => 'Barizaloka'],
                'offers' => $packages->map(fn ($package) => [
                    '@type' => 'Offer',
                    'name' => $package->name,
                    'price' => (string) $package->price,
                    'priceCurrency' => 'IDR',
                    'validFrom' => now()->toDateString(),
                    'priceValidUntil' => now()->addYear()->toDateString(),
                    'availability' => 'https://schema.org/InStock',
                    'url' => route('jasa-website'),
                    'shippingDetails' => [
                        '@type' => 'OfferShippingDetails',
                        'shippingRate' => [
                            '@type' => 'MonetaryAmount',
                            'value' => '0',
                            'currency' => 'IDR',
                        ],
                        'shippingDestination' => [
                            '@type' => 'DefinedRegion',
                            'addressCountry' => 'ID',
                        ],
                        'deliveryTime' => [
                            '@type' => 'ShippingDeliveryTime',
                            'handlingTime' => [
                                '@type' => 'QuantitativeValue',
                                'minValue' => 0,
                                'maxValue' => 1,
                                'unitCode' => 'DAY',
                            ],
                            'transitTime' => [
                                '@type' => 'QuantitativeValue',
                                'minValue' => 1,
                                'maxValue' => 7,
                                'unitCode' => 'DAY',
                            ],
                        ],
                    ],
                    'hasMerchantReturnPolicy' => [
                        '@type' => 'MerchantReturnPolicy',
                        'returnPolicyCategory' => 'https://schema.org/MerchantReturnNotPermitted',
                        'applicableCountry' => 'ID',
                    ],
                ])->all(),
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
        {{-- Background Accents --}}
        <div class="absolute top-10 left-8 size-72 rounded-full bg-emerald-200/40 blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-10 right-8 size-80 rounded-full bg-indigo-200/40 blur-3xl pointer-events-none"></div>

        <div class="relative max-w-4xl mx-auto px-6 text-center flex flex-col items-center gap-5">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/90 backdrop-blur-sm border border-emerald-200 text-xs sm:text-sm font-bold text-emerald-800 shadow-sm">
                <span class="size-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
                💚 #1 Jasa Pembuatan Website Laravel & Modern Web Tech
            </div>

            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-zinc-900 leading-tight">
                Jasa Pembuatan Website <br class="hidden sm:inline">
                <span class="gradient-text-green">Profesional & High-Speed</span>
            </h1>

            <p class="text-brand-serif text-xl sm:text-3xl font-bold text-zinc-700 font-brand-serif -mt-2">
                Untuk Pesantren, Masjid, Desa, UMKM, & Perusahaan
            </p>

            <p class="text-base sm:text-lg text-zinc-600 max-w-2xl leading-relaxed">
                Website modern tanpa plugin berat. Garansi loading milidetik, 100% menggunakan arsitektur <code class="text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded text-sm sm:text-base font-mono font-bold">Laravel 13</code> + <code class="text-indigo-700 bg-indigo-50 px-2 py-0.5 rounded text-sm sm:text-base font-mono font-bold">Tailwind v4</code>. Sudah termasuk Domain, Hosting, SSL, dan Maintenance.
            </p>

            <div class="flex flex-wrap items-center justify-center gap-3.5 mt-3">
                <a href="#paket" class="px-7 py-3.5 rounded-xl bg-emerald-600 text-white font-bold text-sm hover:bg-emerald-700 transition-all shadow-md shadow-emerald-200/80 flex items-center gap-2">
                    💎 Lihat Paket &amp; Harga Transparan
                </a>
                <a href="https://wa.me/6285188158542?text=Halo%20Barizaloka%2C%20saya%20mau%20konsultasi%20pembuatan%20website" target="_blank" rel="noopener noreferrer" class="px-7 py-3.5 rounded-xl bg-white border border-zinc-200 text-zinc-800 font-semibold text-sm hover:bg-zinc-50 transition-all shadow-sm flex items-center gap-2">
                    💬 Konsultasi WA Gratis
                </a>
                <a href="{{ route('portofolio.index') }}" class="px-6 py-3.5 rounded-xl bg-emerald-100/60 border border-emerald-200 text-emerald-900 font-semibold text-sm hover:bg-emerald-100 transition-all flex items-center gap-2">
                    📂 Lihat Portofolio
                </a>
            </div>
        </div>
    </section>

    {{-- ===== STATS HIGHLIGHT ===== --}}
    <section class="bg-white py-10 border-b border-zinc-100">
        <div class="max-w-5xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div class="p-4 rounded-2xl bg-emerald-50/50 border border-emerald-100">
                <div class="text-3xl font-extrabold text-emerald-700 font-brand-serif">1–7 Hari</div>
                <div class="text-xs text-zinc-600 font-medium mt-1">Cepat Selesai &amp; Tepat Waktu</div>
            </div>
            <div class="p-4 rounded-2xl bg-emerald-50/50 border border-emerald-100">
                <div class="text-3xl font-extrabold text-emerald-700 font-brand-serif">Laravel 13</div>
                <div class="text-xs text-zinc-600 font-medium mt-1">Performa Ringan &amp; Tanpa Lemot</div>
            </div>
            <div class="p-4 rounded-2xl bg-emerald-50/50 border border-emerald-100">
                <div class="text-3xl font-extrabold text-emerald-700 font-brand-serif">100% Siap</div>
                <div class="text-xs text-zinc-600 font-medium mt-1">Domain, Hosting &amp; SSL Gratis</div>
            </div>
            <div class="p-4 rounded-2xl bg-emerald-50/50 border border-emerald-100">
                <div class="text-3xl font-extrabold text-emerald-700 font-brand-serif">24/7</div>
                <div class="text-xs text-zinc-600 font-medium mt-1">Support &amp; Maintenance Rutin</div>
            </div>
        </div>
    </section>

    {{-- ===== WHY OWN WEBSITE (KEMANDIRIAN DIGITAL) ===== --}}
    <section class="py-16 bg-gradient-to-br from-zinc-900 via-zinc-800 to-zinc-900 text-white">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-400 bg-white/10 px-3.5 py-1.5 rounded-full mb-3">Pentingnya Kedaulatan Web Mandiri</span>
                <h2 class="text-2xl sm:text-4xl font-bold font-brand-serif leading-tight">
                    Mengapa Harus Punya <span class="text-emerald-400">Website Mandiri</span>?
                </h2>
                <p class="text-zinc-300 text-sm sm:text-base mt-3">
                    Perbandingan nyata antara mengandalkan platform media sosial pihak ketiga dengan memiliki rumah digital sendiri berbasis Laravel.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                {{-- Negative / Social Media --}}
                <div class="p-7 rounded-2xl bg-white/5 border border-red-500/30 relative overflow-hidden">
                    <div class="absolute top-0 right-0 px-3 py-1 bg-red-500/20 text-red-300 text-xs font-bold rounded-bl-xl border-l border-b border-red-500/30">📱 Platform Pihak Ke-3 / Medsos</div>
                    <h3 class="text-xl font-bold text-red-400 mb-4 mt-2">"Menumpang di Tanah Orang Lain"</h3>
                    <ul class="space-y-3.5 text-sm text-zinc-300">
                        <li class="flex items-start gap-2.5">
                            <span class="text-red-400 font-bold shrink-0">✕</span>
                            <span><strong>Rentan Algoritma &amp; Biaya Iklan:</strong> Jangkauan bisnis bisa anjlok sewaktu-waktu tergantung kebijakan sepihak pemilik platform.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="text-red-400 font-bold shrink-0">✕</span>
                            <span><strong>Risiko Pembatasan &amp; Banned:</strong> Akun dapat ditangguhkan tanpa alasan jelas, menghilangkan akses ke pelanggan Anda.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="text-red-400 font-bold shrink-0">✕</span>
                            <span><strong>Database Bukan Milik Anda:</strong> Anda tidak memegang data kontak atau riwayat transaksi secara mandiri.</span>
                        </li>
                    </ul>
                </div>

                {{-- Positive / Own Website --}}
                <div class="p-7 rounded-2xl bg-emerald-950/40 border border-emerald-500/40 relative overflow-hidden">
                    <div class="absolute top-0 right-0 px-3 py-1 bg-emerald-500/20 text-emerald-300 text-xs font-bold rounded-bl-xl border-l border-b border-emerald-500/30">🏠 Website Mandiri Barizaloka</div>
                    <h3 class="text-xl font-bold text-emerald-400 mb-4 mt-2">"Rumah &amp; Aset Digital Milik Sendiri"</h3>
                    <ul class="space-y-3.5 text-sm text-zinc-200">
                        <li class="flex items-start gap-2.5">
                            <span class="text-emerald-400 font-bold shrink-0">✓</span>
                            <span><strong>Kontrol Total 100%:</strong> Tampilan, fitur, alur pesan, dan identitas brand sepenuhnya di bawah kendali Anda.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="text-emerald-400 font-bold shrink-0">✓</span>
                            <span><strong>Domain Resmi &amp; Kredibel:</strong> Alamat domain seperti <i>.id</i>, <i>.sch.id</i>, atau <i>.com</i> membuat instansi/usaha jauh lebih terpercaya.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="text-emerald-400 font-bold shrink-0">✓</span>
                            <span><strong>Aset Jangka Panjang:</strong> Mudah ditemukan di mesin pencari Google (SEO) dan menjadi pusat database pelanggan/santri/warga.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== TECHNICAL ADVANTAGES & FEATURES ===== --}}
    <section class="py-16 bg-white">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-700 bg-emerald-100 px-3.5 py-1.5 rounded-full mb-3">Keunggulan Layanan Kami</span>
                <h2 class="text-2xl sm:text-3xl font-bold text-zinc-900 font-brand-serif">
                    Standar Kualitas Web Modern Barizaloka
                </h2>
                <p class="text-zinc-600 text-sm sm:text-base mt-2">
                    Kami tidak sekadar membuat website asal jadi, tapi merancang sistem berbasis <code class="text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded font-mono font-bold">Laravel</code> yang cepat, aman, dan siap pakai.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                {{-- Feature 1 --}}
                <div class="p-6 rounded-2xl bg-zinc-50 border border-zinc-200 card-hover">
                    <div class="size-12 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-2xl mb-4">⚡</div>
                    <h3 class="font-bold text-zinc-900 text-base mb-2">Performa Milidetik</h3>
                    <p class="text-xs text-zinc-600 leading-relaxed">
                        Bebas dari puluhan plugin berat khas CMS tradisional. Website memuat super cepat di smartphone pelanggan maupun koneksi lambat.
                    </p>
                </div>

                {{-- Feature 2 --}}
                <div class="p-6 rounded-2xl bg-zinc-50 border border-zinc-200 card-hover">
                    <div class="size-12 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-2xl mb-4">🔒</div>
                    <h3 class="font-bold text-zinc-900 text-base mb-2">Keamanan Enterprise</h3>
                    <p class="text-xs text-zinc-600 leading-relaxed">
                        Dilengkapi perlindungan bawaan terhadap SQL Injection, XSS, CSRF, serta enkripsi SSL HTTPS gratis agar data selalu aman.
                    </p>
                </div>

                {{-- Feature 3 --}}
                <div class="p-6 rounded-2xl bg-zinc-50 border border-zinc-200 card-hover">
                    <div class="size-12 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-2xl mb-4">🔍</div>
                    <h3 class="font-bold text-zinc-900 text-base mb-2">Optimasi SEO Native</h3>
                    <p class="text-xs text-zinc-600 leading-relaxed">
                        Terintegrasi Schema.org JSON-LD, OpenGraph social share, Meta tag friendly, dan sitemap XML otomatis agar mudah nangkring di Google.
                    </p>
                </div>

                {{-- Feature 4 --}}
                <div class="p-6 rounded-2xl bg-zinc-50 border border-zinc-200 card-hover">
                    <div class="size-12 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-2xl mb-4">📱</div>
                    <h3 class="font-bold text-zinc-900 text-base mb-2">Tampilan Mobile-First</h3>
                    <p class="text-xs text-zinc-600 leading-relaxed">
                        Desain responsif nan estetis. Tampilan otomatis menyesuaikan layar smartphone, tablet, laptop, hingga monitor 4K.
                    </p>
                </div>

                {{-- Feature 5 --}}
                <div class="p-6 rounded-2xl bg-zinc-50 border border-zinc-200 card-hover">
                    <div class="size-12 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-2xl mb-4">🎛️</div>
                    <h3 class="font-bold text-zinc-900 text-base mb-2">Dashboard Admin Mudah</h3>
                    <p class="text-xs text-zinc-600 leading-relaxed">
                        Kelola berita, galeri, pengumuman, hingga katalog produk sendiri melalui panel admin yang simpel dan bebas ribet.
                    </p>
                </div>

                {{-- Feature 6 --}}
                <div class="p-6 rounded-2xl bg-zinc-50 border border-zinc-200 card-hover">
                    <div class="size-12 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-2xl mb-4">💬</div>
                    <h3 class="font-bold text-zinc-900 text-base mb-2">Integrasi WhatsApp Lead</h3>
                    <p class="text-xs text-zinc-600 leading-relaxed">
                        Tombol pemesanan, formulir pendaftaran, atau konsultasi terhubung otomatis ke WhatsApp pengurus/pemilik usaha.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== PRICING PACKAGES ===== --}}
    <section id="paket" class="py-20 bg-[#f4f8f6] border-y border-[#e0ebe7]">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center max-w-xl mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-700 bg-emerald-100 px-3.5 py-1.5 rounded-full mb-3.5">💰 Harga Transparan &amp; Terjangkau</span>
                <h2 class="font-brand-serif text-[clamp(1.8rem,4vw,2.6rem)] font-bold mb-3 text-zinc-900">Pilihan Paket Sesuai Kebutuhan</h2>
                <p class="text-zinc-600 text-sm sm:text-base">Tanpa biaya tersembunyi. Semua paket sudah termasuk domain, hosting, SSL, dan garansi maintenance.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 items-stretch">
                @foreach ($packages as $package)
                    <div class="relative flex flex-col bg-white rounded-2xl p-6 sm:p-7 {{ $package->is_featured ? 'border-2 border-emerald-600 shadow-xl ring-4 ring-emerald-600/10' : 'border border-[#e0ebe7] shadow-sm' }} hover:shadow-md transition-all duration-200">
                        @if ($package->badge_label)
                            <div class="mb-3">
                                <span class="inline-block bg-emerald-600 text-white text-[.65rem] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider">{{ $package->badge_label }}</span>
                            </div>
                        @endif

                        <h3 class="text-xl font-bold text-zinc-900 mb-1.5 leading-snug">{{ $package->name }}</h3>

                        @if ($package->tagline)
                            <p class="text-xs text-zinc-500 mb-4 leading-relaxed min-h-[2.5rem]">{{ $package->tagline }}</p>
                        @endif

                        <div class="mb-5 pb-4 border-b border-[#e0ebe7]">
                            <div class="font-brand-serif text-3xl font-extrabold text-emerald-700">{{ $package->price_label }}</div>
                            <div class="text-xs text-zinc-500 mt-0.5">{{ $package->price_period }}</div>
                        </div>

                        <ul class="flex-1 flex flex-col gap-2.5 mb-6 text-xs text-[#1a2420]">
                            @foreach ($package->features as $feature)
                                <li @class([
                                    'flex items-start gap-2 leading-snug',
                                    'pl-4 text-zinc-500 text-[0.75rem]' => $feature['indent'] ?? false,
                                    'font-medium' => !($feature['indent'] ?? false) && (str_contains($feature['text'], '<strong>')),
                                ])>
                                    <span class="shrink-0 text-emerald-600 font-bold">{{ ($feature['indent'] ?? false) ? '•' : '✓' }}</span>
                                    <span>{!! $feature['text'] !!}</span>
                                </li>
                            @endforeach
                        </ul>

                        <a href="https://wa.me/6285188158542?text={{ urlencode($package->whatsapp_message ?? 'Halo Barizaloka, saya tertarik dengan '.$package->name) }}" target="_blank" rel="noopener" class="mt-auto text-center rounded-xl px-5 py-3 text-xs sm:text-sm font-bold transition-all duration-200 {{ $package->is_featured ? 'bg-emerald-600 text-white hover:bg-emerald-700 shadow-md shadow-emerald-200' : 'bg-white text-zinc-800 border border-zinc-300 hover:bg-emerald-50 hover:border-emerald-500' }}">
                            {{ $package->cta_label ?? 'Pilih '.$package->name }}
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-10">
                <a href="{{ route('harga') }}" class="inline-flex items-center gap-2 bg-zinc-900 text-white rounded-xl px-8 py-3.5 text-sm font-bold hover:bg-zinc-800 transition-all shadow-md">
                    Bandingkan Fitur Seluruh Paket Lengkap →
                </a>
            </div>
        </div>
    </section>

    {{-- ===== PROCESS WORKFLOW ===== --}}
    <section class="py-20 bg-white">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center max-w-lg mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-700 bg-emerald-100 px-3.5 py-1.5 rounded-full mb-3.5">🛠️ Alur Kerja Transparan</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3 text-zinc-900">5 Langkah Mudah Memiliki Website</h2>
                <p class="text-zinc-500 text-sm sm:text-base">Proses praktis, Anda cukup siapkan materi, tim kami yang kerjakan sepenuhnya.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-5 gap-6">
                <div class="text-center p-4 rounded-2xl bg-zinc-50 border border-zinc-100 card-hover">
                    <div class="size-12 mx-auto mb-4 rounded-full bg-emerald-100 text-emerald-700 border-2 border-emerald-500 flex items-center justify-center text-xl font-extrabold">1</div>
                    <h4 class="font-brand-serif text-base font-bold mb-2 text-zinc-900">Konsultasi WA</h4>
                    <p class="text-xs text-zinc-600 leading-relaxed">Diskusi konsep, tujuan, dan pilihan paket sesuai anggaran.</p>
                </div>
                <div class="text-center p-4 rounded-2xl bg-zinc-50 border border-zinc-100 card-hover">
                    <div class="size-12 mx-auto mb-4 rounded-full bg-emerald-100 text-emerald-700 border-2 border-emerald-500 flex items-center justify-center text-xl font-extrabold">2</div>
                    <h4 class="font-brand-serif text-base font-bold mb-2 text-zinc-900">DP &amp; Materi</h4>
                    <p class="text-xs text-zinc-600 leading-relaxed">Pembayaran DP 50% &amp; penyerahan bahan (logo, foto, deskripsi).</p>
                </div>
                <div class="text-center p-4 rounded-2xl bg-zinc-50 border border-zinc-100 card-hover">
                    <div class="size-12 mx-auto mb-4 rounded-full bg-emerald-100 text-emerald-700 border-2 border-emerald-500 flex items-center justify-center text-xl font-extrabold">3</div>
                    <h4 class="font-brand-serif text-base font-bold mb-2 text-zinc-900">Development</h4>
                    <p class="text-xs text-zinc-600 leading-relaxed">Tim pengerjaan web Laravel &amp; preview live dikirimkan.</p>
                </div>
                <div class="text-center p-4 rounded-2xl bg-zinc-50 border border-zinc-100 card-hover">
                    <div class="size-12 mx-auto mb-4 rounded-full bg-emerald-100 text-emerald-700 border-2 border-emerald-500 flex items-center justify-center text-xl font-extrabold">4</div>
                    <h4 class="font-brand-serif text-base font-bold mb-2 text-zinc-900">Testing &amp; Revisi</h4>
                    <p class="text-xs text-zinc-600 leading-relaxed">Uji coba di HP/Laptop &amp; penyesuaian detail hingga puas.</p>
                </div>
                <div class="text-center p-4 rounded-2xl bg-zinc-50 border border-zinc-100 card-hover">
                    <div class="size-12 mx-auto mb-4 rounded-full bg-emerald-100 text-emerald-700 border-2 border-emerald-500 flex items-center justify-center text-xl font-extrabold">5</div>
                    <h4 class="font-brand-serif text-base font-bold mb-2 text-zinc-900">Live &amp; Training</h4>
                    <p class="text-xs text-zinc-600 leading-relaxed">Pelunasan, website di domain resmi live, &amp; tutorial admin.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== NICHE & LOCATION COVERAGE ===== --}}
    <section class="py-20 bg-zinc-50/70 border-t border-zinc-200">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center max-w-xl mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-700 bg-emerald-100 px-3.5 py-1.5 rounded-full mb-3.5">📍 Specialist Niche &amp; Wilayah</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3 text-zinc-900">Solusi Web Berdasarkan Kebutuhan Anda</h2>
                <p class="text-zinc-600 text-sm sm:text-base">Pengalaman spesifik merancang website untuk berbagai sektor dan wilayah di Indonesia.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                {{-- By Niche --}}
                <div class="bg-white p-7 rounded-2xl border border-zinc-200/80 shadow-sm">
                    <h3 class="text-xs font-bold uppercase tracking-widest text-emerald-800 mb-4 flex items-center gap-2">
                        <span>🎯 Berdasarkan Kebutuhan Sektor</span>
                    </h3>
                    <div class="flex flex-wrap gap-2.5">
                        @foreach (config('niche_pages') as $slug => $page)
                            <a href="{{ route('niche.show', $slug) }}" class="inline-flex items-center gap-2 bg-emerald-50/60 border border-emerald-200 rounded-xl px-4 py-2.5 text-sm font-semibold text-zinc-800 hover:bg-emerald-600 hover:text-white transition-all">
                                Website {{ $page['label'] }}
                            </a>
                        @endforeach
                    </div>
                </div>

                {{-- By Location --}}
                <div class="bg-white p-7 rounded-2xl border border-zinc-200/80 shadow-sm">
                    <h3 class="text-xs font-bold uppercase tracking-widest text-indigo-800 mb-4 flex items-center gap-2">
                        <span>📍 Layanan Tatap Muka &amp; Regional</span>
                    </h3>
                    <div class="flex flex-wrap gap-2.5">
                        @foreach (config('location_pages') as $slug => $location)
                            <a href="{{ route('lokasi.show', $slug) }}" class="inline-flex items-center gap-2 bg-indigo-50/60 border border-indigo-200 rounded-xl px-4 py-2.5 text-sm font-semibold text-zinc-800 hover:bg-indigo-600 hover:text-white transition-all">
                                {{ $location['name'] }}
                            </a>
                        @endforeach
                    </div>
                    <a href="{{ route('provinsi.index') }}" class="inline-block mt-5 text-xs sm:text-sm font-bold text-emerald-700 hover:underline">
                        Lihat jangkauan layanan kami di seluruh 34 provinsi →
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== FREQUENTLY ASKED QUESTIONS (FAQ) ===== --}}
    <section class="py-20 bg-white" x-data="{ openFaq: 1 }">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center max-w-xl mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-700 bg-emerald-100 px-3.5 py-1.5 rounded-full mb-3.5">❓ FAQ</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3 text-zinc-900">Pertanyaan Sering Diajukan</h2>
                <p class="text-zinc-600 text-sm">Jawaban transparan untuk semua kekhawatiran Anda sebelum memulai.</p>
            </div>

            <div class="space-y-4">
                {{-- FAQ Item 1 --}}
                <div class="border border-zinc-200 rounded-2xl overflow-hidden bg-zinc-50/40">
                    <button @click="openFaq = openFaq === 1 ? null : 1" class="w-full p-5 text-left font-bold text-zinc-900 flex justify-between items-center gap-4 hover:bg-zinc-100/60 transition-colors">
                        <span class="text-base sm:text-lg">Berapa lama waktu pembuatan website?</span>
                        <span class="text-xl font-mono text-emerald-700 shrink-0" x-text="openFaq === 1 ? '−' : '+'"></span>
                    </button>
                    <div x-show="openFaq === 1" x-collapse class="px-5 pb-5 text-sm text-zinc-600 leading-relaxed border-t border-zinc-100 pt-3">
                        Proses pengerjaan berkisar antara <strong>1 hingga 7 hari kerja</strong> tergantung pada kelengkapan materi (foto, logo, teks) dan jenis paket yang Anda pilih. Untuk Paket Landing Page sederhana biasanya selesai dalam 1-3 hari.
                    </div>
                </div>

                {{-- FAQ Item 2 --}}
                <div class="border border-zinc-200 rounded-2xl overflow-hidden bg-zinc-50/40">
                    <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full p-5 text-left font-bold text-zinc-900 flex justify-between items-center gap-4 hover:bg-zinc-100/60 transition-colors">
                        <span class="text-base sm:text-lg">Apakah biaya sudah termasuk domain dan hosting?</span>
                        <span class="text-xl font-mono text-emerald-700 shrink-0" x-text="openFaq === 2 ? '−' : '+'"></span>
                    </button>
                    <div x-show="openFaq === 2" x-collapse class="px-5 pb-5 text-sm text-zinc-600 leading-relaxed border-t border-zinc-100 pt-3">
                        Ya, <strong>semua paket sudah termasuk domain resmi (seperti .com, .id, atau .my.id), hosting server performa tinggi, dan sertifikat SSL HTTPS</strong> untuk tahun pertama tanpa biaya tambahan.
                    </div>
                </div>

                {{-- FAQ Item 3 --}}
                <div class="border border-zinc-200 rounded-2xl overflow-hidden bg-zinc-50/40">
                    <button @click="openFaq = openFaq === 3 ? null : 3" class="w-full p-5 text-left font-bold text-zinc-900 flex justify-between items-center gap-4 hover:bg-zinc-100/60 transition-colors">
                        <span class="text-base sm:text-lg">Apakah saya bisa mengupdate isi website sendiri?</span>
                        <span class="text-xl font-mono text-emerald-700 shrink-0" x-text="openFaq === 3 ? '−' : '+'"></span>
                    </button>
                    <div x-show="openFaq === 3" x-collapse class="px-5 pb-5 text-sm text-zinc-600 leading-relaxed border-t border-zinc-100 pt-3">
                        Bisa! Pada paket CMS dan ke atas, Anda mendapatkan akses panel admin yang mudah digunakan untuk mengedit teks, menambah foto galeri, menerbitkan berita/kegiatan, atau memperbarui produk kapan saja.
                    </div>
                </div>

                {{-- FAQ Item 4 --}}
                <div class="border border-zinc-200 rounded-2xl overflow-hidden bg-zinc-50/40">
                    <button @click="openFaq = openFaq === 4 ? null : 4" class="w-full p-5 text-left font-bold text-zinc-900 flex justify-between items-center gap-4 hover:bg-zinc-100/60 transition-colors">
                        <span class="text-base sm:text-lg">Bagaimana jika saya belum memiliki materi foto atau logo?</span>
                        <span class="text-xl font-mono text-emerald-700 shrink-0" x-text="openFaq === 4 ? '−' : '+'"></span>
                    </button>
                    <div x-show="openFaq === 4" x-collapse class="px-5 pb-5 text-sm text-zinc-600 leading-relaxed border-t border-zinc-100 pt-3">
                        Tim Barizaloka siap membantu! Kami dapat membuatkan alternatif logo sederhana, merapikan kalimat teks narasi profil Anda, serta menyediakan gambar/ilustrasi stok bebas hak cipta yang sesuai dengan bidang Anda.
                    </div>
                </div>

                {{-- FAQ Item 5 --}}
                <div class="border border-zinc-200 rounded-2xl overflow-hidden bg-zinc-50/40">
                    <button @click="openFaq = openFaq === 5 ? null : 5" class="w-full p-5 text-left font-bold text-zinc-900 flex justify-between items-center gap-4 hover:bg-zinc-100/60 transition-colors">
                        <span class="text-base sm:text-lg">Mengapa memilih framework Laravel dibanding CMS seperti WordPress?</span>
                        <span class="text-xl font-mono text-emerald-700 shrink-0" x-text="openFaq === 5 ? '−' : '+'"></span>
                    </button>
                    <div x-show="openFaq === 5" x-collapse class="px-5 pb-5 text-sm text-zinc-600 leading-relaxed border-t border-zinc-100 pt-3">
                        Laravel memberikan <strong>performa yang jauh lebih cepat (tanpa bloatware plugin), tingkat keamanan enterprise yang lebih tinggi, serta fleksibilitas kustomisasi 100%</strong> sesuai kebutuhan unik instansi Anda tanpa keterbatasan template.
                    </div>
                </div>

                {{-- FAQ Item 6 --}}
                <div class="border border-zinc-200 rounded-2xl overflow-hidden bg-zinc-50/40">
                    <button @click="openFaq = openFaq === 6 ? null : 6" class="w-full p-5 text-left font-bold text-zinc-900 flex justify-between items-center gap-4 hover:bg-zinc-100/60 transition-colors">
                        <span class="text-base sm:text-lg">Berapa biaya perpanjangan untuk tahun berikutnya?</span>
                        <span class="text-xl font-mono text-emerald-700 shrink-0" x-text="openFaq === 6 ? '−' : '+'"></span>
                    </button>
                    <div x-show="openFaq === 6" x-collapse class="px-5 pb-5 text-sm text-zinc-600 leading-relaxed border-t border-zinc-100 pt-3">
                        Biaya perpanjangan tahun berikutnya sangat terjangkau, hanya mencakup sewa domain &amp; hosting server berkisar Rp 250.000 – Rp 500.000/tahun (tergantung ekstensi domain dan kapasitas server). Tanpa biaya tersembunyi!
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== FINAL CTA BANNER ===== --}}
    <section class="py-20 bg-gradient-to-br from-emerald-900 via-teal-900 to-indigo-950 text-white relative overflow-hidden">
        <div class="relative max-w-3xl mx-auto px-6 text-center flex flex-col items-center gap-6">
            <span class="text-5xl float-icon">🚀</span>
            <h2 class="text-3xl sm:text-4xl font-bold leading-tight font-brand-serif">
                Siap Memiliki Website Profesional &amp; Berkinerja Tinggi?
            </h2>
            <p class="text-emerald-100/90 text-base max-w-xl">
                Konsultasikan kebutuhan website instansi, pesantren, atau usaha Anda secara gratis sekarang juga. Tim Barizaloka siap membantu!
            </p>

            <div class="flex flex-wrap justify-center items-center gap-3.5">
                <a href="https://wa.me/6285188158542?text=Halo%20Barizaloka%2C%20saya%20tertarik%20pembuatan%20website%20dan%20mau%20konsultasi"
                   target="_blank" rel="noopener noreferrer"
                   class="px-8 py-4 rounded-xl bg-white text-emerald-950 font-bold text-sm hover:bg-emerald-50 transition-all shadow-lg flex items-center gap-2">
                    💬 Mulai Konsultasi Gratis via WhatsApp
                </a>
                <a href="{{ route('harga') }}"
                   class="px-8 py-4 rounded-xl bg-white/10 backdrop-blur-sm border border-white/20 text-white font-bold text-sm hover:bg-white/20 transition-all">
                    💰 Lihat Detail Paket
                </a>
            </div>
        </div>
    </section>

</x-layouts.base>
