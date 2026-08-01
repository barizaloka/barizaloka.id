<x-layouts.base
    title="FAQ — Pertanyaan Seputar Jasa Website Barizaloka"
    description="Jawaban atas pertanyaan yang sering ditanyakan seputar jasa pembuatan website, harga, domain, dan proses pengerjaan di Barizaloka."
>

    @if ($faqs->isNotEmpty())
        <x-slot:head>
            <script type="application/ld+json">
                {!! json_encode([
                    '@@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => $faqs->map(fn ($faq) => [
                        '@type' => 'Question',
                        'name' => $faq->question,
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text' => $faq->answer,
                        ],
                    ])->values(),
                ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
            </script>
        </x-slot:head>
    @endif

    {{-- ===== HERO ===== --}}
    <section class="relative text-center py-24 overflow-hidden bg-brand-darker">
        <div class="absolute inset-0" style="background: radial-gradient(ellipse 80% 70% at 50% 60%, rgba(29,158,117,.3) 0%, transparent 70%);"></div>
        <div class="relative z-10 max-w-xl mx-auto px-6">
            <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3">❓ FAQ</span>
            <h1 class="font-brand-serif text-[clamp(2rem,5vw,3rem)] font-extrabold text-white leading-tight my-3" style="font-family: 'Playfair Display', Georgia, serif;">Pertanyaan yang<br>Sering Ditanyakan</h1>
            <p class="text-white/72 leading-relaxed">Masih ragu? Kami jawab semua kekhawatiran Anda seputar jasa website Barizaloka.</p>
        </div>
    </section>

    <section class="py-20 bg-[#f4f8f6]">
        <div class="max-w-3xl mx-auto px-6">
            @if ($faqs->isEmpty())
                <div class="text-center py-16 text-zinc-500">Belum ada pertanyaan yang tersedia saat ini.</div>
            @else
                <div id="faq" class="flex flex-col gap-3">
                    @foreach ($faqs as $faq)
                        <div class="faq-item bg-white border border-[#e0ebe7] rounded-xl overflow-hidden">
                            <button type="button" class="faq-question w-full flex items-center justify-between gap-4 text-left px-6 py-5 font-semibold">
                                {{ $faq->question }}
                                <svg class="faq-icon size-4 shrink-0 text-zinc-400 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </button>
                            <div class="faq-answer hidden px-6 pb-5 text-sm text-zinc-500 leading-relaxed bg-[#f4f8f6]">
                                {{ $faq->answer }}
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

            <div class="text-center mt-12">
                <p class="text-sm text-zinc-500 mb-4">Masih ada pertanyaan lain?</p>
                <a href="https://wa.me/6285188158542?text=Halo%20Barizaloka%2C%20saya%20mau%20bertanya" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 bg-brand-dark text-white rounded-xl px-6 py-3 text-sm font-bold hover:-translate-y-0.5 transition-all">💬 Tanya via WhatsApp</a>
            </div>
        </div>
    </section>

    @push('scripts')
    <script>
        document.querySelectorAll('.faq-item').forEach((item) => {
            const question = item.querySelector('.faq-question');
            const answer = item.querySelector('.faq-answer');
            const icon = item.querySelector('.faq-icon');
            question.addEventListener('click', () => {
                const isOpen = !answer.classList.contains('hidden');
                document.querySelectorAll('.faq-answer').forEach((a) => a.classList.add('hidden'));
                document.querySelectorAll('.faq-icon').forEach((i) => i.classList.remove('rotate-180'));
                if (!isOpen) {
                    answer.classList.remove('hidden');
                    icon.classList.add('rotate-180');
                }
            });
        });
    </script>
    @endpush

</x-layouts.base>
