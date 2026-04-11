<x-layouts.base title="503 – Sedang Dalam Pemeliharaan">
    <section class="min-h-[calc(100vh-4rem)] flex items-center justify-center px-6 py-24">
        <div class="text-center max-w-lg mx-auto">
            <p class="text-8xl font-bold text-zinc-100 select-none">503</p>
            <h1 class="mt-4 text-2xl font-bold text-zinc-900">Sedang Dalam Pemeliharaan</h1>
            <p class="mt-3 text-zinc-500 leading-relaxed">
                Kami sedang melakukan pemeliharaan. Silakan kembali beberapa saat lagi.
                @if($exception->getMessage())
                    <br><span class="text-xs mt-1 block">{{ $exception->getMessage() }}</span>
                @endif
            </p>
            <div class="mt-8">
                <button onclick="window.location.reload()"
                        class="px-5 py-2.5 rounded-lg bg-zinc-900 text-white text-sm font-medium hover:bg-zinc-700 transition-colors cursor-pointer">
                    Coba Lagi
                </button>
            </div>
        </div>
    </section>
</x-layouts.base>
