<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name', 'Barizaloka') }}</title>
    <meta name="description" content="{{ $description ?? 'Barizaloka adalah ekosistem teknologi dari Rembang: jasa pembuatan website, pengembangan SaaS, jual beli website & aplikasi, serta komunitas lingkungan, teknologi, dan spiritual.' }}">

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="robots" content="index, follow">

    {{-- Open Graph (WhatsApp, Facebook, dll) --}}
    <meta property="og:type" content="{{ $ogType ?? 'website' }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title ?? config('app.name', 'Barizaloka') }}">
    <meta property="og:description" content="{{ $description ?? 'Barizaloka adalah ekosistem teknologi dari Rembang: jasa pembuatan website, pengembangan SaaS, jual beli website & aplikasi, serta komunitas lingkungan, teknologi, dan spiritual.' }}">
    <meta property="og:image" content="{{ $ogImage ?? url('/og-image.png') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="{{ $title ?? config('app.name', 'Barizaloka') }}">
    <meta property="og:site_name" content="{{ config('app.name', 'Barizaloka') }}">
    <meta property="og:locale" content="id_ID">

    {{-- Twitter/X Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@barizaloka">
    <meta name="twitter:title" content="{{ $title ?? config('app.name', 'Barizaloka') }}">
    <meta name="twitter:description" content="{{ $description ?? 'Barizaloka adalah ekosistem teknologi dari Rembang: jasa pembuatan website, pengembangan SaaS, jual beli website & aplikasi, serta komunitas lingkungan, teknologi, dan spiritual.' }}">
    <meta name="twitter:image" content="{{ $ogImage ?? url('/og-image.png') }}">
    <meta name="twitter:image:alt" content="{{ $title ?? config('app.name', 'Barizaloka') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{ $head ?? '' }}
</head>
<body class="bg-white text-[#1a2420] antialiased font-brand-sans" style="font-family: 'Plus Jakarta Sans', 'Segoe UI', sans-serif;">

    {{-- Navbar --}}
    <header id="site-header" class="fixed top-0 inset-x-0 z-50 bg-white/92 backdrop-blur-md border-b border-[#e0ebe7] transition-shadow">
        <nav class="max-w-[1100px] mx-auto px-6 h-17 flex items-center justify-between gap-4" aria-label="Menu Utama">

            <a href="{{ route('home') }}" class="flex items-center gap-2.5 font-brand-serif text-xl font-bold text-brand-dark" style="font-family: 'Playfair Display', Georgia, serif;">
                <span class="size-2.5 rounded-full bg-brand-primary inline-block"></span>
                Barizaloka
            </a>

            <div id="navbar-nav" class="hidden md:flex items-center gap-1">

                <div class="nav-dropdown relative">
                    <button class="nav-dropdown-trigger flex items-center gap-1 text-sm font-medium text-zinc-600 px-3.5 py-2 rounded-lg hover:bg-brand-light hover:text-brand-dark transition-colors" aria-expanded="false" aria-haspopup="true">
                        Tentang Kami
                        <svg class="nav-chevron size-3 transition-transform" viewBox="0 0 12 12" fill="none"><path d="M2 4l4 4 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </button>
                    <div class="nav-dropdown-menu absolute top-[calc(100%+8px)] left-1/2 -translate-x-1/2 bg-white border border-[#e0ebe7] rounded-xl shadow-lg min-w-56 p-2 opacity-0 invisible pointer-events-none transition-all z-50" role="menu">
                        <a href="{{ route('tentang') }}" role="menuitem" class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg hover:bg-brand-light hover:text-brand-dark transition-colors text-[#1a2420]">
                            <span class="text-base w-6 text-center">📖</span>
                            <span class="flex flex-col gap-0.5">
                                <strong class="text-sm font-semibold leading-tight">Tentang Kami</strong>
                                <small class="text-xs text-zinc-500 leading-tight">Kisah & profil Barizaloka</small>
                            </span>
                        </a>
                        <a href="{{ route('komunitas') }}" role="menuitem" class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg hover:bg-brand-light hover:text-brand-dark transition-colors text-[#1a2420]">
                            <span class="text-base w-6 text-center">🌐</span>
                            <span class="flex flex-col gap-0.5">
                                <strong class="text-sm font-semibold leading-tight">Ekosistem</strong>
                                <small class="text-xs text-zinc-500 leading-tight">Komunitas & jaringan kami</small>
                            </span>
                        </a>
                        <a href="{{ route('home') }}#nilai" role="menuitem" class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg hover:bg-brand-light hover:text-brand-dark transition-colors text-[#1a2420]">
                            <span class="text-base w-6 text-center">✦</span>
                            <span class="flex flex-col gap-0.5">
                                <strong class="text-sm font-semibold leading-tight">Nilai Kami</strong>
                                <small class="text-xs text-zinc-500 leading-tight">Prinsip & budaya Barizaloka</small>
                            </span>
                        </a>
                        <a href="{{ route('home') }}#mitra" role="menuitem" class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg hover:bg-brand-light hover:text-brand-dark transition-colors text-[#1a2420]">
                            <span class="text-base w-6 text-center">🤝</span>
                            <span class="flex flex-col gap-0.5">
                                <strong class="text-sm font-semibold leading-tight">Mitra</strong>
                                <small class="text-xs text-zinc-500 leading-tight">Partner & kolaborator</small>
                            </span>
                        </a>
                    </div>
                </div>

                <a href="{{ route('home') }}#layanan" class="text-sm font-medium text-zinc-600 px-3.5 py-2 rounded-lg hover:bg-brand-light hover:text-brand-dark transition-colors">Layanan</a>
                <a href="{{ route('solusi') }}" class="text-sm font-medium text-zinc-600 px-3.5 py-2 rounded-lg hover:bg-brand-light hover:text-brand-dark transition-colors">Jasa Website</a>
                <a href="{{ route('blog.index') }}" class="text-sm font-medium text-zinc-600 px-3.5 py-2 rounded-lg hover:bg-brand-light hover:text-brand-dark transition-colors">Blog</a>
                <a href="https://shop.barizaloka.id" target="_blank" rel="noopener" class="text-sm font-medium text-zinc-600 px-3.5 py-2 rounded-lg hover:bg-brand-light hover:text-brand-dark transition-colors">Toko Kami</a>
                <a href="https://lynk.id/barizaloka" target="_blank" rel="noopener" class="text-sm font-medium text-zinc-600 px-3.5 py-2 rounded-lg hover:bg-brand-light hover:text-brand-dark transition-colors">Etalase Karya</a>
                <a href="https://instagram.com/namaku.ahla" target="_blank" rel="noopener" class="text-sm font-semibold text-white bg-brand-primary px-4.5 py-2 rounded-lg hover:bg-brand-dark transition-colors">Hubungi Kami</a>

            </div>

            <button id="navbar-toggle" class="md:hidden flex flex-col gap-1.25 p-1.5 border-none bg-transparent" aria-label="Toggle menu" aria-expanded="false">
                <span class="block w-6 h-0.5 bg-[#1a2420] rounded-full transition-transform"></span>
                <span class="block w-6 h-0.5 bg-[#1a2420] rounded-full transition-opacity"></span>
                <span class="block w-6 h-0.5 bg-[#1a2420] rounded-full transition-transform"></span>
            </button>

        </nav>

        {{-- Mobile menu --}}
        <div id="mobile-nav" class="hidden md:hidden flex-col gap-1 bg-white border-b border-[#e0ebe7] px-6 py-4 max-h-[calc(100vh-68px)] overflow-y-auto">
            <a href="{{ route('tentang') }}" class="px-2 py-2.5 text-sm font-medium text-zinc-700">📖 Tentang Kami</a>
            <a href="{{ route('komunitas') }}" class="px-2 py-2.5 text-sm font-medium text-zinc-700">🌐 Ekosistem</a>
            <a href="{{ route('home') }}#nilai" class="px-2 py-2.5 text-sm font-medium text-zinc-700">✦ Nilai Kami</a>
            <a href="{{ route('home') }}#mitra" class="px-2 py-2.5 text-sm font-medium text-zinc-700">🤝 Mitra</a>
            <a href="{{ route('home') }}#layanan" class="px-2 py-2.5 text-sm font-medium text-zinc-700">Layanan</a>
            <a href="{{ route('solusi') }}" class="px-2 py-2.5 text-sm font-medium text-zinc-700">Jasa Website</a>
            <a href="{{ route('blog.index') }}" class="px-2 py-2.5 text-sm font-medium text-zinc-700">Blog</a>
            <a href="https://shop.barizaloka.id" target="_blank" rel="noopener" class="px-2 py-2.5 text-sm font-medium text-zinc-700">Toko Kami</a>
            <a href="https://lynk.id/barizaloka" target="_blank" rel="noopener" class="px-2 py-2.5 text-sm font-medium text-zinc-700">Etalase Karya</a>
            <a href="https://instagram.com/namaku.ahla" target="_blank" rel="noopener" class="px-2 py-2.5 text-sm font-semibold text-brand-primary">Hubungi Kami</a>
        </div>
    </header>

    <script>
        (function () {
            const header = document.getElementById('site-header');
            window.addEventListener('scroll', function () {
                header.classList.toggle('shadow-md', window.scrollY > 30);
            });

            const toggle = document.getElementById('navbar-toggle');
            const mobileNav = document.getElementById('mobile-nav');
            if (toggle && mobileNav) {
                toggle.addEventListener('click', function () {
                    const isOpen = mobileNav.classList.contains('flex');
                    mobileNav.classList.toggle('hidden', isOpen);
                    mobileNav.classList.toggle('flex', !isOpen);
                    toggle.setAttribute('aria-expanded', String(!isOpen));
                });
                mobileNav.querySelectorAll('a').forEach(function (link) {
                    link.addEventListener('click', function () {
                        mobileNav.classList.add('hidden');
                        mobileNav.classList.remove('flex');
                        toggle.setAttribute('aria-expanded', 'false');
                    });
                });
            }

            const dropdowns = document.querySelectorAll('.nav-dropdown');
            dropdowns.forEach(function (dropdown) {
                const trigger = dropdown.querySelector('.nav-dropdown-trigger');
                const menu = dropdown.querySelector('.nav-dropdown-menu');
                if (!trigger || !menu) return;
                trigger.addEventListener('click', function (e) {
                    e.stopPropagation();
                    const isOpen = menu.classList.contains('opacity-100');
                    menu.classList.toggle('opacity-0', isOpen);
                    menu.classList.toggle('invisible', isOpen);
                    menu.classList.toggle('pointer-events-none', isOpen);
                    menu.classList.toggle('opacity-100', !isOpen);
                    trigger.setAttribute('aria-expanded', String(!isOpen));
                });
            });
            document.addEventListener('click', function () {
                dropdowns.forEach(function (d) {
                    const menu = d.querySelector('.nav-dropdown-menu');
                    const trigger = d.querySelector('.nav-dropdown-trigger');
                    if (!menu) return;
                    menu.classList.add('opacity-0', 'invisible', 'pointer-events-none');
                    menu.classList.remove('opacity-100');
                    if (trigger) trigger.setAttribute('aria-expanded', 'false');
                });
            });
        })();
    </script>

    {{-- Main content --}}
    <main class="pt-17">
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <footer id="site-footer" class="bg-[#0a1e18] text-[#9db8b0] pt-14 pb-6">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-[2fr_1fr_1fr_1fr] gap-10 mb-10">

                <div>
                    <div class="font-brand-serif text-2xl font-bold text-white mb-2.5" style="font-family: 'Playfair Display', Georgia, serif;">Barizaloka</div>
                    <p class="text-sm text-[#7a9992] leading-relaxed max-w-xs">Jasa website terpercaya. Serta ekosistem teknologi inovatif yang membangun dampak nyata di bidang lingkungan, teknologi, dan spiritual.</p>
                </div>

                <div>
                    <div class="text-xs font-bold uppercase tracking-widest text-white mb-3.5">Ekosistem</div>
                    <ul class="flex flex-col gap-1.5 text-sm">
                        <li><a href="{{ route('komunitas') }}" class="text-[#7a9992] hover:text-brand-mid transition-colors">🏘️ Semua Pilar</a></li>
                        <li><a href="https://astraloka.my.id" target="_blank" rel="noopener" class="text-[#7a9992] hover:text-brand-mid transition-colors">🌍 Astraloka</a></li>
                        <li><a href="https://app.baricode.org" target="_blank" rel="noopener" class="text-[#7a9992] hover:text-brand-mid transition-colors">💻 Baricode</a></li>
                        <li><a href="https://selfreminder.org" class="text-[#7a9992] hover:text-brand-mid transition-colors">📿 Self Reminder</a></li>
                    </ul>
                </div>

                <div>
                    <div class="text-xs font-bold uppercase tracking-widest text-white mb-3.5">Layanan</div>
                    <ul class="flex flex-col gap-1.5 text-sm">
                        <li><a href="{{ route('solusi') }}" class="text-[#7a9992] hover:text-brand-mid transition-colors">Web Development</a></li>
                        <li><a href="https://lynk.id/barizaloka" target="_blank" rel="noopener" class="text-[#7a9992] hover:text-brand-mid transition-colors">🛠️ Etalase Karya Digital</a></li>
                        <li><a href="{{ route('blog.index') }}" class="text-[#7a9992] hover:text-brand-mid transition-colors">✍️ Blog</a></li>
                    </ul>
                </div>

                <div>
                    <div class="text-xs font-bold uppercase tracking-widest text-white mb-3.5">Kontak</div>
                    <ul class="flex flex-col gap-1.5 text-sm">
                        <li><a href="mailto:barizaloka@gmail.com" class="text-[#7a9992] hover:text-brand-mid transition-colors">📧 barizaloka@gmail.com</a></li>
                        <li><a href="https://wa.me/6285188158542" target="_blank" rel="noopener" class="text-[#7a9992] hover:text-brand-mid transition-colors">💬 WhatsApp</a></li>
                    </ul>
                </div>

            </div>

            <div class="border-t border-white/8 pt-5 text-center text-xs text-[#4d6961]">
                <p>&copy; {{ date('Y') }} Barizaloka. Semua hak dilindungi. Dibuat dengan ❤️ di Rembang</p>
            </div>
        </div>
    </footer>

    {{-- WhatsApp Float Button --}}
    <a href="https://wa.me/6285188158542?text=Salam%2C%20saya%20ingin%20bertanya%20sesuatu..." target="_blank" rel="noopener"
       class="fixed bottom-7 right-7 z-[9999] flex items-center gap-2.5 bg-[#25D366] text-white rounded-full py-3 pl-3.5 pr-5 shadow-lg shadow-green-900/20 text-sm font-semibold hover:bg-[#1ebe5d] hover:-translate-y-1 transition-all max-w-[200px] overflow-hidden max-sm:p-3 max-sm:rounded-full max-sm:max-w-none"
       aria-label="Chat WhatsApp">
        <svg class="size-6.5 fill-white shrink-0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
        </svg>
        <span class="whitespace-nowrap max-sm:hidden">Chat WhatsApp</span>
    </a>

    @stack('scripts')
    <script src="https://analytics.ahrefs.com/analytics.js" data-key="QT3vkVW4ywuJBzCorYjTGQ" async></script>
</body>
</html>
