<x-layouts.base
    title="Tentang Barizaloka"
    description="Lahir dari lingkungan pesantren, dibesarkan di desa, Barizaloka membangun jembatan digital untuk pesantren, desa, dan UMKM di seluruh Indonesia."
>

    {{-- ===== ABOUT HERO ===== --}}
    <section class="relative text-center py-28 overflow-hidden bg-brand-darker">
        <div class="absolute inset-0" style="background: radial-gradient(ellipse 80% 70% at 50% 60%, rgba(29,158,117,.3) 0%, transparent 70%);"></div>
        <div class="relative z-10 max-w-xl mx-auto px-6">
            <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3">Tentang Barizaloka</span>
            <h1 class="font-brand-serif text-[clamp(2rem,5vw,3rem)] font-extrabold text-white leading-tight my-3" style="font-family: 'Playfair Display', Georgia, serif;">Santri yang Ngerti Kode,<br>Desa yang Go Digital</h1>
            <p class="text-white/72 leading-relaxed">Lahir dari lingkungan pesantren, dibesarkan di desa, Barizaloka hadir membuktikan bahwa teknologi bukan milik kota besar semata. Kami membangun jembatan digital untuk pesantren, desa, dan UMKM di seluruh Indonesia.</p>
            <div class="flex flex-wrap gap-3 justify-center mt-8">
                <a href="#siapa-kami" class="inline-flex items-center gap-1.5 bg-white text-brand-dark rounded-xl px-7 py-3.5 text-sm font-bold hover:-translate-y-0.5 hover:shadow-xl transition-all">Kenal Lebih Dekat</a>
                <a href="{{ route('home') }}#layanan" class="inline-flex items-center gap-1.5 bg-transparent border border-white/50 text-white rounded-xl px-7 py-3.5 text-sm font-semibold hover:bg-white/10 transition-colors">Lihat Layanan</a>
            </div>
        </div>
    </section>

    {{-- ===== STATS ===== --}}
    <section class="bg-white border-b border-[#e0ebe7] py-8">
        <div class="max-w-[1100px] mx-auto px-6 flex flex-wrap justify-center items-center">
            <div class="text-center px-10 border-r border-[#e0ebe7] max-sm:px-5">
                <div class="font-brand-serif text-4xl font-extrabold text-brand-primary mb-1" style="font-family: 'Playfair Display', Georgia, serif;">Banyak</div>
                <div class="text-sm text-zinc-500 font-medium">Website Terbangun</div>
            </div>
            <div class="text-center px-10 border-r border-[#e0ebe7] max-sm:px-5">
                <div class="font-brand-serif text-4xl font-extrabold text-brand-primary mb-1" style="font-family: 'Playfair Display', Georgia, serif;">3</div>
                <div class="text-sm text-zinc-500 font-medium">Pilar Aktif</div>
            </div>
            <div class="text-center px-10 border-r border-[#e0ebe7] max-sm:px-5">
                <div class="font-brand-serif text-4xl font-extrabold text-brand-primary mb-1" style="font-family: 'Playfair Display', Georgia, serif;">1</div>
                <div class="text-sm text-zinc-500 font-medium">Kabupaten Dilayani</div>
            </div>
            <div class="text-center px-10 max-sm:px-5">
                <div class="font-brand-serif text-4xl font-extrabold text-brand-primary mb-1" style="font-family: 'Playfair Display', Georgia, serif;">2025</div>
                <div class="text-sm text-zinc-500 font-medium">Tahun Berdiri</div>
            </div>
        </div>
    </section>

    {{-- ===== FOUNDER QUOTE ===== --}}
    <section class="py-20 bg-white">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="relative text-center bg-brand-light rounded-2xl px-8 py-14 overflow-hidden">
                <div class="absolute top-4 left-8 text-6xl text-brand-primary opacity-10 leading-none">﷽</div>
                <p class="relative font-brand-serif italic font-bold text-[clamp(1.2rem,3vw,1.6rem)] text-brand-dark leading-snug max-w-2xl mx-auto mb-8" style="font-family: 'Playfair Display', Georgia, serif;">"Kami bukan sekadar pembuat website. Kami adalah pemuda desa yang ingin pesantren, komunitas, dan UMKM lokal punya suara di dunia digital."</p>
                <div class="flex items-center justify-center gap-4">
                    <div class="size-12.5 rounded-full bg-brand-primary text-white flex items-center justify-center font-extrabold text-lg">A</div>
                    <div class="text-left">
                        <span class="block font-bold text-[#1a2420]">Ahla</span>
                        <span class="text-sm text-zinc-500">Founder, Barizaloka</span>
                    </div>
                </div>
                <div class="mt-6 text-sm text-brand-dark font-semibold">Berbasis di Sedan, Rembang, Jawa Tengah 🌿</div>
            </div>
        </div>
    </section>

    {{-- ===== SIAPA KAMI ===== --}}
    <section id="siapa-kami" class="py-20 bg-[#f4f8f6]">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">
                <div>
                    <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3.5">Siapa Kami</span>
                    <h2 class="font-brand-serif text-[clamp(1.5rem,3vw,2.2rem)] font-bold leading-tight mb-6" style="font-family: 'Playfair Display', Georgia, serif;">Dari Desa,<br>Untuk Indonesia</h2>
                    <p class="text-zinc-500 mb-6">Barizaloka lahir dari keresahan sederhana: mengapa pesantren-pesantren besar, desa-desa potensial, dan UMKM penuh semangat masih kesulitan hadir secara digital dengan layak?</p>
                    <p class="text-zinc-500 mb-6">Didirikan oleh pemuda dari Kecamatan Sedan &amp; Sarang, Kabupaten Rembang, kami membangun ekosistem digital yang berpijak pada nilai-nilai pesantren: <strong class="text-brand-primary">kolaboratif, ikhlas bermanfaat, dan berorientasi dampak nyata.</strong></p>
                    <p class="text-zinc-500">Dengan tagline "Roketkan Idemu dengan Website", Barizaloka tidak hanya membuat website — kami mendampingi klien untuk benar-benar hadir, bercerita, dan berkembang di ruang digital.</p>
                </div>
                <div class="grid grid-cols-2 gap-4 mt-2">
                    <div class="bg-white border border-[#e0ebe7] rounded-xl text-center font-bold py-4">🕌 Pesantren</div>
                    <div class="bg-white border border-[#e0ebe7] rounded-xl text-center font-bold py-4">🏡 Desa</div>
                    <div class="bg-white border border-[#e0ebe7] rounded-xl text-center font-bold py-4">🛒 UMKM</div>
                    <div class="bg-white border border-[#e0ebe7] rounded-xl text-center font-bold py-4">💻 Komunitas</div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== NILAI KAMI ===== --}}
    <section id="nilai" class="py-20 bg-white">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center max-w-lg mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3.5">Fondasi Kami</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Nilai yang Menghidupkan</h2>
                <p class="text-zinc-500">Empat pilar yang menjadi ruh dalam setiap baris kode dan setiap keputusan yang kami buat.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                <div class="bg-[#f4f8f6] border border-[#e0ebe7] rounded-xl p-6 hover:-translate-y-1 hover:shadow-md transition-all">
                    <div class="text-3xl mb-3">🤝</div>
                    <h3 class="font-brand-serif text-base font-bold mb-2" style="font-family: 'Playfair Display', Georgia, serif;">Kolaboratif</h3>
                    <p class="text-sm text-zinc-500 leading-relaxed">Kami percaya bahwa kemajuan digital paling bermakna terjadi ketika dibangun bersama-sama, bukan sendiri-sendiri.</p>
                </div>
                <div class="bg-[#f4f8f6] border border-[#e0ebe7] rounded-xl p-6 hover:-translate-y-1 hover:shadow-md transition-all">
                    <div class="text-3xl mb-3">💡</div>
                    <h3 class="font-brand-serif text-base font-bold mb-2" style="font-family: 'Playfair Display', Georgia, serif;">Inovatif</h3>
                    <p class="text-sm text-zinc-500 leading-relaxed">Tradisi pesantren bukan hambatan teknologi — justru menjadi sumber inspirasi untuk solusi yang unik dan kontekstual.</p>
                </div>
                <div class="bg-[#f4f8f6] border border-[#e0ebe7] rounded-xl p-6 hover:-translate-y-1 hover:shadow-md transition-all">
                    <div class="text-3xl mb-3">🌱</div>
                    <h3 class="font-brand-serif text-base font-bold mb-2" style="font-family: 'Playfair Display', Georgia, serif;">Berdampak</h3>
                    <p class="text-sm text-zinc-500 leading-relaxed">Setiap website yang kami bangun harus memberi dampak nyata: lebih banyak donasi, lebih banyak pembeli, lebih banyak santri.</p>
                </div>
                <div class="bg-[#f4f8f6] border border-[#e0ebe7] rounded-xl p-6 hover:-translate-y-1 hover:shadow-md transition-all">
                    <div class="text-3xl mb-3">🕌</div>
                    <h3 class="font-brand-serif text-base font-bold mb-2" style="font-family: 'Playfair Display', Georgia, serif;">Islami</h3>
                    <p class="text-sm text-zinc-500 leading-relaxed">Teknologi yang barakah: dibangun dengan niat yang benar, digunakan untuk kemanfaatan yang lebih luas.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== EKOSISTEM ===== --}}
    <section id="komunitas" class="py-20 bg-[#f4f8f6]">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center max-w-lg mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3.5">Ekosistem Digital</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Tiga Pilar, Satu Gerakan</h2>
                <p class="text-zinc-500">Di bawah naungan Barizaloka, tiga pilar tumbuh dengan fokus dan karakter masing-masing.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="relative bg-white border border-[#e0ebe7] rounded-2xl p-7 overflow-hidden">
                    <div class="absolute top-0 inset-x-0 h-1 bg-brand-primary"></div>
                    <span class="block text-4xl mb-4">🌿</span>
                    <h3 class="font-brand-serif text-xl font-bold mb-0.5" style="font-family: 'Playfair Display', Georgia, serif;">Astraloka</h3>
                    <div class="text-xs font-semibold text-brand-primary uppercase tracking-wide mb-3.5">Lingkungan &amp; Alam</div>
                    <p class="text-sm text-zinc-500 leading-relaxed">Usaha peduli lingkungan yang menyuarakan isu ekologi melalui pendekatan digital dan kearifan lokal desa pesisir Rembang.</p>
                </div>
                <div class="relative bg-white border border-[#e0ebe7] rounded-2xl p-7 overflow-hidden">
                    <div class="absolute top-0 inset-x-0 h-1 bg-brand-blue"></div>
                    <span class="block text-4xl mb-4">💻</span>
                    <h3 class="font-brand-serif text-xl font-bold mb-0.5" style="font-family: 'Playfair Display', Georgia, serif;">Baricode</h3>
                    <div class="text-xs font-semibold text-brand-primary uppercase tracking-wide mb-3.5">Teknologi &amp; Pemrograman</div>
                    <p class="text-sm text-zinc-500 leading-relaxed">Usaha IT yang mempertemukan santri dan pemuda desa yang ingin belajar coding, web development, dan dunia teknologi secara kolaboratif.</p>
                </div>
                <div class="relative bg-white border border-[#e0ebe7] rounded-2xl p-7 overflow-hidden">
                    <div class="absolute top-0 inset-x-0 h-1 bg-brand-gold"></div>
                    <span class="block text-4xl mb-4">📿</span>
                    <h3 class="font-brand-serif text-xl font-bold mb-0.5" style="font-family: 'Playfair Display', Georgia, serif;">Self Reminder</h3>
                    <div class="text-xs font-semibold text-brand-primary uppercase tracking-wide mb-3.5">Spiritual &amp; Produktivitas</div>
                    <p class="text-sm text-zinc-500 leading-relaxed">Komunitas pengembangan diri berbasis nilai Islam: menyeimbangkan produktivitas, spiritualitas, dan ketenangan jiwa di era digital yang serba cepat.</p>
                </div>
            </div>

            <div class="relative text-center bg-white rounded-2xl px-8 py-12 mt-16">
                <p class="font-brand-serif italic font-bold text-xl text-brand-dark mb-3" style="font-family: 'Playfair Display', Georgia, serif;">"Santri Muhammadiyah yang Ngerti Kode."</p>
                <p class="text-sm text-zinc-500 max-w-xl mx-auto">Personal branding ini bukan sekadar tagline — ini adalah identitas. Bahwa ilmu agama dan ilmu teknologi bukan sesuatu yang bertentangan, melainkan saling melengkapi.</p>
            </div>
        </div>
    </section>

    {{-- ===== MILESTONE ===== --}}
    <section id="perjalanan" class="py-20 bg-white">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3.5">Milestone</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold" style="font-family: 'Playfair Display', Georgia, serif;">Perjalanan Barizaloka</h2>
            </div>

            <div class="relative max-w-2xl mx-auto py-8">
                <div class="absolute top-0 bottom-0 left-5 w-0.5 bg-[#e0ebe7]"></div>

                <div class="relative pl-12 mb-10">
                    <div class="absolute left-2.75 top-1.25 size-5 rounded-full bg-white border-4 border-brand-primary z-10"></div>
                    <span class="block font-brand-serif text-sm font-extrabold text-brand-primary mb-1" style="font-family: 'Playfair Display', Georgia, serif;">2025 — Awal</span>
                    <div class="bg-white border border-[#e0ebe7] rounded-xl p-6 shadow-sm">
                        <h3 class="font-brand-serif text-lg font-bold mb-2" style="font-family: 'Playfair Display', Georgia, serif;">Lahir dari Kegelisahan</h3>
                        <p class="text-sm text-zinc-500 leading-relaxed">Berawal dari kegelisahan melihat pesantren, desa, dan UMKM lokal yang belum punya kehadiran digital layak. Barizaloka mulai dirintis — penuh semangat, penuh harapan — dari kamar kecil di Desa Karangasem.</p>
                    </div>
                </div>

                <div class="relative pl-12 mb-10">
                    <div class="absolute left-2.75 top-1.25 size-5 rounded-full bg-white border-4 border-brand-primary z-10"></div>
                    <span class="block font-brand-serif text-sm font-extrabold text-brand-primary mb-1" style="font-family: 'Playfair Display', Georgia, serif;">2025 — Tengah Jalan</span>
                    <div class="bg-white border border-[#e0ebe7] rounded-xl p-6 shadow-sm">
                        <h3 class="font-brand-serif text-lg font-bold mb-2" style="font-family: 'Playfair Display', Georgia, serif;">Sempat Berhenti &amp; Kehilangan Arah</h3>
                        <p class="text-sm text-zinc-500 leading-relaxed">Tak ada yang instan. Beberapa bulan setelah rintisan dimulai, kami sempat berhenti — bukan karena menyerah, tapi karena sadar: semangat saja tidak cukup tanpa pondasi yang kokoh. Kami butuh lebih dari sekadar niat.</p>
                    </div>
                </div>

                <div class="relative pl-12 mb-10">
                    <div class="absolute left-2.75 top-1.25 size-5 rounded-full bg-white border-4 border-brand-gold z-10"></div>
                    <span class="block font-brand-serif text-sm font-extrabold text-brand-gold mb-1" style="font-family: 'Playfair Display', Georgia, serif;">Ramadan 2025</span>
                    <div class="bg-[#FFFDF5] border border-brand-gold rounded-xl p-6 shadow-sm">
                        <h3 class="font-brand-serif text-lg font-bold mb-2" style="font-family: 'Playfair Display', Georgia, serif;">Kebangkitan di Bulan Penuh Berkah</h3>
                        <p class="text-sm text-zinc-500 leading-relaxed">Ramadan menjadi titik balik. Di bulan yang penuh refleksi ini, kami memulai kembali — kali ini dengan benar. Pondasi dibangun dari awal: visi yang jelas, nilai yang solid, dan struktur ekosistem yang nyata. Bukan sekadar berlari, tapi tahu ke mana harus pergi.</p>
                        <div class="mt-4 text-sm font-bold">🌙 Membangun pondasi yang sesungguhnya</div>
                    </div>
                </div>

                <div class="relative pl-12 mb-10">
                    <div class="absolute left-2.75 top-1.25 size-5 rounded-full bg-white border-4 border-brand-primary z-10"></div>
                    <span class="block font-brand-serif text-sm font-extrabold text-brand-primary mb-1" style="font-family: 'Playfair Display', Georgia, serif;">2026</span>
                    <div class="bg-white border border-[#e0ebe7] rounded-xl p-6 shadow-sm">
                        <h3 class="font-brand-serif text-lg font-bold mb-2" style="font-family: 'Playfair Display', Georgia, serif;">Tiga Pilar Ekosistem Resmi Berdiri</h3>
                        <p class="text-sm text-zinc-500 leading-relaxed mb-4">Jerih payah itu terbayar. Tahun 2026, ekosistem Barizaloka resmi memiliki tiga pilar yang aktif dan terarah.</p>
                        <div class="grid grid-cols-2 gap-2 text-sm">
                            <div>🌿 Astraloka</div>
                            <div>💻 Baricode</div>
                            <div>📿 Self Reminder</div>
                        </div>
                    </div>
                </div>

                <div class="relative pl-12">
                    <div class="absolute left-2.75 top-1.25 size-5 rounded-full bg-brand-primary border-4 border-brand-primary z-10"></div>
                    <span class="block font-brand-serif text-sm font-extrabold text-brand-primary mb-1" style="font-family: 'Playfair Display', Georgia, serif;">2026 — Kini</span>
                    <div class="bg-white border border-brand-primary rounded-xl p-6" style="box-shadow: 0 0 15px rgba(29,158,117,.15);">
                        <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3 py-1 rounded-full mb-2">SEKARANG</span>
                        <h3 class="font-brand-serif text-lg font-bold mb-2" style="font-family: 'Playfair Display', Georgia, serif;">Membuka Jasa — Siap Melayani</h3>
                        <p class="text-sm text-zinc-500 leading-relaxed mb-4">Dengan pondasi yang kini kokoh, Barizaloka membuka diri untuk dunia. Kami resmi menerima jasa pembuatan website untuk pesantren, desa, UMKM, dan komunitas — membawa semua nilai yang sudah kami bangun ke dalam setiap proyek.</p>
                        <div class="grid grid-cols-2 gap-2 text-sm">
                            <div>🌐 Jasa Website</div>
                            <div>🤝 Pendampingan Digital</div>
                            <div>✨ 3 Pilar Aktif</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== CTA FINAL ===== --}}
    <section class="relative py-20 text-center overflow-hidden bg-brand-darker">
        <div class="relative z-10 max-w-[700px] mx-auto px-6">
            <div class="text-5xl mb-4">✦</div>
            <h2 class="font-brand-serif text-[clamp(1.8rem,4vw,2.8rem)] font-extrabold text-white mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Siap Roketkan<br>Idemu ke Dunia Digital?</h2>
            <p class="text-white/75 max-w-md mx-auto mb-8">Kami hadir untuk pesantren, desa, dan UMKM yang ingin punya website profesional dengan harga yang bersahabat dan tim yang benar-benar paham konteks lokal.</p>
            <div class="flex flex-wrap gap-3 justify-center">
                <a href="{{ route('home') }}" class="inline-flex items-center gap-1.5 bg-white text-brand-dark rounded-xl px-7 py-3.5 text-sm font-bold hover:-translate-y-0.5 hover:shadow-xl transition-all">🚀 Kunjungi Barizaloka.id</a>
                <a href="https://wa.me/6285188158542" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 bg-transparent border border-white/50 text-white rounded-xl px-7 py-3.5 text-sm font-semibold hover:bg-white/10 transition-colors">💬 Chat via WhatsApp</a>
            </div>
        </div>
    </section>

</x-layouts.base>
