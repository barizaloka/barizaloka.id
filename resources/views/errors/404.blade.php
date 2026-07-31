<x-layouts.base title="404 – Halaman Tidak Ditemukan">
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-brand-darker">
        <div class="absolute inset-0" style="background: radial-gradient(ellipse 65% 55% at 50% 50%, rgba(29,158,117,.22) 0%, transparent 70%);"></div>

        <div class="relative z-10 max-w-2xl mx-auto px-6 py-20 text-center">
            <div class="font-brand-serif text-[clamp(7rem,22vw,14rem)] font-extrabold leading-none tracking-tight select-none -mb-6 opacity-18"
                 style="font-family: 'Playfair Display', Georgia, serif; background: linear-gradient(135deg, #5DCAA5 0%, #a8edd4 50%, #5DCAA5 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;"
                 aria-hidden="true">404</div>

            <div class="mb-10">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full">Halaman Tidak Ditemukan</span>
                <h1 class="font-brand-serif text-[clamp(1.6rem,4vw,2.4rem)] font-bold text-white my-3" style="font-family: 'Playfair Display', Georgia, serif;">Ups, kamu nyasar nih&hellip;</h1>
                <p class="text-white/70 max-w-md mx-auto leading-relaxed">Halaman yang kamu cari tidak ada, sudah dipindahkan, atau mungkin belum dibuat. Tapi jangan khawatir &mdash; kamu bisa balik ke jalur yang benar dari sini.</p>
            </div>

            <div class="flex flex-wrap gap-3 justify-center">
                <a href="{{ route('home') }}" class="inline-flex items-center gap-1.5 bg-white text-brand-dark rounded-xl px-7 py-3.5 text-sm font-bold hover:-translate-y-0.5 hover:shadow-xl transition-all">← Kembali ke Beranda</a>
                <a href="{{ route('solusi') }}" class="inline-flex items-center gap-1.5 bg-transparent border border-white/50 text-white rounded-xl px-7 py-3.5 text-sm font-semibold hover:bg-white/10 transition-colors">Lihat Layanan</a>
            </div>

            <nav class="mt-12 pt-8 border-t border-white/10" aria-label="Tautan Populer">
                <p class="text-xs text-white/40 uppercase tracking-widest mb-4">Atau langsung ke:</p>
                <ul class="flex flex-wrap gap-2 justify-center">
                    <li><a href="{{ route('komunitas') }}" class="inline-block px-4 py-1.5 rounded-lg bg-white/7 border border-white/12 text-white/75 text-sm hover:bg-brand-primary/25 hover:text-white hover:border-brand-primary/40 transition-colors">🏘️ Ekosistem</a></li>
                    <li><a href="{{ route('home') }}#layanan" class="inline-block px-4 py-1.5 rounded-lg bg-white/7 border border-white/12 text-white/75 text-sm hover:bg-brand-primary/25 hover:text-white hover:border-brand-primary/40 transition-colors">💡 Layanan</a></li>
                    <li><a href="https://app.baricode.org" target="_blank" rel="noopener" class="inline-block px-4 py-1.5 rounded-lg bg-white/7 border border-white/12 text-white/75 text-sm hover:bg-brand-primary/25 hover:text-white hover:border-brand-primary/40 transition-colors">💻 Baricode</a></li>
                    <li><a href="https://astraloka.my.id" target="_blank" rel="noopener" class="inline-block px-4 py-1.5 rounded-lg bg-white/7 border border-white/12 text-white/75 text-sm hover:bg-brand-primary/25 hover:text-white hover:border-brand-primary/40 transition-colors">🌍 Astraloka</a></li>
                </ul>
            </nav>
        </div>
    </section>
</x-layouts.base>
