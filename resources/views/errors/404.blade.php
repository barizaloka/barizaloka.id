<x-layouts.base title="404 – Halaman Tidak Ditemukan">
    <section class="min-h-[calc(100vh-4rem)] flex items-center justify-center px-6 py-24">
        <div class="text-center max-w-lg mx-auto">
            <p class="text-8xl font-bold text-zinc-100 select-none">404</p>
            <h1 class="mt-4 text-2xl font-bold text-zinc-900">Halaman Tidak Ditemukan</h1>
            <p class="mt-3 text-zinc-500 leading-relaxed">
                Halaman yang kamu cari tidak ada, mungkin sudah dipindahkan atau alamatnya salah.
            </p>
            <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-3">
                <a href="{{ route('home') }}"
                   class="px-5 py-2.5 rounded-lg bg-zinc-900 text-white text-sm font-medium hover:bg-zinc-700 transition-colors">
                    Kembali ke Beranda
                </a>
                <a href="{{ route('solusi') }}"
                   class="px-5 py-2.5 rounded-lg border border-zinc-200 text-zinc-700 text-sm font-medium hover:bg-zinc-50 transition-colors">
                    Lihat Solusi
                </a>
            </div>
        </div>
    </section>
</x-layouts.base>
