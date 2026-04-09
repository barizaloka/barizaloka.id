<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name', 'Barizaloka') }}</title>
    <meta name="description" content="{{ $description ?? 'Ekosistem teknologi inovatif yang mendukung komunitas.' }}">

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{ $head ?? '' }}
</head>
<body class="bg-white text-zinc-800 antialiased">

    {{-- Navbar --}}
    <header class="sticky top-0 z-50 bg-white/90 backdrop-blur-sm border-b border-zinc-100">
        <nav class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center gap-2 font-bold text-xl text-zinc-900">
                <span class="size-8 rounded-lg bg-zinc-900 text-white flex items-center justify-center text-sm font-bold">B</span>
                Barizaloka
            </a>

            <div class="hidden md:flex items-center gap-8">
                <a href="{{ route('home') }}#komunitas" class="text-sm font-medium text-zinc-600 hover:text-zinc-900 transition-colors">Komunitas</a>
                <a href="{{ route('solusi') }}" class="text-sm font-medium text-zinc-600 hover:text-zinc-900 transition-colors">Solusi</a>
                <a href="{{ route('home') }}#layanan" class="text-sm font-medium text-zinc-600 hover:text-zinc-900 transition-colors">Layanan</a>
                <a href="{{ route('home') }}#tentang" class="text-sm font-medium text-zinc-600 hover:text-zinc-900 transition-colors">Tentang</a>
            </div>

            <a href="#kontak"
               class="hidden md:inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-zinc-900 text-white text-sm font-medium hover:bg-zinc-700 transition-colors">
                Hubungi Kami
            </a>

            {{-- Mobile menu button --}}
            <button
                id="menu-toggle"
                class="md:hidden p-2 rounded-lg hover:bg-zinc-100 transition-colors"
                aria-label="Menu"
                aria-expanded="false">
                <svg id="icon-open" class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg id="icon-close" class="size-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </nav>

        {{-- Mobile menu --}}
        <div id="mobile-menu" class="hidden md:hidden border-t border-zinc-100 bg-white px-6 py-4 flex flex-col gap-4">
            <a href="{{ route('home') }}#komunitas" class="text-sm font-medium text-zinc-600 hover:text-zinc-900">Komunitas</a>
            <a href="{{ route('solusi') }}" class="text-sm font-medium text-zinc-600 hover:text-zinc-900">Solusi</a>
            <a href="{{ route('home') }}#layanan" class="text-sm font-medium text-zinc-600 hover:text-zinc-900">Layanan</a>
            <a href="{{ route('home') }}#tentang" class="text-sm font-medium text-zinc-600 hover:text-zinc-900">Tentang</a>
            <a href="{{ route('home') }}#kontak" class="text-sm font-medium text-zinc-900 font-semibold">Hubungi Kami</a>
        </div>
    </header>

    <script>
        const toggle = document.getElementById('menu-toggle');
        const menu = document.getElementById('mobile-menu');
        const iconOpen = document.getElementById('icon-open');
        const iconClose = document.getElementById('icon-close');

        toggle.addEventListener('click', () => {
            const isOpen = !menu.classList.contains('hidden');
            menu.classList.toggle('hidden', isOpen);
            iconOpen.classList.toggle('hidden', !isOpen);
            iconClose.classList.toggle('hidden', isOpen);
            toggle.setAttribute('aria-expanded', String(!isOpen));
        });

        menu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.add('hidden');
                iconOpen.classList.remove('hidden');
                iconClose.classList.add('hidden');
                toggle.setAttribute('aria-expanded', 'false');
            });
        });
    </script>

    {{-- Main content --}}
    <main>
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <footer id="tentang" class="bg-zinc-900 text-zinc-400">
        <div class="max-w-6xl mx-auto px-6 py-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="flex flex-col gap-4">
                    <div class="flex items-center gap-2 font-bold text-xl text-white">
                        <span class="size-8 rounded-lg bg-white text-zinc-900 flex items-center justify-center text-sm font-bold">B</span>
                        Barizaloka
                    </div>
                    <p class="text-sm leading-relaxed">
                        Ekosistem teknologi inovatif yang menghubungkan komunitas peduli lingkungan, teknologi, dan spiritual.
                    </p>
                </div>

                <div class="flex flex-col gap-4">
                    <h3 class="text-white font-semibold text-sm uppercase tracking-wider">Komunitas</h3>
                    <ul class="flex flex-col gap-2 text-sm">
                        <li><a href="#komunitas" class="hover:text-white transition-colors">Astraloka</a></li>
                        <li><a href="#komunitas" class="hover:text-white transition-colors">Baricode</a></li>
                        <li><a href="#komunitas" class="hover:text-white transition-colors">Self Reminder</a></li>
                    </ul>
                </div>

                <div class="flex flex-col gap-4">
                    <h3 class="text-white font-semibold text-sm uppercase tracking-wider">Lokasi</h3>
                    <address class="not-italic text-sm leading-relaxed">
                        Desa Karangasem, Kecamatan Sedan<br>
                        Kabupaten Rembang, Jawa Tengah
                    </address>
                </div>
            </div>

            <div class="border-t border-zinc-800 mt-12 pt-6 flex flex-col md:flex-row items-center justify-between gap-4 text-xs">
                <p>&copy; {{ date('Y') }} Barizaloka. Semua hak dilindungi.</p>
                <p>Dibuat dengan ❤️ di Rembang</p>
            </div>
        </div>
    </footer>

    {{ $scripts ?? '' }}
</body>
</html>
