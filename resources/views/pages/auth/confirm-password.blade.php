<x-layouts.base title="Konfirmasi Kata Sandi — Barizaloka">
    <section class="min-h-[calc(100vh-4rem)] flex items-center justify-center px-4 py-16 bg-zinc-50">
        <div class="w-full max-w-md">

            {{-- Card --}}
            <div class="bg-white rounded-2xl shadow-sm border border-zinc-100 p-8 flex flex-col gap-6">

                {{-- Header --}}
                <div class="text-center flex flex-col gap-1">
                    <div class="text-4xl mb-2">🛡️</div>
                    <h1 class="text-2xl font-bold text-zinc-900">Konfirmasi Kata Sandi</h1>
                    <p class="text-sm text-zinc-500">
                        Ini adalah area aman. Mohon konfirmasi kata sandimu sebelum melanjutkan.
                    </p>
                </div>

                {{-- Session Status --}}
                <x-auth-session-status class="text-center" :status="session('status')" />

                {{-- Form --}}
                <form method="POST" action="{{ route('password.confirm.store') }}" class="flex flex-col gap-5">
                    @csrf

                    {{-- Password --}}
                    <div class="flex flex-col gap-1.5">
                        <label for="password" class="text-sm font-medium text-zinc-700">🔒 Kata Sandi</label>
                        <input
                            id="password"
                            name="password"
                            type="password"
                            required
                            autofocus
                            autocomplete="current-password"
                            placeholder="••••••••"
                            class="w-full px-4 py-2.5 rounded-lg border border-zinc-200 text-sm text-zinc-900 placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-900 focus:border-transparent transition @error('password') border-red-400 @enderror"
                        >
                        @error('password')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Submit --}}
                    <button
                        type="submit"
                        class="w-full py-2.5 rounded-lg bg-zinc-900 text-white text-sm font-semibold hover:bg-zinc-700 transition-colors"
                        data-test="confirm-password-button"
                    >
                        Konfirmasi →
                    </button>
                </form>

            </div>

        </div>
    </section>
</x-layouts.base>
