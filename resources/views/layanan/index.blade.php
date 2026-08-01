<x-layouts.base
    title="Layanan Kami — Jasa Pembuatan Website Barizaloka"
    description="Jasa pembuatan website untuk pesantren, desa, UMKM, dan komunitas. Cepat jadi, terjangkau, dan mudah dikelola sendiri."
>

    {{-- ===== HERO ===== --}}
    <section class="relative text-center py-24 overflow-hidden bg-brand-darker">
        <div class="absolute inset-0" style="background: radial-gradient(ellipse 80% 70% at 50% 60%, rgba(29,158,117,.3) 0%, transparent 70%);"></div>
        <div class="relative z-10 max-w-xl mx-auto px-6">
            <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3">Layanan Kami</span>
            <h1 class="font-brand-serif text-[clamp(2rem,5vw,3rem)] font-extrabold text-white leading-tight my-3" style="font-family: 'Playfair Display', Georgia, serif;">Solusi Website untuk<br>Setiap Kebutuhan</h1>
            <p class="text-white/72 leading-relaxed">Pilih layanan yang paling sesuai dengan kebutuhan pesantren, desa, UMKM, atau komunitas Anda.</p>
        </div>
    </section>

    <section class="py-20 bg-[#f4f8f6]">
        <div class="max-w-[1100px] mx-auto px-6">
            @if ($services->isEmpty())
                <div class="text-center py-16 text-zinc-500">Belum ada layanan yang tersedia saat ini.</div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @foreach ($services as $service)
                        <a href="{{ route('layanan.show', $service) }}" class="group flex flex-col bg-white border border-[#e0ebe7] rounded-2xl p-8 hover:shadow-md hover:-translate-y-1 transition-all">
                            <div class="text-4xl mb-4">{{ $service->icon }}</div>
                            <h2 class="font-brand-serif text-xl font-bold mb-3 group-hover:text-brand-primary transition-colors" style="font-family: 'Playfair Display', Georgia, serif;">{{ $service->name }}</h2>
                            <p class="text-sm text-zinc-500 leading-relaxed mb-5">{{ $service->summary }}</p>
                            <div class="mt-auto flex items-center justify-between">
                                @if ($service->price_from)
                                    <span class="text-sm font-bold text-brand-primary">Mulai {{ $service->price_from }}</span>
                                @endif
                                <span class="text-sm font-semibold text-brand-dark group-hover:translate-x-1 transition-transform">Selengkapnya &rarr;</span>
                            </div>
                        </a>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

</x-layouts.base>
