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
                'description' => 'Jasa pembuatan website untuk pesantren, desa, dan UMKM.',
                'brand' => ['@type' => 'Organization', 'name' => 'Barizaloka'],
                'offers' => $packages->map(fn ($package) => [
                    '@type' => 'Offer',
                    'name' => $package->name,
                    'price' => (string) $package->price,
                    'priceCurrency' => 'IDR',
                    'priceValidUntil' => now()->addYear()->toDateString(),
                    'url' => route('harga'),
                ])->all(),
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
    <section class="py-16 bg-[#f4f8f6]">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 items-stretch">
                @foreach ($packages as $package)
                    <div class="relative flex flex-col bg-white rounded-2xl p-6 sm:p-7 {{ $package->is_featured ? 'border-2 border-brand-primary shadow-lg ring-4 ring-brand-primary/10' : 'border border-[#e0ebe7] shadow-xs' }} hover:shadow-md transition-all duration-200">
                        @if ($package->badge_label)
                            <div class="mb-3">
                                <span class="inline-block bg-brand-primary text-white text-[.65rem] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider">{{ $package->badge_label }}</span>
                            </div>
                        @endif
                        <h3 class="text-lg font-bold text-zinc-900 mb-1.5 leading-snug">{{ $package->name }}</h3>
                        @if ($package->tagline)
                            <p class="text-xs text-zinc-500 mb-4 leading-relaxed min-h-[2.5rem]">{{ $package->tagline }}</p>
                        @endif
                        <div class="mb-5 pb-4 border-b border-[#e0ebe7]">
                            <div class="font-brand-serif text-3xl font-extrabold text-brand-primary" style="font-family: 'Playfair Display', Georgia, serif;">{{ $package->price_label }}</div>
                            <div class="text-xs text-zinc-500 mt-0.5">{{ $package->price_period }}</div>
                        </div>
                        <ul class="flex-1 flex flex-col gap-2.5 mb-6 text-xs text-[#1a2420]">
                            @foreach ($package->features as $feature)
                                <li @class([
                                    'flex items-start gap-2 leading-snug',
                                    'pl-4 text-zinc-500 text-[0.75rem]' => $feature['indent'] ?? false,
                                    'font-medium' => !($feature['indent'] ?? false) && (str_contains($feature['text'], '<strong>')),
                                ])>
                                    <span class="shrink-0 text-brand-primary font-bold">{{ ($feature['indent'] ?? false) ? '•' : '✓' }}</span>
                                    <span>{!! $feature['text'] !!}</span>
                                </li>
                            @endforeach
                        </ul>
                        <a href="https://wa.me/6285188158542?text={{ urlencode($package->whatsapp_message ?? '') }}" target="_blank" rel="noopener" class="mt-auto text-center rounded-xl px-5 py-3 text-xs sm:text-sm font-bold transition-all duration-200 {{ $package->is_featured ? 'bg-brand-gold text-white hover:opacity-90 shadow-xs' : 'bg-white text-brand-dark border border-brand-dark/40 hover:bg-brand-light hover:border-brand-primary' }}">{{ $package->cta_label ?? 'Pilih '.$package->name }}</a>
                    </div>
                @endforeach
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
