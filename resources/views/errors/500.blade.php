<x-layouts.base title="500 – Kesalahan Server">
    <section class="min-h-[calc(100vh-4rem)] flex items-center justify-center px-6 py-24">
        <div class="text-center max-w-lg mx-auto">
            <p class="text-8xl font-bold text-zinc-100 select-none">500</p>
            <h1 class="mt-4 text-2xl font-bold text-zinc-900">Kesalahan Server</h1>
            <p class="mt-3 text-zinc-500 leading-relaxed">
                Terjadi kesalahan pada server kami. Silakan coba beberapa saat lagi.
            </p>
            <div class="mt-8">
                <a href="{{ route('home') }}"
                   class="px-5 py-2.5 rounded-lg bg-zinc-900 text-white text-sm font-medium hover:bg-zinc-700 transition-colors">
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </section>
</x-layouts.base>
