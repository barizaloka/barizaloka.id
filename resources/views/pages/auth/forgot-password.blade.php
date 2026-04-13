<x-layouts.base title="Lupa Kata Sandi — Barizaloka">
    <section class="min-h-[calc(100vh-4rem)] flex items-center justify-center px-4 py-16 bg-zinc-50">
        <div class="w-full max-w-md">

            {{-- Card --}}
            <div class="bg-white rounded-2xl shadow-sm border border-zinc-100 p-8 flex flex-col gap-6">

                {{-- Header --}}
                <div class="text-center flex flex-col gap-1">
                    <div class="text-4xl mb-2">🔑</div>
                    <h1 class="text-2xl font-bold text-zinc-900">Lupa kata sandi?</h1>
                    <p class="text-sm text-zinc-500">Masukkan emailmu dan kami akan mengirimkan tautan untuk reset kata sandi</p>
                </div>

                {{-- Session Status --}}
                @if (session('status'))
                    <div class="p-4 rounded-lg bg-green-50 border border-green-200 text-center">
                        <p class="text-sm text-green-700 font-medium">✅ {{ session('status') }}</p>
                    </div>
                @endif

                {{-- Form --}}
                <form method="POST" action="{{ route('password.email') }}" class="flex flex-col gap-5">
                    @csrf

                    {{-- Email --}}
                    <div class="flex flex-col gap-1.5">
                        <label for="email" class="text-sm font-medium text-zinc-700">📧 Alamat Email</label>
                        <input
                            id="email"
                            name="email"
                            type="email"
                            required
                            autofocus
                            placeholder="email@contoh.com"
                            class="w-full px-4 py-2.5 rounded-lg border border-zinc-200 text-sm text-zinc-900 placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-900 focus:border-transparent transition @error('email') border-red-400 @enderror"
                        >
                        @error('email')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Submit --}}
                    <button
                        type="submit"
                        class="w-full py-2.5 rounded-lg bg-zinc-900 text-white text-sm font-semibold hover:bg-zinc-700 transition-colors"
                        data-test="email-password-reset-link-button"
                    >
                        Kirim Tautan Reset →
                    </button>
                </form>

                {{-- Back to Login --}}
                <p class="text-center text-sm text-zinc-500">
                    Ingat kata sandimu?
                    <a href="{{ route('login') }}" class="font-semibold text-zinc-900 hover:underline">Kembali masuk</a>
                </p>
            </div>

        </div>
    </section>
</x-layouts.base>
