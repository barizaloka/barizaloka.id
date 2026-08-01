<x-layouts.base
    title="Harga Jasa Pembuatan Website — Barizaloka"
    description="Harga jasa pembuatan website Barizaloka mulai Rp 350.000/tahun, sudah termasuk domain, hosting, SSL, dan maintenance. Transparan tanpa biaya tersembunyi."
>

    <x-slot:head>
        <script type="application/ld+json">
            {!! json_encode([
                '@@context' => 'https://schema.org',
                '@type' => 'Product',
                'name' => 'Jasa Pembuatan Website Barizaloka',
                'description' => 'Jasa pembuatan website untuk pesantren, desa, UMKM, dan komunitas.',
                'brand' => ['@type' => 'Organization', 'name' => 'Barizaloka'],
                'offers' => [
                    [
                        '@type' => 'Offer',
                        'name' => 'Paket Landing',
                        'price' => '350000',
                        'priceCurrency' => 'IDR',
                        'priceValidUntil' => now()->addYear()->toDateString(),
                        'url' => route('harga'),
                    ],
                    [
                        '@type' => 'Offer',
                        'name' => 'Paket CMS',
                        'price' => '600000',
                        'priceCurrency' => 'IDR',
                        'priceValidUntil' => now()->addYear()->toDateString(),
                        'url' => route('harga'),
                    ],
                ],
            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
        </script>
    </x-slot:head>

    {{-- ===== HERO ===== --}}
    <section class="relative text-center py-24 overflow-hidden bg-brand-darker">
        <div class="absolute inset-0" style="background: radial-gradient(ellipse 80% 70% at 50% 60%, rgba(29,158,117,.3) 0%, transparent 70%);"></div>
        <div class="relative z-10 max-w-xl mx-auto px-6">
            <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3">💰 Harga Transparan</span>
            <h1 class="font-brand-serif text-[clamp(2rem,5vw,3rem)] font-extrabold text-white leading-tight my-3" style="font-family: 'Playfair Display', Georgia, serif;">Harga Jasa Pembuatan<br>Website Barizaloka</h1>
            <p class="text-white/72 leading-relaxed">Dua pilihan paket terbaik, tanpa biaya tersembunyi. Sudah termasuk domain, hosting, SSL, dan maintenance.</p>
        </div>
    </section>

    {{-- ===== PRICING ===== --}}
    <section class="py-20 bg-[#f4f8f6]">
        <div class="max-w-[1100px] mx-auto px-6">
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

            <div class="text-center mt-12">
                <a href="https://wa.me/6285188158542?text=Halo%20Barizaloka%2C%20saya%20mau%20konsultasi%20harga%20website" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 bg-brand-dark text-white rounded-xl px-7 py-3.5 text-sm font-bold hover:-translate-y-0.5 hover:shadow-xl transition-all">💬 Konsultasi Harga Sekarang</a>
            </div>
        </div>
    </section>

</x-layouts.base>
