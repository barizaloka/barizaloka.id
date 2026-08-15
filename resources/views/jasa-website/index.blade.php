<x-layouts.base
    title="Jasa Pembuatan Website — Barizaloka"
    description="Jasa pembuatan website untuk pesantren, masjid, desa, dan UMKM mulai Rp 350.000/tahun. Cepat jadi, desain modern, sudah termasuk domain, hosting, dan SSL."
>

    <x-slot:head>
        <script type="application/ld+json">
            {!! json_encode([
                '@@context' => 'https://schema.org',
                '@type' => 'Product',
                'name' => 'Jasa Pembuatan Website Barizaloka',
                'description' => 'Jasa pembuatan website untuk pesantren, masjid, desa, dan UMKM.',
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
                                'minValue' => 3,
                                'maxValue' => 14,
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

    {{-- ===== HERO ===== --}}
    <section class="relative min-h-[60vh] flex items-center overflow-hidden bg-brand-darker">
        <div class="absolute inset-0" style="background: radial-gradient(ellipse 70% 60% at 50% 50%, rgba(29,158,117,.35) 0%, transparent 70%);"></div>

        <div class="relative z-10 max-w-3xl mx-auto px-6 py-16 text-center">
            <span class="inline-flex items-center gap-1.5 bg-white/12 border border-white/25 rounded-full px-4.5 py-2 text-sm text-[#c8f0e2] tracking-wide mb-6">🛠️ Jasa Pembuatan Website</span>

            <h1 class="font-brand-serif font-extrabold text-[clamp(2rem,6vw,3.6rem)] leading-[1.15] text-white mb-3" style="font-family: 'Playfair Display', Georgia, serif;">
                Website Profesional<br>
                <span style="background: linear-gradient(135deg, #5DCAA5 0%, #a8edd4 50%, #5DCAA5 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Mulai Rp 350.000 / Tahun</span>
            </h1>

            <p class="text-lg text-white/78 max-w-xl mx-auto mb-8">Untuk pesantren, masjid, desa, dan UMKM. Cepat jadi, desain modern, sudah termasuk domain, hosting, dan SSL.</p>

            <div class="flex flex-wrap gap-3 justify-center">
                <a href="#paket" class="inline-flex items-center gap-1.5 bg-white text-brand-dark rounded-xl px-7 py-3.5 text-sm font-bold hover:-translate-y-0.5 hover:shadow-xl transition-all">💎 Lihat Paket &amp; Harga</a>
                <a href="https://wa.me/6285188158542?text=Halo%20Barizaloka%2C%20saya%20mau%20konsultasi%20website" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 bg-transparent border border-white/50 text-white rounded-xl px-7 py-3.5 text-sm font-semibold hover:bg-white/10 transition-colors">💬 Konsultasi Gratis</a>
            </div>
        </div>
    </section>

    {{-- ===== BENEFITS ===== --}}
    <section class="py-20 bg-white">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center max-w-lg mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3.5">✨ Yang Anda Dapatkan</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Fitur Lengkap dalam Setiap Website</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex gap-4 bg-[#f4f8f6] border border-[#e0ebe7] rounded-2xl p-8">
                    <span class="text-2xl shrink-0">⚡</span>
                    <div>
                        <strong class="block mb-1.5">Selesai dalam 1–7 Hari Kerja</strong>
                        <p class="text-sm text-zinc-500 leading-relaxed">Proses cepat tanpa mengorbankan kualitas hasil akhir.</p>
                    </div>
                </div>
                <div class="flex gap-4 bg-[#f4f8f6] border border-[#e0ebe7] rounded-2xl p-8">
                    <span class="text-2xl shrink-0">📱</span>
                    <div>
                        <strong class="block mb-1.5">Responsif di HP &amp; Desktop</strong>
                        <p class="text-sm text-zinc-500 leading-relaxed">Tampilan tetap rapi dan nyaman diakses dari perangkat apa pun.</p>
                    </div>
                </div>
                <div class="flex gap-4 bg-[#f4f8f6] border border-[#e0ebe7] rounded-2xl p-8">
                    <span class="text-2xl shrink-0">🔒</span>
                    <div>
                        <strong class="block mb-1.5">Domain, Hosting &amp; SSL Termasuk</strong>
                        <p class="text-sm text-zinc-500 leading-relaxed">Tidak perlu urus komponen teknis terpisah, semua sudah kami siapkan.</p>
                    </div>
                </div>
                <div class="flex gap-4 bg-[#f4f8f6] border border-[#e0ebe7] rounded-2xl p-8">
                    <span class="text-2xl shrink-0">💬</span>
                    <div>
                        <strong class="block mb-1.5">Konsultasi Gratis via WhatsApp</strong>
                        <p class="text-sm text-zinc-500 leading-relaxed">Diskusi kebutuhan dan progres pengerjaan langsung dengan tim kami.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== PRICING ===== --}}
    <section id="paket" class="py-20 bg-[#f4f8f6]">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center max-w-lg mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3.5">💰 Harga Transparan</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Pilih Paket Sesuai Kebutuhan</h2>
                <p class="text-zinc-500">Tanpa biaya tersembunyi, sudah termasuk domain, hosting, SSL, dan maintenance.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch">
                @foreach ($packages as $package)
                    <div class="relative flex flex-col bg-white rounded-2xl p-10 {{ $package->is_featured ? 'border-2 border-brand-primary shadow-lg' : 'border border-[#e0ebe7]' }}">
                        @if ($package->badge_label)
                            <span class="absolute top-5 right-5 bg-brand-primary text-white text-[.7rem] font-bold px-3 py-1.5 rounded-full uppercase tracking-wide">{{ $package->badge_label }}</span>
                        @endif
                        <div class="text-xl font-bold mb-2">{{ $package->name }}</div>
                        @if ($package->tagline)
                            <p class="text-sm text-zinc-500 mb-8">{{ $package->tagline }}</p>
                        @endif
                        <div class="mb-8">
                            <div class="font-brand-serif text-4xl font-extrabold text-brand-primary" style="font-family: 'Playfair Display', Georgia, serif;">{{ $package->price_label }}</div>
                            <div class="text-sm text-zinc-500 mt-1">{{ $package->price_period }}</div>
                        </div>
                        <ul class="flex-1 flex flex-col gap-3 border-t border-[#e0ebe7] pt-8 mb-10 text-sm text-[#1a2420]">
                            @foreach ($package->features as $feature)
                                <li @class(['pl-6 text-xs' => $feature['indent'] ?? false])>{{ ($feature['indent'] ?? false) ? '•' : '✅' }} {!! $feature['text'] !!}</li>
                            @endforeach
                        </ul>
                        <a href="https://wa.me/6285188158542?text={{ urlencode($package->whatsapp_message ?? '') }}" target="_blank" rel="noopener" class="text-center rounded-xl px-7 py-3.5 text-sm font-bold transition-colors {{ $package->is_featured ? 'bg-brand-gold text-white hover:opacity-90' : 'bg-white text-brand-dark border border-brand-dark hover:bg-brand-light' }}">{{ $package->cta_label ?? 'Pilih '.$package->name }}</a>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('harga') }}" class="inline-flex items-center gap-1.5 bg-brand-dark text-white rounded-xl px-7 py-3.5 text-sm font-bold hover:-translate-y-0.5 hover:shadow-xl transition-all">Bandingkan Paket Lengkap →</a>
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
                    <p class="text-sm text-zinc-500 leading-relaxed">Chat via WhatsApp, diskusi konsep &amp; kebutuhan.</p>
                </div>
                <div class="text-center">
                    <div class="size-12 mx-auto mb-5 rounded-full bg-brand-light text-brand-primary border-2 border-brand-primary flex items-center justify-center text-xl font-extrabold">2</div>
                    <h4 class="font-brand-serif text-lg font-semibold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">DP &amp; Kirim Konten</h4>
                    <p class="text-sm text-zinc-500 leading-relaxed">Transfer DP 50%, kirim konten (teks, foto, logo).</p>
                </div>
                <div class="text-center">
                    <div class="size-12 mx-auto mb-5 rounded-full bg-brand-light text-brand-primary border-2 border-brand-primary flex items-center justify-center text-xl font-extrabold">3</div>
                    <h4 class="font-brand-serif text-lg font-semibold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Design &amp; Development</h4>
                    <p class="text-sm text-zinc-500 leading-relaxed">Tim kami kerjakan website, preview dikirim untuk approval.</p>
                </div>
                <div class="text-center">
                    <div class="size-12 mx-auto mb-5 rounded-full bg-brand-light text-brand-primary border-2 border-brand-primary flex items-center justify-center text-xl font-extrabold">4</div>
                    <h4 class="font-brand-serif text-lg font-semibold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Revisi &amp; Testing</h4>
                    <p class="text-sm text-zinc-500 leading-relaxed">Revisi gratis sampai puas, testing di semua device.</p>
                </div>
                <div class="text-center">
                    <div class="size-12 mx-auto mb-5 rounded-full bg-brand-light text-brand-primary border-2 border-brand-primary flex items-center justify-center text-xl font-extrabold">5</div>
                    <h4 class="font-brand-serif text-lg font-semibold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Launch &amp; Training</h4>
                    <p class="text-sm text-zinc-500 leading-relaxed">Pelunasan, website live, dan training cara kelola website.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== LAYANAN PER NICHE & WILAYAH ===== --}}
    <section class="py-20 bg-white">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="text-center max-w-lg mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3.5">📍 Cakupan Layanan</span>
                <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Website untuk Berbagai Kebutuhan &amp; Wilayah</h2>
                <p class="text-zinc-500">Kami sudah terbiasa membuat website untuk kalangan berikut, dan melayani konsultasi tatap muka di beberapa wilayah.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div>
                    <h3 class="text-xs font-bold uppercase tracking-widest text-zinc-500 mb-4">Berdasarkan Kebutuhan</h3>
                    <div class="flex flex-wrap gap-2.5">
                        @foreach (config('niche_pages') as $slug => $page)
                            <a href="{{ route('niche.show', $slug) }}" class="inline-flex items-center gap-2 bg-[#f4f8f6] border border-[#e0ebe7] rounded-xl px-5 py-3 text-sm font-semibold text-brand-dark hover:bg-brand-light transition-colors">Website {{ $page['label'] }}</a>
                        @endforeach
                    </div>
                </div>

                <div>
                    <h3 class="text-xs font-bold uppercase tracking-widest text-zinc-500 mb-4">Berdasarkan Wilayah</h3>
                    <div class="flex flex-wrap gap-2.5">
                        @foreach (config('location_pages') as $slug => $location)
                            <a href="{{ route('lokasi.show', $slug) }}" class="inline-flex items-center gap-2 bg-[#f4f8f6] border border-[#e0ebe7] rounded-xl px-5 py-3 text-sm font-semibold text-brand-dark hover:bg-brand-light transition-colors">{{ $location['name'] }}</a>
                        @endforeach
                    </div>
                    <a href="{{ route('provinsi.index') }}" class="inline-block mt-4 text-sm font-semibold text-brand-primary hover:underline">Lihat cakupan kami di seluruh provinsi →</a>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== FINAL CTA ===== --}}
    <section class="py-20 bg-[#f4f8f6] text-center">
        <div class="max-w-[1100px] mx-auto px-6">
            <h2 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif;">Siap Punya Website Sendiri?</h2>
            <p class="text-zinc-500 max-w-xl mx-auto mb-10">Konsultasi gratis via WhatsApp, tanpa biaya, tanpa kewajiban.</p>
            <a href="https://wa.me/6285188158542?text=Halo%20Barizaloka%2C%20saya%20mau%20konsultasi%20website" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 bg-brand-dark text-white rounded-xl px-7 py-3.5 text-sm font-bold hover:bg-brand-darker transition-colors">💬 Mulai Konsultasi WhatsApp</a>
        </div>
    </section>

</x-layouts.base>
