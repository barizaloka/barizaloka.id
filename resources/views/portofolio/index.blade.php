<x-layouts.base
    title="Portofolio — Website yang Sudah Kami Bangun | Barizaloka"
    description="Lihat portofolio website yang telah dikerjakan Barizaloka untuk pesantren, desa, dan UMKM di seluruh Indonesia."
>

    {{-- ===== HERO ===== --}}
    <section class="relative text-center py-24 overflow-hidden bg-brand-darker">
        <div class="absolute inset-0" style="background: radial-gradient(ellipse 80% 70% at 50% 60%, rgba(29,158,117,.3) 0%, transparent 70%);"></div>
        <div class="relative z-10 max-w-xl mx-auto px-6">
            <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3">Portofolio</span>
            <h1 class="font-brand-serif text-[clamp(2rem,5vw,3rem)] font-extrabold text-white leading-tight my-3" style="font-family: 'Playfair Display', Georgia, serif;">Website yang<br>Telah Kami Bangun</h1>
            <p class="text-white/72 leading-relaxed">Sebagian dari proyek yang telah kami kerjakan bersama pesantren, desa, dan UMKM.</p>
        </div>
    </section>

    <section class="py-20 bg-[#f4f8f6]">
        <div class="max-w-[1100px] mx-auto px-6">
            @if ($projects->isEmpty())
                <div class="text-center py-16 text-zinc-500">
                    <p class="mb-4">Portofolio proyek kami sedang kami susun dan akan segera tampil di sini.</p>
                    <a href="https://wa.me/6285188158542?text=Halo%20Barizaloka%2C%20saya%20ingin%20lihat%20contoh%20portofolio" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 bg-brand-dark text-white rounded-xl px-6 py-3 text-sm font-bold hover:-translate-y-0.5 transition-all">💬 Tanya Contoh via WhatsApp</a>
                </div>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($projects as $project)
                        <a href="{{ route('portofolio.show', $project) }}" class="group block bg-white border border-[#e0ebe7] rounded-2xl overflow-hidden hover:shadow-md hover:-translate-y-1 transition-all">
                            <div class="aspect-[16/10] bg-brand-light overflow-hidden">
                                @if ($project->thumbnail)
                                    <img src="{{ Storage::url($project->thumbnail) }}" alt="{{ $project->title }}" loading="lazy" class="w-full h-full object-cover">
                                @else
                                    <div class="w-full h-full flex items-center justify-center text-5xl">🖥️</div>
                                @endif
                            </div>
                            <div class="p-6">
                                @if ($project->category)
                                    <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-2.5 py-1 rounded-full mb-2">{{ $project->category }}</span>
                                @endif
                                <h2 class="font-brand-serif text-lg font-bold mb-2 group-hover:text-brand-primary transition-colors" style="font-family: 'Playfair Display', Georgia, serif;">{{ $project->title }}</h2>
                                <p class="text-sm text-zinc-500 leading-relaxed">{{ Str::limit($project->summary, 90) }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

</x-layouts.base>
