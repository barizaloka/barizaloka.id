<x-layouts.base title="Verifikasi Email — Barizaloka">
    <section class="min-h-[calc(100vh-4rem)] flex items-center justify-center px-4 py-16 bg-zinc-50">
        <div class="w-full max-w-md">

            {{-- Card --}}
            <div class="bg-white rounded-2xl shadow-sm border border-zinc-100 p-8 flex flex-col gap-6">

                {{-- Header --}}
                <div class="text-center flex flex-col gap-1">
                    <div class="text-4xl mb-2">📬</div>
                    <h1 class="text-2xl font-bold text-zinc-900">Verifikasi Emailmu</h1>
                    <p class="text-sm text-zinc-500">
                        Kami telah mengirimkan tautan verifikasi ke emailmu. Silakan cek inbox (atau folder spam) dan klik tautan tersebut.
                    </p>
                </div>

                {{-- Notifikasi sukses kirim ulang --}}
                @if (session('status') == 'verification-link-sent')
                    <div class="p-4 rounded-lg bg-green-50 border border-green-200 text-center">
                        <p class="text-sm text-green-700 font-medium">✅ Tautan verifikasi baru telah dikirim ke emailmu!</p>
                    </div>
                @endif

                {{-- Actions --}}
                <div class="flex flex-col gap-3">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button
                            type="submit"
                            class="w-full py-2.5 rounded-lg bg-zinc-900 text-white text-sm font-semibold hover:bg-zinc-700 transition-colors"
                        >
                            📨 Kirim Ulang Email Verifikasi
                        </button>
                    </form>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button
                            type="submit"
                            class="w-full py-2.5 rounded-lg border border-zinc-200 text-zinc-600 text-sm font-medium hover:bg-zinc-50 transition-colors"
                            data-test="logout-button"
                        >
                            Keluar dari akun
                        </button>
                    </form>
                </div>

            </div>

        </div>
    </section>
</x-layouts.base>
