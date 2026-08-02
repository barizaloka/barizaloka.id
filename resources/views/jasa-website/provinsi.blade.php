<x-layouts.base
    :title="$page['title']"
    :description="$page['meta_description']"
>

    <style>
        @keyframes heroFadeIn { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
        .hero-anim { animation: heroFadeIn .9s ease both; }
    </style>

    {{-- ===== HERO ===== --}}
    <section class="relative min-h-[60vh] flex items-center overflow-hidden bg-brand-darker">
        <svg class="absolute inset-0 w-full h-full opacity-15" viewBox="0 0 900 600" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="islamicPatProvinsi" x="0" y="0" width="80" height="80" patternUnits="userSpaceOnUse">
                    <g fill="none" stroke="#fff" stroke-width="0.8">
                        <polygon points="40,10 44.5,25 59,25 47.5,34 52,49 40,40 28,49 32.5,34 21,25 35.5,25"/>
                        <rect x="29" y="29" width="22" height="22" transform="rotate(45,40,40)"/>
                    </g>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#islamicPatProvinsi)"/>
        </svg>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse 70% 60% at 50% 50%, rgba(29,158,117,.35) 0%, transparent 70%);"></div>

        <div class="relative z-10 max-w-3xl mx-auto px-6 py-16 text-center hero-anim">
            <span class="inline-flex items-center gap-1.5 bg-white/12 border border-white/25 rounded-full px-4.5 py-2 text-sm text-[#c8f0e2] tracking-wide mb-6">{{ $page['hero_badge'] }}</span>

            <h1 class="font-brand-serif font-extrabold text-[clamp(2rem,6vw,3.6rem)] leading-[1.15] text-white mb-3" style="font-family: 'Playfair Display', Georgia, serif;">
                Potensi Digital<br>
                <span style="background: linear-gradient(135deg, #5DCAA5 0%, #a8edd4 50%, #5DCAA5 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">{{ $page['name'] }}</span>
            </h1>

            <p class="text-lg text-white/78 max-w-xl mx-auto mb-8">{{ $page['hero_subtitle'] }}</p>
            <p class="text-sm text-white/50 mb-8">📍 Ibu kota: {{ $page['ibukota'] }} &middot; {{ count($page['kabupaten_kota']) }} kabupaten/kota</p>

            <div class="flex flex-wrap gap-3 justify-center">
                <a href="{{ route('harga') }}" class="inline-flex items-center gap-1.5 bg-white text-brand-dark rounded-xl px-7 py-3.5 text-sm font-bold hover:-translate-y-0.5 hover:shadow-xl transition-all">💎 Lihat Paket &amp; Harga</a>
                <a href="https://wa.me/6285188158542" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 bg-transparent border border-white/50 text-white rounded-xl px-7 py-3.5 text-sm font-semibold hover:bg-white/10 transition-colors">💬 Konsultasi Gratis</a>
            </div>
        </div>
    </section>

    {{-- ===== INTRO ===== --}}
    <section class="py-16 bg-white">
        <div class="max-w-3xl mx-auto px-6 text-center">
            <p class="text-zinc-500 leading-relaxed">{{ $page['intro'] }}</p>
        </div>
    </section>

    {{-- ===== KABUPATEN/KOTA ===== --}}
    <section class="py-20 bg-[#f4f8f6]">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center max-w-lg mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3.5">🏘️ Wilayah Administratif</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Kabupaten &amp; Kota di {{ $page['name'] }}</h2>
                <p class="text-zinc-500">{{ $page['name'] }} terdiri dari {{ count($page['kabupaten_kota']) }} kabupaten/kota yang masing-masing punya potensi berbeda.</p>
            </div>

            <div class="flex flex-wrap justify-center gap-2.5 max-w-4xl mx-auto">
                @foreach ($page['kabupaten_kota'] as $kabupaten)
                <span class="inline-flex items-center bg-white border border-[#e0ebe7] rounded-xl px-4 py-2 text-sm font-medium text-brand-dark">{{ $kabupaten }}</span>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== POTENSI ===== --}}
    <section class="py-20 bg-white">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center max-w-lg mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3.5">✨ Potensi Unggulan</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Sektor Unggulan {{ $page['name'] }}</h2>
                <p class="text-zinc-500">Potensi ini bisa berkembang lebih besar bila didukung website dan aplikasi yang tepat.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach ($page['potensi'] as $item)
                <div class="flex gap-4 bg-[#f4f8f6] border border-[#e0ebe7] rounded-2xl p-8">
                    <span class="text-2xl shrink-0">{{ $item['icon'] }}</span>
                    <div>
                        <strong class="block mb-1.5">{{ $item['title'] }}</strong>
                        <p class="text-sm text-zinc-500 leading-relaxed">{{ $item['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== KENAPA BUTUH WEBSITE/APLIKASI ===== --}}
    <section class="py-20 bg-[#f4f8f6]">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center max-w-lg mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3.5">🚀 Potensi Lebih Besar</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Kenapa Potensi {{ $page['name'] }} Butuh Website &amp; Aplikasi?</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white border border-[#e0ebe7] rounded-2xl px-8 py-10">
                    <div class="text-3xl mb-4">🌐</div>
                    <h4 class="font-brand-serif text-lg font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Promosi UMKM &amp; Produk Unggulan Lebih Luas</h4>
                    <p class="text-sm text-zinc-500 leading-relaxed">Website membantu UMKM dan produk khas {{ $page['name'] }} tampil profesional di mesin pencari, menjangkau pembeli dari luar daerah tanpa bergantung sepenuhnya pada marketplace atau media sosial.</p>
                </div>
                <div class="bg-white border border-[#e0ebe7] rounded-2xl px-8 py-10">
                    <div class="text-3xl mb-4">📈</div>
                    <h4 class="font-brand-serif text-lg font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Pariwisata &amp; Ekonomi Kreatif Lebih Dikenal</h4>
                    <p class="text-sm text-zinc-500 leading-relaxed">Destinasi wisata dan produk kreatif di {{ $page['name'] }} bisa ditemukan calon wisatawan sebelum berkunjung, lengkap dengan info lokasi, harga, dan kontak.</p>
                </div>
                <div class="bg-white border border-[#e0ebe7] rounded-2xl px-8 py-10">
                    <div class="text-3xl mb-4">🏛️</div>
                    <h4 class="font-brand-serif text-lg font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Transparansi Pemerintah Desa &amp; Daerah</h4>
                    <p class="text-sm text-zinc-500 leading-relaxed">Website resmi membantu pemerintah desa dan kabupaten di {{ $page['name'] }} menyampaikan informasi anggaran, program, dan layanan publik secara transparan kepada warga.</p>
                </div>
                <div class="bg-white border border-[#e0ebe7] rounded-2xl px-8 py-10">
                    <div class="text-3xl mb-4">🤝</div>
                    <h4 class="font-brand-serif text-lg font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Investasi &amp; Kemitraan Lebih Mudah Masuk</h4>
                    <p class="text-sm text-zinc-500 leading-relaxed">Investor dan mitra bisnis yang ingin masuk ke {{ $page['name'] }} bisa mendapatkan gambaran potensi daerah secara cepat lewat website, tanpa harus datang langsung terlebih dahulu.</p>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('harga') }}" class="inline-flex items-center gap-1.5 bg-brand-dark text-white rounded-xl px-7 py-3.5 text-sm font-bold hover:-translate-y-0.5 hover:shadow-xl transition-all">Lihat Paket &amp; Harga</a>
            </div>
        </div>
    </section>

    {{-- ===== NICHE LIST ===== --}}
    <section class="py-20 bg-white">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center max-w-lg mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3.5">🛠️ Layanan Kami</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Website untuk Berbagai Kebutuhan di {{ $page['name'] }}</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                @foreach (config('niche_pages') as $slug => $niche)
                <a href="{{ route('niche.show', $slug) }}" class="bg-[#f4f8f6] border border-[#e0ebe7] rounded-2xl px-6 py-8 text-center hover:shadow-md hover:-translate-y-1 transition-all">
                    <h4 class="font-brand-serif text-base font-bold" style="font-family: 'Playfair Display', Georgia, serif;">Website {{ $niche['label'] }}</h4>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== FAQ ===== --}}
    <section class="py-20 bg-[#f4f8f6]">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center max-w-lg mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3.5">❓ FAQ</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Pertanyaan Seputar Website di {{ $page['name'] }}</h2>
            </div>

            <div class="faq-list max-w-3xl mx-auto flex flex-col gap-3">
                <div class="faq-item bg-white border border-[#e0ebe7] rounded-xl overflow-hidden">
                    <button type="button" class="faq-question w-full flex items-center justify-between gap-4 text-left px-6 py-5 font-semibold">
                        Apakah Barizaloka melayani pembuatan website untuk daerah di {{ $page['name'] }}?
                        <svg class="faq-icon size-4 shrink-0 text-zinc-400 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-5 text-sm text-zinc-500 leading-relaxed bg-[#f4f8f6]">
                        Ya, kami melayani pembuatan website untuk pesantren, UMKM, desa, dan komunitas di seluruh kabupaten/kota di {{ $page['name'] }}, dikerjakan secara online dari mana saja.
                    </div>
                </div>
                <div class="faq-item bg-white border border-[#e0ebe7] rounded-xl overflow-hidden">
                    <button type="button" class="faq-question w-full flex items-center justify-between gap-4 text-left px-6 py-5 font-semibold">
                        Berapa lama proses pembuatan website untuk usaha atau lembaga di {{ $page['name'] }}?
                        <svg class="faq-icon size-4 shrink-0 text-zinc-400 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-5 text-sm text-zinc-500 leading-relaxed bg-[#f4f8f6]">
                        Rata-rata 3-7 hari kerja setelah data dan materi lengkap, tergantung paket yang dipilih.
                    </div>
                </div>
                <div class="faq-item bg-white border border-[#e0ebe7] rounded-xl overflow-hidden">
                    <button type="button" class="faq-question w-full flex items-center justify-between gap-4 text-left px-6 py-5 font-semibold">
                        Apakah harga sama untuk semua kabupaten/kota di {{ $page['name'] }}?
                        <svg class="faq-icon size-4 shrink-0 text-zinc-400 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-5 text-sm text-zinc-500 leading-relaxed bg-[#f4f8f6]">
                        Ya, harga paket kami sama rata mulai Rp 350.000/tahun tanpa biaya tambahan berdasarkan lokasi, karena seluruh proses dikerjakan online.
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== RELATED PROVINCES ===== --}}
    @if (count($relatedProvinces))
    <section class="py-16 bg-white">
        <div class="max-w-[1100px] mx-auto px-6">
            <h3 class="font-brand-serif text-xl font-bold mb-6 text-center" style="font-family: 'Playfair Display', Georgia, serif;">Provinsi Lain di Sekitar {{ $page['name'] }}</h3>
            <div class="flex flex-wrap justify-center gap-3">
                @foreach ($relatedProvinces as $related)
                <a href="{{ route('provinsi.show', $related['slug']) }}" class="inline-flex items-center gap-2 bg-[#f4f8f6] border border-[#e0ebe7] rounded-xl px-5 py-3 text-sm font-semibold text-brand-dark hover:bg-brand-light transition-colors">Potensi {{ $related['name'] }}</a>
                @endforeach
            </div>
            <div class="text-center mt-8">
                <a href="{{ route('provinsi.index') }}" class="text-sm font-semibold text-brand-primary hover:underline">Lihat Semua 34 Provinsi &rarr;</a>
            </div>
        </div>
    </section>
    @endif

    {{-- ===== FINAL CTA ===== --}}
    <section class="py-20 bg-[#f4f8f6] text-center">
        <div class="max-w-[1100px] mx-auto px-6">
            <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Siap Wujudkan Potensi {{ $page['name'] }} Secara Online?</h2>
            <p class="text-zinc-500 max-w-xl mx-auto mb-10">Konsultasi gratis via WhatsApp, tanpa biaya, tanpa kewajiban.</p>
            <a href="https://wa.me/6285188158542?text=Halo%20Barizaloka%2C%20saya%20dari%20{{ urlencode($page['name']) }}%20ingin%20konsultasi%20website" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 bg-brand-dark text-white rounded-xl px-7 py-3.5 text-sm font-bold hover:bg-brand-darker transition-colors">💬 Mulai Konsultasi WhatsApp</a>
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
