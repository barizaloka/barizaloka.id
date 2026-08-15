<x-layouts.base
    title="Jasa Pembuatan Website Masjid — Barizaloka"
    description="Jasa pembuatan website masjid mulai Rp 350.000/tahun. Tampilkan jadwal sholat, kajian rutin, dan laporan kas & infaq secara transparan untuk jamaah."
>

    <x-slot:head>
        @php
            $faqs = [
                ['q' => 'Apakah laporan kas masjid bisa diupdate rutin oleh takmir?', 'a' => 'Bisa. Dengan Paket CMS, takmir bisa login sendiri untuk mengupload laporan kas bulanan tanpa bantuan developer.'],
                ['q' => 'Apakah website bisa menampilkan jadwal sholat otomatis?', 'a' => 'Bisa, kami bantu integrasikan widget jadwal sholat sesuai lokasi masjid Anda.'],
                ['q' => 'Bagaimana jika pengurus masjid gaptek teknologi?', 'a' => 'Tenang, kami berikan training singkat dan panduan sederhana, serta pendampingan via WhatsApp kapan pun dibutuhkan.'],
            ];
        @endphp
        <script type="application/ld+json">
            {!! json_encode([
                '@@context' => 'https://schema.org',
                '@type' => 'FAQPage',
                'mainEntity' => collect($faqs)->map(fn ($faq) => [
                    '@type' => 'Question',
                    'name' => $faq['q'],
                    'acceptedAnswer' => ['@type' => 'Answer', 'text' => $faq['a']],
                ])->values(),
            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
        </script>
        <script type="application/ld+json">
            {!! json_encode([
                '@@context' => 'https://schema.org',
                '@type' => 'BreadcrumbList',
                'itemListElement' => [
                    ['@type' => 'ListItem', 'position' => 1, 'name' => 'Beranda', 'item' => url('/')],
                    ['@type' => 'ListItem', 'position' => 2, 'name' => 'Jasa Website', 'item' => route('jasa-website')],
                    ['@type' => 'ListItem', 'position' => 3, 'name' => 'Masjid', 'item' => route('niche.show', 'masjid')],
                ],
            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
        </script>
    </x-slot:head>

    <style>
        @keyframes heroFadeIn { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
        .hero-anim { animation: heroFadeIn .9s ease both; }
    </style>

    {{-- ===== HERO ===== --}}
    <section class="relative min-h-[70vh] flex items-center overflow-hidden bg-brand-darker">
        <svg class="absolute inset-0 w-full h-full opacity-15" viewBox="0 0 900 600" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="islamicPatMasjid" x="0" y="0" width="80" height="80" patternUnits="userSpaceOnUse">
                    <g fill="none" stroke="#fff" stroke-width="0.8">
                        <polygon points="40,10 44.5,25 59,25 47.5,34 52,49 40,40 28,49 32.5,34 21,25 35.5,25"/>
                        <rect x="29" y="29" width="22" height="22" transform="rotate(45,40,40)"/>
                    </g>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#islamicPatMasjid)"/>
        </svg>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse 70% 60% at 50% 50%, rgba(29,158,117,.35) 0%, transparent 70%);"></div>

        <div class="relative z-10 max-w-3xl mx-auto px-6 py-16 text-center hero-anim">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'Jasa Website', 'url' => route('jasa-website')],
                ['label' => '🕌 Untuk Masjid, Mushola & Takmir'],
            ]" />

            <span class="inline-flex items-center gap-1.5 bg-white/12 border border-white/25 rounded-full px-4.5 py-2 text-sm text-[#c8f0e2] tracking-wide mb-6">🕌 Untuk Masjid, Mushola &amp; Takmir</span>

            <h1 class="font-brand-serif font-extrabold text-[clamp(2rem,6vw,3.6rem)] leading-[1.15] text-white mb-3" style="font-family: 'Playfair Display', Georgia, serif;">
                Website Masjid<br>
                <span style="background: linear-gradient(135deg, #5DCAA5 0%, #a8edd4 50%, #5DCAA5 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Transparan &amp; Dekat dengan Jamaah</span>
            </h1>

            <p class="text-lg text-white/78 max-w-xl mx-auto mb-8">Sampaikan jadwal sholat, kajian rutin, hingga laporan kas &amp; infaq masjid secara transparan agar jamaah semakin percaya dan terlibat.</p>

            <div class="flex flex-wrap gap-3 justify-center">
                <a href="{{ route('harga') }}" class="inline-flex items-center gap-1.5 bg-white text-brand-dark rounded-xl px-7 py-3.5 text-sm font-bold hover:-translate-y-0.5 hover:shadow-xl transition-all">💎 Lihat Paket &amp; Harga</a>
                <a href="https://wa.me/6285188158542" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 bg-transparent border border-white/50 text-white rounded-xl px-7 py-3.5 text-sm font-semibold hover:bg-white/10 transition-colors">💬 Konsultasi Gratis</a>
            </div>
        </div>
    </section>

    {{-- ===== INTRO ===== --}}
    <section class="py-16 bg-white">
        <div class="max-w-3xl mx-auto px-6 text-center">
            <p class="text-zinc-500 leading-relaxed">Transparansi keuangan dan informasi kegiatan menjadi kunci kepercayaan jamaah kepada pengurus masjid (takmir). Website resmi memudahkan takmir menyampaikan laporan kas, jadwal kajian, dan agenda hari besar Islam kepada jamaah secara terbuka.</p>
        </div>
    </section>

    {{-- ===== PAIN POINTS ===== --}}
    <section class="py-20 bg-[#f4f8f6]">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center max-w-lg mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3.5">⚠️ Kenali Masalahnya</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Tantangan yang Sering Dihadapi Masjid</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white border border-[#e0ebe7] rounded-2xl px-8 py-10 text-center hover:shadow-md hover:-translate-y-1 transition-all">
                    <div class="text-4xl mb-4">💰</div>
                    <h4 class="font-brand-serif text-lg font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Laporan Kas Diragukan Jamaah</h4>
                    <p class="text-sm text-zinc-500 leading-relaxed">Tanpa laporan yang mudah diakses, jamaah sering ragu terhadap transparansi kas &amp; infaq masjid.</p>
                </div>
                <div class="bg-white border border-[#e0ebe7] rounded-2xl px-8 py-10 text-center hover:shadow-md hover:-translate-y-1 transition-all">
                    <div class="text-4xl mb-4">📢</div>
                    <h4 class="font-brand-serif text-lg font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Info Kajian Tidak Sampai Merata</h4>
                    <p class="text-sm text-zinc-500 leading-relaxed">Pengumuman kajian atau kegiatan hari besar hanya tersebar lewat pengeras suara dan grup WhatsApp terbatas.</p>
                </div>
                <div class="bg-white border border-[#e0ebe7] rounded-2xl px-8 py-10 text-center hover:shadow-md hover:-translate-y-1 transition-all">
                    <div class="text-4xl mb-4">🤲</div>
                    <h4 class="font-brand-serif text-lg font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Sulit Menerima Infaq Online</h4>
                    <p class="text-sm text-zinc-500 leading-relaxed">Jamaah yang berada di luar kota kesulitan menyalurkan infaq karena tidak ada kanal digital resmi.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== BENEFITS ===== --}}
    <section class="py-20 bg-white">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center max-w-lg mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3.5">✨ Yang Anda Dapatkan</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Fitur Website Masjid dari Barizaloka</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex gap-4 bg-[#f4f8f6] border border-[#e0ebe7] rounded-2xl p-8">
                    <span class="text-2xl shrink-0">🕋</span>
                    <div>
                        <strong class="block mb-1.5">Jadwal Sholat &amp; Kajian</strong>
                        <p class="text-sm text-zinc-500 leading-relaxed">Tampilkan jadwal sholat harian dan jadwal kajian rutin yang mudah dilihat jamaah maupun musafir.</p>
                    </div>
                </div>
                <div class="flex gap-4 bg-[#f4f8f6] border border-[#e0ebe7] rounded-2xl p-8">
                    <span class="text-2xl shrink-0">📊</span>
                    <div>
                        <strong class="block mb-1.5">Laporan Kas &amp; Infaq Transparan</strong>
                        <p class="text-sm text-zinc-500 leading-relaxed">Publikasikan laporan pemasukan-pengeluaran kas masjid secara berkala untuk menjaga kepercayaan jamaah.</p>
                    </div>
                </div>
                <div class="flex gap-4 bg-[#f4f8f6] border border-[#e0ebe7] rounded-2xl p-8">
                    <span class="text-2xl shrink-0">💳</span>
                    <div>
                        <strong class="block mb-1.5">Kanal Infaq Digital</strong>
                        <p class="text-sm text-zinc-500 leading-relaxed">Cantumkan nomor rekening atau QRIS masjid agar jamaah dari mana saja bisa berinfaq dengan mudah.</p>
                    </div>
                </div>
                <div class="flex gap-4 bg-[#f4f8f6] border border-[#e0ebe7] rounded-2xl p-8">
                    <span class="text-2xl shrink-0">📰</span>
                    <div>
                        <strong class="block mb-1.5">Berita &amp; Agenda Masjid</strong>
                        <p class="text-sm text-zinc-500 leading-relaxed">Bagikan berita kegiatan, agenda hari besar Islam, dan pengumuman penting kepada seluruh jamaah.</p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('harga') }}" class="inline-flex items-center gap-1.5 bg-brand-dark text-white rounded-xl px-7 py-3.5 text-sm font-bold hover:-translate-y-0.5 hover:shadow-xl transition-all">Lihat Paket &amp; Harga</a>
            </div>
        </div>
    </section>

    {{-- ===== FAQ ===== --}}
    <section class="py-20 bg-[#f4f8f6]">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center max-w-lg mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3.5">❓ FAQ</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Pertanyaan Seputar Website Masjid</h2>
            </div>

            <div class="faq-list max-w-3xl mx-auto flex flex-col gap-3">
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

    {{-- ===== RELATED NICHES ===== --}}
    <section class="py-16 bg-white">
        <div class="max-w-[1100px] mx-auto px-6">
            <h3 class="font-brand-serif text-xl font-bold mb-6 text-center" style="font-family: 'Playfair Display', Georgia, serif;">Layanan Website Lainnya</h3>
            <div class="flex flex-wrap justify-center gap-3">
                <a href="{{ route('niche.show', 'pesantren') }}" class="inline-flex items-center gap-2 bg-[#f4f8f6] border border-[#e0ebe7] rounded-xl px-5 py-3 text-sm font-semibold text-brand-dark hover:bg-brand-light transition-colors">Website Pesantren</a>
                <a href="{{ route('niche.show', 'desa') }}" class="inline-flex items-center gap-2 bg-[#f4f8f6] border border-[#e0ebe7] rounded-xl px-5 py-3 text-sm font-semibold text-brand-dark hover:bg-brand-light transition-colors">Website Desa</a>
                <a href="{{ route('niche.show', 'umkm') }}" class="inline-flex items-center gap-2 bg-[#f4f8f6] border border-[#e0ebe7] rounded-xl px-5 py-3 text-sm font-semibold text-brand-dark hover:bg-brand-light transition-colors">Website UMKM</a>
            </div>
        </div>
    </section>

    {{-- ===== FINAL CTA ===== --}}
    <section class="py-20 bg-[#f4f8f6] text-center">
        <div class="max-w-[1100px] mx-auto px-6">
            <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Siap Buat Website Masjid Anda?</h2>
            <p class="text-zinc-500 max-w-xl mx-auto mb-10">Konsultasi gratis via WhatsApp, tanpa biaya, tanpa kewajiban.</p>
            <a href="https://wa.me/6285188158542?text=Halo%20Barizaloka%2C%20saya%20ingin%20konsultasi%20website%20Masjid" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 bg-brand-dark text-white rounded-xl px-7 py-3.5 text-sm font-bold hover:bg-brand-darker transition-colors">💬 Mulai Konsultasi WhatsApp</a>
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
