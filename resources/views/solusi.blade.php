<x-layouts.base
    title="Jasa Pembuatan Website — Barizaloka"
    description="Website profesional mulai Rp 350.000/tahun untuk pesantren, masjid, UMKM, dan komunitas desa. Cepat jadi, desain modern, hosting & SSL sudah termasuk."
>

    <style>
        @keyframes heroFadeIn { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
        .hero-anim { animation: heroFadeIn .9s ease both; }
    </style>

    {{-- ===== HERO ===== --}}
    <section class="relative min-h-[80vh] flex items-center overflow-hidden bg-brand-darker">
        <svg class="absolute inset-0 w-full h-full opacity-15" viewBox="0 0 900 600" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="islamicPatJasa" x="0" y="0" width="80" height="80" patternUnits="userSpaceOnUse">
                    <g fill="none" stroke="#fff" stroke-width="0.8">
                        <polygon points="40,10 44.5,25 59,25 47.5,34 52,49 40,40 28,49 32.5,34 21,25 35.5,25"/>
                        <rect x="29" y="29" width="22" height="22" transform="rotate(45,40,40)"/>
                    </g>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#islamicPatJasa)"/>
        </svg>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse 70% 60% at 50% 50%, rgba(29,158,117,.35) 0%, transparent 70%);"></div>

        <div class="relative z-10 max-w-3xl mx-auto px-6 py-16 text-center hero-anim">
            <span class="inline-flex items-center gap-1.5 bg-white/12 border border-white/25 rounded-full px-4.5 py-2 text-sm text-[#c8f0e2] tracking-wide mb-6">🚀 Dipercaya Banyak Bisnis di Indonesia</span>

            <h1 class="font-brand-serif font-extrabold text-[clamp(2rem,6vw,3.6rem)] leading-[1.15] text-white mb-3" style="font-family: 'Playfair Display', Georgia, serif;">
                Website Profesional<br>
                <span style="background: linear-gradient(135deg, #5DCAA5 0%, #a8edd4 50%, #5DCAA5 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Dalam Hitungan Hari, Hanya 350rb</span>
            </h1>

            <p class="text-lg text-white/78 max-w-xl mx-auto mb-8">Bikin website gak pake ribet. Gak perlu pusing mikirin coding atau hosting. Langsung online, siap terima pesanan atau jadwal kajian.</p>

            <div class="flex flex-wrap gap-3 justify-center">
                <a href="#harga" class="inline-flex items-center gap-1.5 bg-white text-brand-dark rounded-xl px-7 py-3.5 text-sm font-bold hover:-translate-y-0.5 hover:shadow-xl transition-all">💎 Lihat Paket &amp; Harga</a>
                <a href="https://wa.me/6285188158542" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 bg-transparent border border-white/50 text-white rounded-xl px-7 py-3.5 text-sm font-semibold hover:bg-white/10 transition-colors">💬 Konsultasi Gratis</a>
            </div>
        </div>
    </section>

    {{-- ===== STATS ===== --}}
    <section class="bg-white border-b border-[#e0ebe7] py-8">
        <div class="max-w-[1100px] mx-auto px-6 flex flex-wrap justify-center items-center">
            <div class="text-center px-12 border-r border-[#e0ebe7] max-sm:px-6">
                <div class="font-brand-serif text-4xl font-extrabold text-brand-primary mb-1" style="font-family: 'Playfair Display', Georgia, serif;">Banyak</div>
                <div class="text-sm text-zinc-500 font-medium">✅ Project Selesai</div>
            </div>
            <div class="text-center px-12 border-r border-[#e0ebe7] max-sm:px-6">
                <div class="font-brand-serif text-4xl font-extrabold text-brand-primary mb-1" style="font-family: 'Playfair Display', Georgia, serif;">Tinggi</div>
                <div class="text-sm text-zinc-500 font-medium">⭐️ Rating Klien</div>
            </div>
            <div class="text-center px-12 max-sm:px-6">
                <div class="font-brand-serif text-4xl font-extrabold text-brand-primary mb-1" style="font-family: 'Playfair Display', Georgia, serif;">Hitungan Hari</div>
                <div class="text-sm text-zinc-500 font-medium">⚡️ Pengerjaan Cepat</div>
            </div>
        </div>
    </section>

    {{-- ===== PAIN POINTS ===== --}}
    <section class="py-20 bg-[#f4f8f6]">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center max-w-lg mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3.5">⚠️ Kenali Masalahnya</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Apakah Bisnis Anda Mengalami Masalah Ini?</h2>
                <p class="text-zinc-500">Kami tahu tantangan yang dihadapi pengusaha seperti Anda. Mari identifikasi apa yang menghambat perkembangan bisnis Anda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white border border-[#e0ebe7] rounded-2xl px-8 py-10 text-center hover:shadow-md hover:-translate-y-1 transition-all">
                    <div class="text-4xl mb-4">📉</div>
                    <h4 class="font-brand-serif text-lg font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Kesulitan Meningkatkan Penjualan</h4>
                    <p class="text-sm text-zinc-500 leading-relaxed">Tanpa website yang efektif, bisnis Anda kesulitan menjangkau audiens yang lebih luas dan meningkatkan penjualan.</p>
                </div>
                <div class="bg-white border border-[#e0ebe7] rounded-2xl px-8 py-10 text-center hover:shadow-md hover:-translate-y-1 transition-all">
                    <div class="text-4xl mb-4">🤝</div>
                    <h4 class="font-brand-serif text-lg font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Kurangnya Kepercayaan Pelanggan</h4>
                    <p class="text-sm text-zinc-500 leading-relaxed">Pelanggan lebih cenderung mempercayai bisnis yang memiliki website profesional dan mudah diakses.</p>
                </div>
                <div class="bg-white border border-[#e0ebe7] rounded-2xl px-8 py-10 text-center hover:shadow-md hover:-translate-y-1 transition-all">
                    <div class="text-4xl mb-4">🎯</div>
                    <h4 class="font-brand-serif text-lg font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Tidak Ada Sistem Pemasaran Terstruktur</h4>
                    <p class="text-sm text-zinc-500 leading-relaxed">Tanpa website yang mendukung pemasaran, Anda kesulitan mengoptimalkan konversi pengunjung menjadi pembeli.</p>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="#harga" class="inline-flex items-center gap-1.5 bg-brand-dark text-white rounded-xl px-7 py-3.5 text-sm font-bold hover:-translate-y-0.5 hover:shadow-xl transition-all">Buat Website Sekarang!</a>
            </div>
        </div>
    </section>

    {{-- ===== COMPARISON ===== --}}
    <section class="py-20 bg-white">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center max-w-lg mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3.5">💡 Kenapa Harus Website?</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Masih Bergantung pada Marketplace?</h2>
                <p class="text-zinc-500">Saatnya punya aset digital yang 100% milik Anda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white border border-[#e0ebe7] rounded-2xl p-10">
                    <h3 class="font-brand-serif text-2xl font-bold mb-6 flex items-center gap-3" style="font-family: 'Playfair Display', Georgia, serif;">✕ Tanpa Website</h3>
                    <div class="flex flex-col gap-5">
                        <div class="flex gap-4">
                            <span class="text-xl shrink-0 mt-0.5">💸</span>
                            <div><strong class="block mb-1">Bayar komisi 10-20%</strong><p class="text-sm text-zinc-500">Profit terpotong setiap transaksi.</p></div>
                        </div>
                        <div class="flex gap-4">
                            <span class="text-xl shrink-0 mt-0.5">👤</span>
                            <div><strong class="block mb-1">Customer bukan milik Anda</strong><p class="text-sm text-zinc-500">Data bisa hilang kapan saja.</p></div>
                        </div>
                        <div class="flex gap-4">
                            <span class="text-xl shrink-0 mt-0.5">⚔️</span>
                            <div><strong class="block mb-1">Saingan ada di sebelah</strong><p class="text-sm text-zinc-500">Marketplace kasih rekomendasi kompetitor.</p></div>
                        </div>
                        <div class="flex gap-4">
                            <span class="text-xl shrink-0 mt-0.5">📉</span>
                            <div><strong class="block mb-1">Terlihat kurang profesional</strong><p class="text-sm text-zinc-500">Susah bangun brand awareness.</p></div>
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-brand-primary rounded-2xl p-10 shadow-md">
                    <h3 class="font-brand-serif text-2xl font-bold mb-6 flex items-center gap-3" style="font-family: 'Playfair Display', Georgia, serif;">✓ Dengan Website</h3>
                    <div class="flex flex-col gap-5">
                        <div class="flex gap-4">
                            <span class="text-xl shrink-0 mt-0.5">💰</span>
                            <div><strong class="block mb-1">100% profit masuk kantong</strong><p class="text-sm text-zinc-500">Zero potongan, zero komisi.</p></div>
                        </div>
                        <div class="flex gap-4">
                            <span class="text-xl shrink-0 mt-0.5">📊</span>
                            <div><strong class="block mb-1">Database customer milik Anda</strong><p class="text-sm text-zinc-500">Bisa remarketing kapan saja.</p></div>
                        </div>
                        <div class="flex gap-4">
                            <span class="text-xl shrink-0 mt-0.5">🎯</span>
                            <div><strong class="block mb-1">Fokus ke produk Anda</strong><p class="text-sm text-zinc-500">Tidak ada distraksi kompetitor.</p></div>
                        </div>
                        <div class="flex gap-4">
                            <span class="text-xl shrink-0 mt-0.5">✨</span>
                            <div><strong class="block mb-1">Brand image profesional</strong><p class="text-sm text-zinc-500">Kredibilitas meningkat drastis.</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== PRICING ===== --}}
    <section id="harga" class="py-20 bg-[#f4f8f6]">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center max-w-lg mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3.5">💰 Investasi Terbaik</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Pilih Paket yang Sesuai Kebutuhan</h2>
                <p class="text-zinc-500">Dua pilihan terbaik untuk bisnis Anda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch max-w-3xl mx-auto">
                {{-- Paket Landing --}}
                <div class="flex flex-col bg-white border border-[#e0ebe7] rounded-2xl p-10">
                    <div class="text-xl font-bold mb-2">Paket Landing</div>
                    <p class="text-sm text-zinc-500 mb-8">Satu Halaman, Langsung Online. Cocok untuk jadwal kajian, info acara, atau profil sederhana.</p>
                    <div class="mb-8">
                        <div class="font-brand-serif text-4xl font-extrabold text-brand-primary" style="font-family: 'Playfair Display', Georgia, serif;">Rp 350rb</div>
                        <div class="text-sm text-zinc-500 mt-1">per tahun</div>
                    </div>
                    <ul class="flex-1 flex flex-col gap-3 border-t border-[#e0ebe7] pt-8 mb-10 text-sm text-[#1a2420]">
                        <li>✅ <strong>Domain .my.id GRATIS</strong> (1 tahun)</li>
                        <li>✅ 1 Halaman Landing Page</li>
                        <li>✅ Desain Responsif (HP &amp; Desktop)</li>
                        <li>✅ SSL/HTTPS Gratis (Aman)</li>
                        <li>✅ Hosting 1 Tahun</li>
                        <li>✅ Pengerjaan Cepat (1-3 Hari)</li>
                        <li>✅ <strong>Layanan Ubah Isi GRATIS:</strong></li>
                        <li class="pl-6 text-xs">• Ganti teks/gambar (max 3 hari sekali)</li>
                        <li class="pl-6 text-xs">• Revisi layout (max 2 minggu sekali)</li>
                        <li>✅ Backup Data Rutin</li>
                        <li>✅ Konsultasi Konten via WhatsApp</li>
                    </ul>
                    <a href="https://wa.me/6285188158542?text=Halo%20Barizaloka%2C%20saya%20tertarik%20dengan%20Paket%20Landing" target="_blank" rel="noopener" class="text-center bg-white text-brand-dark border border-brand-dark rounded-xl px-7 py-3.5 text-sm font-bold hover:bg-brand-light transition-colors">Pilih Paket Landing</a>
                </div>

                {{-- Paket CMS --}}
                <div class="relative flex flex-col bg-white border-2 border-brand-primary rounded-2xl p-10 shadow-lg">
                    <span class="absolute top-5 right-5 bg-brand-primary text-white text-[.7rem] font-bold px-3 py-1.5 rounded-full uppercase tracking-wide">Paling Populer</span>
                    <div class="text-xl font-bold mb-2">Paket CMS</div>
                    <p class="text-sm text-zinc-500 mb-8">Bisa Diurus Sendiri. Cocok untuk UMKM, organisasi, atau masjid yang aktif update informasi.</p>
                    <div class="mb-8">
                        <div class="font-brand-serif text-4xl font-extrabold text-brand-primary" style="font-family: 'Playfair Display', Georgia, serif;">Rp 600rb</div>
                        <div class="text-sm text-zinc-500 mt-1">per tahun</div>
                    </div>
                    <ul class="flex-1 flex flex-col gap-3 border-t border-[#e0ebe7] pt-8 mb-10 text-sm text-[#1a2420]">
                        <li>✅ <strong>Domain .my.id GRATIS</strong> (1 tahun)</li>
                        <li>✅ Dashboard WordPress (Bisa edit sendiri)</li>
                        <li>✅ Tampilan Profesional &amp; Responsif</li>
                        <li>✅ Maksimal 5 Halaman Kustom</li>
                        <li>✅ SSL/HTTPS Gratis</li>
                        <li>✅ Hosting 1 Tahun</li>
                        <li>✅ Backup Mingguan (Retensi 7 hari)</li>
                        <li>✅ Keamanan &amp; Monitoring Dasar</li>
                        <li>✅ Update WordPress Otomatis (1 tahun)</li>
                        <li>✅ Pengerjaan 3-7 Hari</li>
                        <li>✅ Gratis Konsultasi via WhatsApp</li>
                        <li>✅ <strong>Layanan Ubah Isi GRATIS:</strong></li>
                        <li class="pl-6 text-xs">• Ganti teks/gambar (max 3 hari sekali)</li>
                        <li class="pl-6 text-xs">• Revisi layout (max 2 minggu sekali)</li>
                    </ul>
                    <a href="https://wa.me/6285188158542?text=Halo%20Barizaloka%2C%20saya%20tertarik%20dengan%20Paket%20CMS" target="_blank" rel="noopener" class="text-center bg-brand-gold text-white rounded-xl px-7 py-3.5 text-sm font-bold hover:opacity-90 transition-opacity">Pilih Paket CMS</a>
                </div>
            </div>

            <div class="text-center mt-12 text-sm text-[#1a2420] leading-relaxed max-w-2xl mx-auto">
                <p class="mb-1">⚠️ <strong>Catatan Penting:</strong></p>
                <p class="mb-1">Harga di atas adalah biaya per tahun, sudah termasuk <strong>Hosting, SSL, Maintenance, dan Update Konten</strong>.</p>
                <p>Harga sudah <strong>TERMASUK domain .my.id GRATIS</strong> (1 tahun). Ingin domain lain (.com, .id, .net, dll)? Ada biaya tambahan sesuai jenis domain yang dipilih.</p>
                <div class="mt-6 text-xs text-zinc-500">
                    💳 Pembayaran Aman: DP 50% → Selesai &amp; Review → Pelunasan 50%<br>
                    <span class="font-semibold">✓ Bank Transfer • ✓ E-wallet • ✓ QRIS</span>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== PROCESS ===== --}}
    <section class="py-20 bg-white">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center max-w-lg mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3.5">🛠️ Alur Kerja</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Proses Mudah, Website Cepat Jadi</h2>
                <p class="text-zinc-500">Tanpa ribet, kami yang handle semuanya.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-5 gap-6">
                <div class="text-center">
                    <div class="size-12 mx-auto mb-5 rounded-full bg-brand-light text-brand-primary border-2 border-brand-primary flex items-center justify-center text-xl font-extrabold">1</div>
                    <h4 class="font-brand-serif text-lg font-semibold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Konsultasi &amp; Planning</h4>
                    <p class="text-sm text-zinc-500 leading-relaxed">Chat via WhatsApp, diskusi konsep &amp; kebutuhan. Kami bantu strategi terbaik.</p>
                </div>
                <div class="text-center">
                    <div class="size-12 mx-auto mb-5 rounded-full bg-brand-light text-brand-primary border-2 border-brand-primary flex items-center justify-center text-xl font-extrabold">2</div>
                    <h4 class="font-brand-serif text-lg font-semibold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">DP &amp; Kirim Konten</h4>
                    <p class="text-sm text-zinc-500 leading-relaxed">Transfer DP 50%, kirim konten (teks, foto, logo). Kami mulai eksekusi.</p>
                </div>
                <div class="text-center">
                    <div class="size-12 mx-auto mb-5 rounded-full bg-brand-light text-brand-primary border-2 border-brand-primary flex items-center justify-center text-xl font-extrabold">3</div>
                    <h4 class="font-brand-serif text-lg font-semibold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Design &amp; Development</h4>
                    <p class="text-sm text-zinc-500 leading-relaxed">Tim kami kerjakan website. Preview dikirim untuk approval Anda.</p>
                </div>
                <div class="text-center">
                    <div class="size-12 mx-auto mb-5 rounded-full bg-brand-light text-brand-primary border-2 border-brand-primary flex items-center justify-center text-xl font-extrabold">4</div>
                    <h4 class="font-brand-serif text-lg font-semibold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Revisi &amp; Testing</h4>
                    <p class="text-sm text-zinc-500 leading-relaxed">Revisi gratis sampai puas. Testing lengkap di semua device.</p>
                </div>
                <div class="text-center">
                    <div class="size-12 mx-auto mb-5 rounded-full bg-brand-light text-brand-primary border-2 border-brand-primary flex items-center justify-center text-xl font-extrabold">5</div>
                    <h4 class="font-brand-serif text-lg font-semibold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Launch &amp; Training</h4>
                    <p class="text-sm text-zinc-500 leading-relaxed">Pelunasan, website live! Kami kasih training cara kelola website.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== FAQ ===== --}}
    <section class="py-20 bg-[#f4f8f6]">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center max-w-lg mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3.5">❓ FAQ</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Pertanyaan yang Sering Ditanyakan</h2>
                <p class="text-zinc-500">Masih ragu? Kami jawab semua kekhawatiran Anda.</p>
            </div>

            <div id="faq" class="max-w-3xl mx-auto flex flex-col gap-3">
                @php
                    $faqs = [
                        ['q' => 'Apa bedanya Paket Landing sama Paket CMS?', 'a' => 'Paket Landing cocok kalau Anda cukup tampil online dengan satu halaman informasi — seperti profil atau jadwal kajian. Kami yang urus semuanya, Anda tinggal chat kalau mau ganti konten. Paket CMS cocok kalau Anda ingin bisa login dan mengedit sendiri website kapan saja — cocok untuk UMKM yang punya banyak produk atau organisasi yang sering update berita.'],
                        ['q' => 'Apakah domain sudah termasuk dalam paket?', 'a' => 'Ya! Setiap paket sudah termasuk domain .my.id GRATIS selama 1 tahun. Jika Anda ingin menggunakan domain lain seperti .com, .id, .net, atau lainnya, ada biaya tambahan sesuai jenis domain yang dipilih. Tim kami siap bantu konsultasi memilih domain terbaik untuk Anda.'],
                        ['q' => 'Apakah ada biaya tersembunyi?', 'a' => 'Tidak ada. Harga yang tertera sudah termasuk hosting, SSL, maintenance, dan domain .my.id gratis. Satu-satunya biaya tambahan hanya jika Anda memilih domain selain .my.id (seperti .com, .id, dll), dan itu pun kami infokan transparan dari awal.'],
                        ['q' => 'Berapa lama website saya jadi?', 'a' => 'Untuk Paket Landing biasanya 1-3 hari, sedangkan Paket CMS sekitar 3-7 hari kerja setelah konten kami terima secara lengkap.'],
                        ['q' => 'Apakah website saya bisa diupdate sendiri?', 'a' => 'Tentu! Jika Anda memilih Paket CMS, kami membangun website menggunakan WordPress yang user-friendly. Kami juga akan memberikan training singkat cara mengelola konten website Anda. Untuk Paket Landing, kami yang bantu updatekan kontennya.'],
                        ['q' => 'Bagaimana dengan maintenance setelah website selesai?', 'a' => 'Layanan maintenance sudah termasuk dalam biaya tahunan Anda. Kami memastikan website tetap aman, cepat, dan selalu online.'],
                        ['q' => 'Apa yang terjadi setelah 1 tahun?', 'a' => 'Anda cukup membayar biaya perpanjangan tahunan sesuai paket untuk melanjutkan layanan hosting, SSL, dan maintenance. Kami akan mengingatkan Anda 1 bulan sebelumnya.'],
                    ];
                @endphp
                @foreach ($faqs as $faq)
                    <div class="faq-item bg-white border border-[#e0ebe7] rounded-xl overflow-hidden">
                        <button type="button" class="faq-question w-full flex items-center justify-between gap-4 text-left px-6 py-5 font-semibold">
                            {{ $faq['q'] }}
                            <svg class="faq-icon size-4 shrink-0 text-zinc-400 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="faq-answer hidden px-6 pb-5 text-sm text-zinc-500 leading-relaxed bg-[#f4f8f6]">
                            {{ $faq['a'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== FINAL CTA ===== --}}
    <section class="py-20 bg-white text-center">
        <div class="max-w-[1100px] mx-auto px-6">
            <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Masih Ragu? Konsultasi GRATIS Dulu!</h2>
            <p class="text-zinc-500 max-w-xl mx-auto mb-12">Chat dengan tim kami sekarang. Tidak ada biaya, tidak ada kewajiban. Kami bantu analisa kebutuhan website bisnis atau komunitas Anda.</p>

            <div class="bg-[#f4f8f6] rounded-2xl p-10 sm:p-12 max-w-2xl mx-auto text-left">
                <h4 class="mb-6 text-brand-dark font-bold">Yang akan Anda dapatkan dari konsultasi gratis:</h4>
                <ul class="flex flex-col gap-4 mb-10 text-sm">
                    <li class="flex gap-3 items-center">✅ Analisa kebutuhan website yang tepat (Landing vs CMS)</li>
                    <li class="flex gap-3 items-center">✅ Rekomendasi nama domain yang bagus &amp; tersedia</li>
                    <li class="flex gap-3 items-center">✅ Estimasi harga transparan tanpa biaya tersembunyi</li>
                    <li class="flex gap-3 items-center">✅ Tips strategi konten agar website ramai pengunjung</li>
                </ul>
                <a href="https://wa.me/6285188158542?text=Halo%20Barizaloka%2C%20saya%20mau%20konsultasi%20gratis%20untuk%20website" target="_blank" rel="noopener" class="block text-center bg-brand-dark text-white rounded-xl px-7 py-3.5 text-sm font-bold hover:bg-brand-darker transition-colors">💬 Mulai Konsultasi WhatsApp</a>
            </div>

            <div class="mt-16">
                <div class="font-brand-serif text-2xl font-bold text-brand-dark" style="font-family: 'Playfair Display', Georgia, serif;">Barizaloka</div>
                <p class="text-sm text-zinc-500 mt-1">Email: barizaloka@gmail.com • Dibuat dengan ❤️ di Rembang</p>
            </div>
        </div>
    </section>

    @push('scripts')
    <script>
        document.querySelectorAll('.faq-item').forEach((item) => {
            const question = item.querySelector('.faq-question');
            const answer = item.querySelector('.faq-answer');
            const icon = item.querySelector('.faq-icon');
            question.addEventListener('click', () => {
                const isOpen = !answer.classList.contains('hidden');
                document.querySelectorAll('.faq-answer').forEach((a) => a.classList.add('hidden'));
                document.querySelectorAll('.faq-icon').forEach((i) => i.classList.remove('rotate-180'));
                if (!isOpen) {
                    answer.classList.remove('hidden');
                    icon.classList.add('rotate-180');
                }
            });
        });
    </script>
    @endpush

</x-layouts.base>
