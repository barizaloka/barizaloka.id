<x-layouts.base title="Masuk — Barizaloka">
    <section class="min-h-[calc(100vh-4rem)] flex items-center justify-center px-4 py-16 bg-zinc-50">
        <div class="w-full max-w-md">

            {{-- Card --}}
            <div class="bg-white rounded-2xl shadow-sm border border-zinc-100 p-8 flex flex-col gap-6">

                {{-- Header --}}
                <div class="text-center flex flex-col gap-1">
                    <div class="text-4xl mb-2">👋</div>
                    <h1 class="text-2xl font-bold text-zinc-900">Selamat datang kembali!</h1>
                    <p class="text-sm text-zinc-500">Masuk ke akunmu untuk melanjutkan</p>
                </div>

                {{-- Session Status --}}
                <x-auth-session-status class="text-center" :status="session('status')" />

                {{-- Form --}}
                <form method="POST" action="{{ route('login.store') }}" class="flex flex-col gap-5">
                    @csrf

                    {{-- Email --}}
                    <div class="flex flex-col gap-1.5">
                        <label for="email" class="text-sm font-medium text-zinc-700">📧 Alamat Email</label>
                        <input
                            id="email"
                            name="email"
                            type="email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                            autocomplete="email"
                            placeholder="email@contoh.com"
                            class="w-full px-4 py-2.5 rounded-lg border border-zinc-200 text-sm text-zinc-900 placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-900 focus:border-transparent transition @error('email') border-red-400 @enderror"
                        >
                        @error('email')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Password --}}
                    <div class="flex flex-col gap-1.5">
                        <div class="flex items-center justify-between">
                            <label for="password" class="text-sm font-medium text-zinc-700">🔒 Kata Sandi</label>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-xs text-zinc-500 hover:text-zinc-900 transition-colors">Lupa kata sandi?</a>
                            @endif
                        </div>
                        <input
                            id="password"
                            name="password"
                            type="password"
                            required
                            autocomplete="current-password"
                            placeholder="••••••••"
                            class="w-full px-4 py-2.5 rounded-lg border border-zinc-200 text-sm text-zinc-900 placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-900 focus:border-transparent transition @error('password') border-red-400 @enderror"
                        >
                        @error('password')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Remember Me --}}
                    <label class="flex items-center gap-2 cursor-pointer select-none">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="rounded border-zinc-300 text-zinc-900 focus:ring-zinc-900 size-4">
                        <span class="text-sm text-zinc-600">Ingat saya</span>
                    </label>

                    {{-- Submit --}}
                    <button
                        type="submit"
                        class="w-full py-2.5 rounded-lg bg-zinc-900 text-white text-sm font-semibold hover:bg-zinc-700 transition-colors"
                        data-test="login-button"
                    >
                        Masuk →
                    </button>
                </form>

                {{-- Register Link --}}
                @if (Route::has('register'))
                    <p class="text-center text-sm text-zinc-500">
                        Belum punya akun?
                        <a href="{{ route('register') }}" class="font-semibold text-zinc-900 hover:underline">Daftar sekarang</a>
                    </p>
                @endif
            </div>

        </div>
    </section>
</x-layouts.base>
