<div id="pwa-install-banner" class="hidden fixed bottom-6 left-6 right-6 sm:right-auto sm:max-w-md z-[9999] bg-slate-900 text-white p-4 rounded-2xl shadow-2xl border border-slate-800 backdrop-blur-md bg-opacity-95 transition-all duration-300">
    <div class="flex items-center gap-3.5">
        <div class="size-11 rounded-xl bg-emerald-500/20 border border-emerald-500/30 flex items-center justify-center shrink-0">
            <img src="/icon-192.png" alt="Barizaloka" class="size-8 rounded-lg shadow-sm">
        </div>
        <div class="flex-1 min-w-0">
            <h4 class="text-sm font-bold text-white leading-tight">Install Aplikasi Barizaloka</h4>
            <p class="text-xs text-slate-300 mt-0.5 leading-snug">Akses cepat & dapat dibuka offline di perangkat Anda.</p>
        </div>
        <div class="flex items-center gap-1.5 shrink-0">
            <button onclick="window.installPWA()" type="button" class="px-3.5 py-1.5 rounded-lg bg-emerald-500 hover:bg-emerald-400 text-slate-950 text-xs font-bold shadow transition-colors cursor-pointer">
                Install
            </button>
            <button onclick="window.dismissPWABanner()" type="button" class="p-1 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800 transition-colors cursor-pointer" aria-label="Tutup banner">
                <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>
</div>
