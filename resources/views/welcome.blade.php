<x-layouts.base
    title="Barizaloka — Dari Santri untuk Go Digital"
    description="Barizaloka adalah ekosistem teknologi dari Rembang: jasa pembuatan website, SaaS, jual beli website & aplikasi, serta komunitas lingkungan & teknologi."
>

    <style>
        @keyframes heroFadeIn { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
        .hero-anim { animation: heroFadeIn .9s ease both; }
        .hero-title-span {
            background: linear-gradient(135deg, #5DCAA5 0%, #a8edd4 50%, #5DCAA5 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>

    {{-- ===== HERO ===== --}}
    <section class="relative min-h-screen flex items-center overflow-hidden bg-brand-darker">
        <svg class="absolute inset-0 w-full h-full opacity-15" viewBox="0 0 900 600" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="islamicPat" x="0" y="0" width="80" height="80" patternUnits="userSpaceOnUse">
                    <g fill="none" stroke="#fff" stroke-width="0.8">
                        <polygon points="40,10 44.5,25 59,25 47.5,34 52,49 40,40 28,49 32.5,34 21,25 35.5,25"/>
                        <rect x="29" y="29" width="22" height="22" transform="rotate(45,40,40)"/>
                        <line x1="0" y1="0" x2="21" y2="25"/><line x1="80" y1="0" x2="59" y2="25"/>
                        <line x1="0" y1="80" x2="21" y2="55"/><line x1="80" y1="80" x2="59" y2="55"/>
                    </g>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#islamicPat)"/>
        </svg>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse 70% 60% at 50% 50%, rgba(29,158,117,.35) 0%, transparent 70%);"></div>

        <div class="relative z-10 max-w-3xl mx-auto px-6 py-12 text-center hero-anim">
            <span class="inline-flex items-center gap-1.5 bg-white/12 border border-white/25 rounded-full px-4.5 py-2 text-sm text-[#c8f0e2] tracking-wide mb-6">🌟 Ekosistem Digital Aktif</span>

            <h1 class="font-brand-serif font-extrabold text-[clamp(2rem,6vw,3.6rem)] leading-[1.15] text-white mb-3" style="font-family: 'Playfair Display', Georgia, serif;">
                Jasa Pembuatan Website,<br>
                <span class="hero-title-span">Solusi Digital untuk Bisnis Anda</span>
            </h1>

            <p class="text-lg text-white/78 max-w-xl mx-auto mb-8">Ekosistem teknologi inovatif yang mendukung dampak 🌍 lingkungan, 💻 teknologi, dan ✨ spiritual yang positif.</p>

            <div class="flex flex-wrap gap-3 justify-center mb-7">
                <a href="#komunitas" class="inline-flex items-center gap-1.5 bg-white text-brand-dark rounded-xl px-7 py-3.5 text-sm font-bold hover:-translate-y-0.5 hover:shadow-xl transition-all">🚀 Jelajahi Ekosistem</a>
                <a href="#layanan" class="inline-flex items-center gap-1.5 bg-transparent border border-white/50 text-white rounded-xl px-7 py-3.5 text-sm font-semibold hover:bg-white/10 transition-colors">💡 Lihat Solusi Kami</a>
                <a href="#layanan" class="inline-flex items-center gap-1.5 bg-transparent border border-white/50 text-white rounded-xl px-7 py-3.5 text-sm font-semibold hover:bg-white/10 transition-colors">✨ Lihat Layanan</a>
            </div>

            <p class="text-sm text-white/50">🏡 Didirikan oleh Pemuda Desa — Kecamatan Sedan dan Sarang, Kabupaten Rembang 🌾</p>
        </div>
    </section>

    {{-- ===== SEO HIGHLIGHT ===== --}}
    <section id="seo" class="py-20 bg-white">
        <div class="max-w-[800px] mx-auto px-6 text-center">
            <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3.5">🔍 SEO Ready</span>
            <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold leading-tight mb-4" style="font-family: 'Playfair Display', Georgia, serif;">Jasa Pembuatan Website<br>Muncul di Google</h2>
            <p class="text-zinc-500 leading-relaxed">Ubah website biasa menjadi mesin penghasil leads yang muncul di halaman pertama pencarian Google. Dilengkapi dengan optimasi SEO kelas dunia, desain responsif multi-device, dan dukungan penuh hampir sepanjang hari.</p>
        </div>
    </section>

    {{-- ===== LAYANAN KAMI ===== --}}
    <section id="layanan-kami" class="py-20 bg-[#f4f8f6]">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center max-w-lg mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3.5">🛠️ Layanan Kami</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold leading-tight mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Solusi Digital Lengkap<br>untuk Bisnis Anda</h2>
                <p class="text-zinc-500">Dari strategi hingga eksekusi, semua yang Anda butuhkan untuk sukses di era digital ada di sini.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-[900px] mx-auto">
                <div class="relative bg-white border border-[#e0ebe7] rounded-2xl p-8 overflow-hidden">
                    <div class="absolute top-0 inset-x-0 h-1 bg-brand-primary"></div>
                    <span class="block text-4xl mb-4">💻</span>
                    <h3 class="font-brand-serif text-xl font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Web Development</h3>
                    <p class="text-sm text-zinc-500 mb-5 leading-relaxed">Website profesional yang cepat, responsif, dan dioptimalkan untuk konversi bisnis Anda.</p>
                    <ul class="flex flex-col gap-1.5">
                        <li class="text-sm text-[#1a2420]">✅ Custom Design</li>
                        <li class="text-sm text-[#1a2420]">✅ Responsive Mobile-First</li>
                        <li class="text-sm text-[#1a2420]">✅ SEO Optimized</li>
                        <li class="text-sm text-[#1a2420]">✅ CMS Integration</li>
                    </ul>
                </div>
                <a href="https://lynk.id/barizaloka" target="_blank" rel="noopener" class="relative bg-white border border-[#e0ebe7] rounded-2xl p-8 overflow-hidden hover:-translate-y-1 hover:shadow-md transition-all">
                    <div class="absolute top-0 inset-x-0 h-1 bg-brand-gold"></div>
                    <span class="block text-4xl mb-4">🛠️</span>
                    <h3 class="font-brand-serif text-xl font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Etalase Karya Digital</h3>
                    <p class="text-sm text-zinc-500 mb-5 leading-relaxed">Website, aplikasi, konsultasi, dan tools buatan sendiri. Bukan marketplace umum, semua dikurasi langsung 🛠️</p>
                    <ul class="flex flex-col gap-1.5">
                        <li class="text-sm text-[#1a2420]">✅ Semua karya dikurasi langsung</li>
                        <li class="text-sm text-[#1a2420]">✅ Website & aplikasi siap pakai</li>
                        <li class="text-sm text-[#1a2420]">✅ Konsultasi & tools digital</li>
                    </ul>
                    <span class="inline-block mt-5 text-sm font-semibold text-brand-primary">Kunjungi lynk.id/barizaloka →</span>
                </a>
            </div>
        </div>
    </section>

    {{-- ===== STATS ===== --}}
    <section id="stats" class="bg-white border-b border-[#e0ebe7] py-8">
        <div class="max-w-[1100px] mx-auto px-6 flex flex-wrap justify-center items-center">
            <div class="text-center px-12 border-r border-[#e0ebe7] max-sm:px-6">
                <div class="font-brand-serif text-4xl font-extrabold text-brand-primary mb-1" style="font-family: 'Playfair Display', Georgia, serif;">4</div>
                <div class="text-sm text-zinc-500 font-medium">🏘️ Pilar Aktif</div>
            </div>
            <div class="text-center px-12 border-r border-[#e0ebe7] max-sm:px-6">
                <div class="font-brand-serif text-4xl font-extrabold text-brand-primary mb-1" style="font-family: 'Playfair Display', Georgia, serif;">200+</div>
                <div class="text-sm text-zinc-500 font-medium">👥 Anggota Bergabung</div>
            </div>
            <div class="text-center px-12 max-sm:px-6">
                <div class="font-brand-serif text-4xl font-extrabold text-brand-primary mb-1" style="font-family: 'Playfair Display', Georgia, serif;">∞</div>
                <div class="text-sm text-zinc-500 font-medium">🌟 Dampak Positif</div>
            </div>
        </div>
    </section>

    {{-- ===== KOMUNITAS ===== --}}
    <section id="komunitas" class="py-20 bg-[#f4f8f6]">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center max-w-lg mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3.5">🏘️ Pilar Utama</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Ekosistem Kami</h2>
                <p class="text-zinc-500">Setiap pilar memiliki fokus yang berbeda namun bersatu dalam satu tujuan: dampak nyata yang positif.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- Astraloka --}}
                <div class="relative bg-white border border-[#e0ebe7] rounded-2xl p-7 overflow-hidden hover:-translate-y-1 hover:shadow-xl transition-all">
                    <div class="absolute top-0 inset-x-0 h-1 bg-brand-primary"></div>
                    <span class="block text-4xl mb-4">🌍</span>
                    <h3 class="font-brand-serif text-xl font-bold mb-0.5" style="font-family: 'Playfair Display', Georgia, serif;">Astraloka</h3>
                    <div class="text-xs font-semibold text-brand-primary uppercase tracking-wide mb-3.5">🌱 Usaha Peduli Alam</div>
                    <p class="text-sm text-zinc-500 mb-4 leading-relaxed">Membangun kesadaran lingkungan melalui edukasi daur ulang, aksi sosial, dan program pengelolaan sampah yang berkelanjutan.</p>
                    <ul class="flex flex-col gap-1.5 text-sm text-[#1a2420] mb-5">
                        <li>♻️ Edukasi Daur Ulang</li>
                        <li>🤝 Aksi Sosial Lingkungan</li>
                        <li>🗑️ Program Pengelolaan Sampah</li>
                    </ul>
                    <a href="https://astraloka.my.id" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 text-sm font-semibold text-brand-primary border border-brand-primary rounded-lg px-4 py-2 hover:bg-brand-primary hover:text-white transition-colors">🌍 Kunjungi Astraloka</a>
                </div>

                {{-- Baricode --}}
                <div class="relative bg-white border border-[#e0ebe7] rounded-2xl p-7 overflow-hidden hover:-translate-y-1 hover:shadow-xl transition-all">
                    <div class="absolute top-0 inset-x-0 h-1 bg-brand-blue"></div>
                    <span class="block text-4xl mb-4">💻</span>
                    <h3 class="font-brand-serif text-xl font-bold mb-0.5" style="font-family: 'Playfair Display', Georgia, serif;">Baricode</h3>
                    <div class="text-xs font-semibold text-brand-primary uppercase tracking-wide mb-3.5">🖥️ Usaha Teknologi &amp; IT</div>
                    <p class="text-sm text-zinc-500 mb-4 leading-relaxed">Ruang belajar mandiri dan kolaboratif bagi para developer—dari pemula hingga profesional yang ingin terus berkembang.</p>
                    <ul class="flex flex-col gap-1.5 text-sm text-[#1a2420] mb-5">
                        <li>📚 Belajar Mandiri &amp; Terstruktur</li>
                        <li>🚀 Proyek Kolaboratif</li>
                        <li>🌐 Jaringan Developer</li>
                    </ul>
                    <a href="https://baricode.org" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 text-sm font-semibold text-brand-primary border border-brand-primary rounded-lg px-4 py-2 hover:bg-brand-primary hover:text-white transition-colors">💻 Kunjungi Baricode</a>
                </div>

                {{-- Self Reminder --}}
                <div class="relative bg-white border border-[#e0ebe7] rounded-2xl p-7 overflow-hidden hover:-translate-y-1 hover:shadow-xl transition-all">
                    <div class="absolute top-0 inset-x-0 h-1 bg-brand-gold"></div>
                    <span class="block text-4xl mb-4">📿</span>
                    <h3 class="font-brand-serif text-xl font-bold mb-0.5" style="font-family: 'Playfair Display', Georgia, serif;">Self Reminder</h3>
                    <div class="text-xs font-semibold text-brand-primary uppercase tracking-wide mb-3.5">🕌 Pengingat Diri Menuju Akhirat</div>
                    <p class="text-sm text-zinc-500 mb-4 leading-relaxed">Ruang refleksi spiritual yang menyediakan pengingat harian, muhasabah diri, dan wawasan untuk perjalanan menuju akhirat.</p>
                    <ul class="flex flex-col gap-1.5 text-sm text-[#1a2420] mb-5">
                        <li>🌙 Pengingat Spiritual Harian</li>
                        <li>💭 Muhasabah &amp; Refleksi Diri</li>
                        <li>📊 Pantauan Progres Ibadah</li>
                    </ul>
                    <a href="https://selfreminder.org" class="inline-flex items-center gap-1.5 text-sm font-semibold text-brand-primary border border-brand-primary rounded-lg px-4 py-2 hover:bg-brand-primary hover:text-white transition-colors">📿 Kunjungi Self Reminder</a>
                </div>

            </div>
        </div>
    </section>

    {{-- ===== NILAI ===== --}}
    <section id="nilai" class="py-20 bg-white">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center max-w-lg mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3.5">💎 Filosofi Kami</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Nilai Kami</h2>
                <p class="text-zinc-500">Kami percaya bahwa perubahan nyata lahir dari kolaborasi yang tulus dan niat yang ikhlas.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                <div class="bg-[#f4f8f6] border border-[#e0ebe7] rounded-xl p-6 hover:-translate-y-1 hover:shadow-md transition-all">
                    <div class="text-3xl mb-3">🤝</div>
                    <h3 class="font-brand-serif text-base font-bold mb-2" style="font-family: 'Playfair Display', Georgia, serif;">Kolaboratif</h3>
                    <p class="text-sm text-zinc-500 leading-relaxed">Setiap anggota berkontribusi dan saling menguatkan dalam ekosistem yang inklusif.</p>
                </div>
                <div class="bg-[#f4f8f6] border border-[#e0ebe7] rounded-xl p-6 hover:-translate-y-1 hover:shadow-md transition-all">
                    <div class="text-3xl mb-3">💡</div>
                    <h3 class="font-brand-serif text-base font-bold mb-2" style="font-family: 'Playfair Display', Georgia, serif;">Inovatif</h3>
                    <p class="text-sm text-zinc-500 leading-relaxed">Teknologi adalah alat, bukan tujuan. Kami memanfaatkannya secara kreatif untuk memecahkan masalah nyata.</p>
                </div>
                <div class="bg-[#f4f8f6] border border-[#e0ebe7] rounded-xl p-6 hover:-translate-y-1 hover:shadow-md transition-all">
                    <div class="text-3xl mb-3">🌱</div>
                    <h3 class="font-brand-serif text-base font-bold mb-2" style="font-family: 'Playfair Display', Georgia, serif;">Berdampak</h3>
                    <p class="text-sm text-zinc-500 leading-relaxed">Setiap langkah yang kami ambil memiliki tujuan yang jelas: dampak positif bagi lingkungan, ilmu, dan spiritual.</p>
                </div>
                <div class="bg-[#f4f8f6] border border-[#e0ebe7] rounded-xl p-6 hover:-translate-y-1 hover:shadow-md transition-all">
                    <div class="text-3xl mb-3">🏆</div>
                    <h3 class="font-brand-serif text-base font-bold mb-2" style="font-family: 'Playfair Display', Georgia, serif;">Dipercaya</h3>
                    <p class="text-sm text-zinc-500 leading-relaxed">Dipercaya oleh mitra &amp; klien, termasuk Masjid Syatho Sedan, Rembang, Jawa Tengah.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== MITRA ===== --}}
    <section id="mitra" class="py-20 bg-[#f4f8f6]">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3.5">🏆 Kepercayaan</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold" style="font-family: 'Playfair Display', Georgia, serif;">Dipercaya Oleh Mitra &amp; Klien Kami</h2>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach ($partners as $partner)
                    <a href="{{ $partner->url }}" target="_blank" rel="noopener" class="flex flex-col items-center text-center gap-2.5 bg-white border border-[#e0ebe7] rounded-xl px-4 py-6 hover:-translate-y-1 hover:shadow-md transition-all">
                        <span class="text-4xl">{{ $partner->icon }}</span>
                        <div>
                            <strong class="block text-sm font-bold text-[#1a2420]">{{ $partner->name }}</strong>
                            @if ($partner->location)
                                <span class="text-xs text-zinc-500 leading-tight">📍 {{ $partner->location }}</span>
                            @endif
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== JASA WEBSITE CTA ===== --}}
    <section id="layanan" class="relative py-20 overflow-hidden bg-brand-darker">
        <svg class="absolute inset-0 w-full h-full opacity-8" viewBox="0 0 900 500" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="jasaPat" x="0" y="0" width="80" height="80" patternUnits="userSpaceOnUse">
                    <g fill="none" stroke="#fff" stroke-width="0.8">
                        <polygon points="40,10 44.5,25 59,25 47.5,34 52,49 40,40 28,49 32.5,34 21,25 35.5,25"/>
                        <rect x="29" y="29" width="22" height="22" transform="rotate(45,40,40)"/>
                    </g>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#jasaPat)"/>
        </svg>
        <div class="relative z-10 max-w-[1100px] mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <div>
                    <span class="inline-block bg-white/15 text-white/90 text-xs font-bold uppercase tracking-widest px-4 py-1.5 rounded-full mb-6">🛠️ Jasa Pembuatan Website</span>
                    <h2 class="font-brand-serif text-[clamp(1.8rem,3.5vw,2.75rem)] font-extrabold text-white leading-tight mb-5" style="font-family: 'Playfair Display', Georgia, serif;">
                        Website Profesional<br>untuk <span class="text-brand-gold">Semua Kebutuhan</span>
                    </h2>
                    <p class="text-white/75 leading-relaxed mb-8">Untuk pesantren, masjid, UMKM, dan komunitas desa. Cepat jadi, desain modern, dan sudah termasuk hosting + SSL.</p>
                    <ul class="flex flex-col gap-3.5 mb-10">
                        <li class="flex items-center gap-3 text-white/85 text-sm">
                            <span class="bg-white/15 rounded-full size-7 flex items-center justify-center shrink-0">⚡</span>
                            Selesai dalam 1–7 hari kerja
                        </li>
                        <li class="flex items-center gap-3 text-white/85 text-sm">
                            <span class="bg-white/15 rounded-full size-7 flex items-center justify-center shrink-0">📱</span>
                            Responsif di HP & Desktop
                        </li>
                        <li class="flex items-center gap-3 text-white/85 text-sm">
                            <span class="bg-white/15 rounded-full size-7 flex items-center justify-center shrink-0">🔒</span>
                            SSL, Hosting & Maintenance sudah termasuk
                        </li>
                        <li class="flex items-center gap-3 text-white/85 text-sm">
                            <span class="bg-white/15 rounded-full size-7 flex items-center justify-center shrink-0">💬</span>
                            Konsultasi gratis via WhatsApp
                        </li>
                    </ul>
                    <div class="flex gap-4 flex-wrap">
                        <a href="{{ route('harga') }}" class="inline-flex items-center gap-1.5 bg-white text-brand-dark rounded-xl px-7 py-3.5 text-sm font-bold hover:-translate-y-0.5 hover:shadow-xl transition-all">💻 Lihat Paket &amp; Harga</a>
                        <a href="https://wa.me/6285188158542?text=Halo%20Barizaloka%2C%20saya%20mau%20konsultasi%20website" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 bg-transparent border border-white/50 text-white rounded-xl px-7 py-3.5 text-sm font-semibold hover:bg-white/10 transition-colors">💬 Konsultasi Gratis</a>
                    </div>
                </div>

                <div class="flex flex-col gap-5">
                    <div class="bg-white/8 border border-white/15 rounded-2xl p-7 backdrop-blur-sm">
                        <div class="flex items-center gap-4 mb-3">
                            <span class="text-3xl">🌐</span>
                            <div>
                                <div class="text-white font-bold text-sm">Paket Landing</div>
                                <div class="text-white/60 text-xs">1 halaman, langsung online</div>
                            </div>
                        </div>
                        <div class="text-white/55 text-xs leading-relaxed">Cocok untuk profil bisnis, jadwal kajian, atau landing page acara.</div>
                    </div>
                    <div class="relative bg-white/12 border border-white/30 rounded-2xl p-7 backdrop-blur-sm">
                        <span class="absolute -top-2.5 right-5 bg-brand-gold text-white text-[.68rem] font-bold px-3 py-1.5 rounded-full uppercase tracking-wide">Paling Populer</span>
                        <div class="flex items-center gap-4 mb-3">
                            <span class="text-3xl">⚙️</span>
                            <div>
                                <div class="text-white font-bold text-sm">Paket CMS</div>
                                <div class="text-white/60 text-xs">Kelola website sendiri</div>
                            </div>
                        </div>
                        <div class="text-white/55 text-xs leading-relaxed">WordPress CMS. Cocok untuk UMKM, masjid, atau organisasi yang aktif update konten.</div>
                    </div>
                    <a href="{{ route('harga') }}" class="flex items-center justify-center gap-2 bg-transparent border border-dashed border-white/30 rounded-lg p-4 text-white/65 text-sm hover:bg-white/8 hover:text-white/90 transition-colors">
                        Bandingkan paket lengkap →
                    </a>
                </div>

            </div>
        </div>
    </section>

    {{-- ===== CTA FINAL ===== --}}
    <section class="relative py-20 text-center overflow-hidden bg-brand-darker">
        <div class="relative z-10 max-w-[700px] mx-auto px-6">
            <h2 class="font-brand-serif text-[clamp(1.8rem,4vw,2.8rem)] font-extrabold text-white mb-3" style="font-family: 'Playfair Display', Georgia, serif;">🚀 Siap Bergabung dengan Ekosistem Kami?</h2>
            <p class="text-white/75 max-w-md mx-auto mb-8">Jadilah bagian dari gerakan positif. Bersama kita bisa menciptakan perubahan yang lebih besar. 💪</p>
            <a href="#komunitas" class="inline-flex items-center gap-1.5 bg-white text-brand-dark rounded-xl px-8 py-4 text-sm font-bold hover:-translate-y-0.5 hover:shadow-xl transition-all">🌍 Jelajahi Ekosistem</a>
        </div>
    </section>

</x-layouts.base>
