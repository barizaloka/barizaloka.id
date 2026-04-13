<x-layouts.base title="Autentikasi Dua Faktor — Barizaloka">
    <section class="min-h-[calc(100vh-4rem)] flex items-center justify-center px-4 py-16 bg-zinc-50">
        <div class="w-full max-w-md">

            {{-- Card --}}
            <div
                class="bg-white rounded-2xl shadow-sm border border-zinc-100 p-8 flex flex-col gap-6"
                x-cloak
                x-data="{
                    showRecoveryInput: @js($errors->has('recovery_code')),
                    code: '',
                    recovery_code: '',
                    toggleInput() {
                        this.showRecoveryInput = !this.showRecoveryInput;
                        this.code = '';
                        this.recovery_code = '';
                        $dispatch('clear-2fa-auth-code');
                        $nextTick(() => {
                            this.showRecoveryInput
                                ? this.$refs.recovery_code?.focus()
                                : $dispatch('focus-2fa-auth-code');
                        });
                    },
                }"
            >

                {{-- Header (OTP) --}}
                <div x-show="!showRecoveryInput" class="text-center flex flex-col gap-1">
                    <div class="text-4xl mb-2">🔐</div>
                    <h1 class="text-2xl font-bold text-zinc-900">Kode Autentikasi</h1>
                    <p class="text-sm text-zinc-500">Masukkan kode 6 digit dari aplikasi autentikator kamu</p>
                </div>

                {{-- Header (Recovery) --}}
                <div x-show="showRecoveryInput" class="text-center flex flex-col gap-1">
                    <div class="text-4xl mb-2">🆘</div>
                    <h1 class="text-2xl font-bold text-zinc-900">Kode Pemulihan</h1>
                    <p class="text-sm text-zinc-500">Masukkan salah satu kode pemulihan darurat kamu</p>
                </div>

                {{-- Form --}}
                <form method="POST" action="{{ route('two-factor.login.store') }}" class="flex flex-col gap-5">
                    @csrf

                    {{-- OTP Input --}}
                    <div x-show="!showRecoveryInput" class="flex justify-center">
                        <flux:otp
                            x-model="code"
                            length="6"
                            name="code"
                            label="Kode OTP"
                            label:sr-only
                            class="mx-auto"
                        />
                    </div>

                    {{-- Recovery Code Input --}}
                    <div x-show="showRecoveryInput" class="flex flex-col gap-1.5">
                        <label class="text-sm font-medium text-zinc-700">🆘 Kode Pemulihan</label>
                        <input
                            type="text"
                            name="recovery_code"
                            x-ref="recovery_code"
                            x-bind:required="showRecoveryInput"
                            autocomplete="one-time-code"
                            x-model="recovery_code"
                            placeholder="xxxx-xxxx"
                            class="w-full px-4 py-2.5 rounded-lg border border-zinc-200 text-sm text-zinc-900 placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-900 focus:border-transparent transition"
                        >
                        @error('recovery_code')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Submit --}}
                    <button
                        type="submit"
                        class="w-full py-2.5 rounded-lg bg-zinc-900 text-white text-sm font-semibold hover:bg-zinc-700 transition-colors"
                    >
                        Lanjutkan →
                    </button>
                </form>

                {{-- Toggle --}}
                <p class="text-center text-sm text-zinc-500">
                    atau
                    <button
                        type="button"
                        @click="toggleInput()"
                        class="font-semibold text-zinc-900 hover:underline cursor-pointer"
                    >
                        <span x-show="!showRecoveryInput">gunakan kode pemulihan</span>
                        <span x-show="showRecoveryInput">gunakan kode autentikator</span>
                    </button>
                </p>

            </div>

        </div>
    </section>
</x-layouts.base>
