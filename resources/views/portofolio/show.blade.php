<x-layouts.base
    :title="$project->meta_title ?: $project->title.' — Portofolio Barizaloka'"
    :description="$project->meta_description ?: $project->summary"
    :ogImage="$project->thumbnail ? Storage::url($project->thumbnail) : url('/og-image.png')"
>

    <x-slot:head>
        <script type="application/ld+json">
            {!! json_encode([
                '@@context' => 'https://schema.org',
                '@type' => 'CreativeWork',
                'name' => $project->title,
                'description' => $project->summary,
                'creator' => [
                    '@type' => 'Organization',
                    'name' => 'Barizaloka',
                    'url' => url('/'),
                ],
                'url' => route('portofolio.show', $project),
            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
        </script>
    </x-slot:head>

    <section class="relative text-center py-24 overflow-hidden bg-brand-darker">
        <div class="absolute inset-0" style="background: radial-gradient(ellipse 80% 70% at 50% 60%, rgba(29,158,117,.3) 0%, transparent 70%);"></div>
        <div class="relative z-10 max-w-2xl mx-auto px-6">
            @if ($project->category)
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-primary bg-brand-light px-3.5 py-1.5 rounded-full mb-3">{{ $project->category }}</span>
            @endif
            <h1 class="font-brand-serif text-[clamp(1.8rem,5vw,2.8rem)] font-extrabold text-white leading-tight my-3" style="font-family: 'Playfair Display', Georgia, serif;">{{ $project->title }}</h1>
            <p class="text-white/72 leading-relaxed">{{ $project->summary }}</p>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-[900px] mx-auto px-6">
            @if ($project->thumbnail)
                <div class="aspect-[16/9] bg-brand-light rounded-2xl overflow-hidden mb-10">
                    <img src="{{ Storage::url($project->thumbnail) }}" alt="{{ $project->title }}" class="w-full h-full object-cover">
                </div>
            @endif

            <div class="flex flex-wrap gap-6 items-center justify-between mb-10 border-b border-[#e0ebe7] pb-8">
                <div class="flex flex-wrap gap-8">
                    @if ($project->client_name)
                        <div>
                            <div class="text-xs text-zinc-500 uppercase tracking-wide mb-1">Klien</div>
                            <div class="font-semibold">{{ $project->client_name }}</div>
                        </div>
                    @endif
                </div>
                @if ($project->url)
                    <a href="{{ $project->url }}" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 bg-brand-dark text-white rounded-xl px-6 py-3 text-sm font-bold hover:-translate-y-0.5 transition-all">🔗 Kunjungi Website</a>
                @endif
            </div>

            @if ($project->description)
                <div class="prose max-w-none text-zinc-600 leading-relaxed">
                    {!! $project->description !!}
                </div>
            @endif

            <div class="mt-12 text-center">
                <a href="{{ route('portofolio.index') }}" class="text-sm font-semibold text-brand-primary hover:underline">&larr; Kembali ke Portofolio</a>
            </div>
        </div>
    </section>

</x-layouts.base>
