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

            <div class="nav-dropdown relative">
                <button class="nav-dropdown-trigger flex items-center gap-1 text-sm font-medium text-zinc-600 px-3.5 py-2 rounded-lg hover:bg-brand-light hover:text-brand-dark transition-colors" aria-expanded="false" aria-haspopup="true">
                    Layanan
                    <svg class="nav-chevron size-3 transition-transform" viewBox="0 0 12 12" fill="none"><path d="M2 4l4 4 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
                <div class="nav-dropdown-menu absolute top-[calc(100%+8px)] left-1/2 -translate-x-1/2 bg-white border border-[#e0ebe7] rounded-xl shadow-lg min-w-56 p-2 opacity-0 invisible pointer-events-none transition-all z-50" role="menu">
                    <a href="{{ route('harga') }}" role="menuitem" class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg hover:bg-brand-light hover:text-brand-dark transition-colors text-[#1a2420]">
                        <span class="text-base w-6 text-center">💰</span>
                        <span class="flex flex-col gap-0.5">
                            <strong class="text-sm font-semibold leading-tight">Harga</strong>
                            <small class="text-xs text-zinc-500 leading-tight">Paket & biaya berlangganan</small>
                        </span>
                    </a>
                    <a href="{{ route('portofolio.index') }}" role="menuitem" class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg hover:bg-brand-light hover:text-brand-dark transition-colors text-[#1a2420]">
                        <span class="text-base w-6 text-center">🖥️</span>
                        <span class="flex flex-col gap-0.5">
                            <strong class="text-sm font-semibold leading-tight">Portofolio</strong>
                            <small class="text-xs text-zinc-500 leading-tight">Website yang telah kami buat</small>
                        </span>
                    </a>
                    <a href="{{ route('faq.index') }}" role="menuitem" class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg hover:bg-brand-light hover:text-brand-dark transition-colors text-[#1a2420]">
                        <span class="text-base w-6 text-center">❓</span>
                        <span class="flex flex-col gap-0.5">
                            <strong class="text-sm font-semibold leading-tight">FAQ</strong>
                            <small class="text-xs text-zinc-500 leading-tight">Pertanyaan yang sering ditanyakan</small>
                        </span>
                    </a>
                </div>
            </div>

            <a href="{{ route('jasa-website') }}" class="text-sm font-medium text-zinc-600 px-3.5 py-2 rounded-lg hover:bg-brand-light hover:text-brand-dark transition-colors">Jasa Website</a>
            <a href="{{ route('blog.index') }}" class="text-sm font-medium text-zinc-600 px-3.5 py-2 rounded-lg hover:bg-brand-light hover:text-brand-dark transition-colors">Blog</a>
            <a href="https://lynk.id/barizaloka" target="_blank" rel="noopener" class="text-sm font-medium text-zinc-600 px-3.5 py-2 rounded-lg hover:bg-brand-light hover:text-brand-dark transition-colors">Etalase Karya</a>
            <a href="https://contohdesain.web.id" target="_blank" rel="noopener" class="text-sm font-medium text-zinc-600 px-3.5 py-2 rounded-lg hover:bg-brand-light hover:text-brand-dark transition-colors">Contoh Desain</a>
            <a href="{{ route('kontak') }}" class="text-sm font-semibold text-white bg-brand-primary px-4.5 py-2 rounded-lg hover:bg-brand-dark transition-colors">Hubungi Kami</a>

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
        <a href="{{ route('harga') }}" class="px-2 py-2.5 text-sm font-medium text-zinc-700">💰 Harga</a>
        <a href="{{ route('portofolio.index') }}" class="px-2 py-2.5 text-sm font-medium text-zinc-700">🖥️ Portofolio</a>
        <a href="{{ route('faq.index') }}" class="px-2 py-2.5 text-sm font-medium text-zinc-700">❓ FAQ</a>
        <a href="{{ route('jasa-website') }}" class="px-2 py-2.5 text-sm font-medium text-zinc-700">Jasa Website</a>
        <a href="{{ route('blog.index') }}" class="px-2 py-2.5 text-sm font-medium text-zinc-700">Blog</a>
        <a href="https://lynk.id/barizaloka" target="_blank" rel="noopener" class="px-2 py-2.5 text-sm font-medium text-zinc-700">Etalase Karya</a>
        <a href="https://contohdesain.web.id" target="_blank" rel="noopener" class="px-2 py-2.5 text-sm font-medium text-zinc-700">Contoh Desain</a>
        <a href="{{ route('kontak') }}" class="px-2 py-2.5 text-sm font-semibold text-brand-primary">Hubungi Kami</a>
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
