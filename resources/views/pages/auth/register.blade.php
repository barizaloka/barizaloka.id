<x-layouts.base title="Daftar — Barizaloka">
    <section class="min-h-[calc(100vh-4rem)] flex items-center justify-center px-4 py-16 bg-zinc-50">
        <div class="w-full max-w-md">

            {{-- Card --}}
            <div class="bg-white rounded-2xl shadow-sm border border-zinc-100 p-8 flex flex-col gap-6">

                {{-- Header --}}
                <div class="text-center flex flex-col gap-1">
                    <div class="text-4xl mb-2">🚀</div>
                    <h1 class="text-2xl font-bold text-zinc-900">Buat akun baru</h1>
                    <p class="text-sm text-zinc-500">Bergabung bersama komunitas Barizaloka</p>
                </div>

                {{-- Session Status --}}
                <x-auth-session-status class="text-center" :status="session('status')" />

                {{-- Form --}}
                <form method="POST" action="{{ route('register.store') }}" class="flex flex-col gap-5">
                    @csrf

                    {{-- Nama --}}
                    <div class="flex flex-col gap-1.5">
                        <label for="name" class="text-sm font-medium text-zinc-700">👤 Nama Lengkap</label>
                        <input
                            id="name"
                            name="name"
                            type="text"
                            value="{{ old('name') }}"
                            required
                            autofocus
                            autocomplete="name"
                            placeholder="Nama lengkapmu"
                            class="w-full px-4 py-2.5 rounded-lg border border-zinc-200 text-sm text-zinc-900 placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-900 focus:border-transparent transition @error('name') border-red-400 @enderror"
                        >
                        @error('name')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div class="flex flex-col gap-1.5">
                        <label for="email" class="text-sm font-medium text-zinc-700">📧 Alamat Email</label>
                        <input
                            id="email"
                            name="email"
                            type="email"
                            value="{{ old('email') }}"
                            required
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
                        <label for="password" class="text-sm font-medium text-zinc-700">🔒 Kata Sandi</label>
                        <input
                            id="password"
                            name="password"
                            type="password"
                            required
                            autocomplete="new-password"
                            placeholder="Min. 8 karakter"
                            class="w-full px-4 py-2.5 rounded-lg border border-zinc-200 text-sm text-zinc-900 placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-900 focus:border-transparent transition @error('password') border-red-400 @enderror"
                        >
                        @error('password')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Konfirmasi Password --}}
                    <div class="flex flex-col gap-1.5">
                        <label for="password_confirmation" class="text-sm font-medium text-zinc-700">🔐 Konfirmasi Kata Sandi</label>
                        <input
                            id="password_confirmation"
                            name="password_confirmation"
                            type="password"
                            required
                            autocomplete="new-password"
                            placeholder="Ulangi kata sandimu"
                            class="w-full px-4 py-2.5 rounded-lg border border-zinc-200 text-sm text-zinc-900 placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-900 focus:border-transparent transition"
                        >
                    </div>

                    {{-- Submit --}}
                    <button
                        type="submit"
                        class="w-full py-2.5 rounded-lg bg-zinc-900 text-white text-sm font-semibold hover:bg-zinc-700 transition-colors"
                        data-test="register-user-button"
                    >
                        Buat Akun →
                    </button>
                </form>

                {{-- Login Link --}}
                <p class="text-center text-sm text-zinc-500">
                    Sudah punya akun?
                    <a href="{{ route('login') }}" class="font-semibold text-zinc-900 hover:underline">Masuk di sini</a>
                </p>
            </div>

        </div>
    </section>
</x-layouts.base>
