<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    @include('partials.head')
</head>
<body class="min-h-screen bg-zinc-100 text-zinc-900 dark:bg-zinc-900 dark:text-zinc-100 font-sans antialiased">
    <flux:sidebar sticky collapsible="mobile" class="border-e border-zinc-200 bg-zinc-50 dark:border-zinc-800 dark:bg-zinc-950">
        <flux:sidebar.header class="flex items-center gap-2 px-2 py-3">
            <a href="{{ route('admin-v2.dashboard') }}" class="flex items-center gap-2 font-bold text-lg text-emerald-600 dark:text-emerald-400">
                <span class="bg-emerald-600 text-white p-1.5 rounded-lg font-black text-xs">V2</span>
                <span>Barizaloka Admin</span>
            </a>
            <flux:sidebar.collapse class="lg:hidden" />
        </flux:sidebar.header>

        <flux:sidebar.nav>
            <flux:sidebar.group heading="Utama" class="grid">
                <flux:sidebar.item icon="home" :href="route('admin-v2.dashboard')" :current="request()->routeIs('admin-v2.dashboard')" wire:navigate>
                    Dashboard
                </flux:sidebar.item>
            </flux:sidebar.group>

            <flux:sidebar.group heading="Konten & Blog" class="grid">
                <flux:sidebar.item icon="document-text" :href="route('admin-v2.posts.index')" :current="request()->routeIs('admin-v2.posts.*')" wire:navigate>
                    Postingan Blog
                </flux:sidebar.item>
                <flux:sidebar.item icon="folder" :href="route('admin-v2.categories.index')" :current="request()->routeIs('admin-v2.categories.*')" wire:navigate>
                    Kategori
                </flux:sidebar.item>
                <flux:sidebar.item icon="tag" :href="route('admin-v2.tags.index')" :current="request()->routeIs('admin-v2.tags.*')" wire:navigate>
                    Tag
                </flux:sidebar.item>
            </flux:sidebar.group>

            <flux:sidebar.group heading="Layanan & Portofolio" class="grid">
                <flux:sidebar.item icon="briefcase" :href="route('admin-v2.projects.index')" :current="request()->routeIs('admin-v2.projects.*')" wire:navigate>
                    Portofolio Proyek
                </flux:sidebar.item>
                <flux:sidebar.item icon="cube" :href="route('admin-v2.package-jasa-websites.index')" :current="request()->routeIs('admin-v2.package-jasa-websites.*')" wire:navigate>
                    Paket Jasa Website
                </flux:sidebar.item>
                <flux:sidebar.item icon="user-group" :href="route('admin-v2.partners.index')" :current="request()->routeIs('admin-v2.partners.*')" wire:navigate>
                    Partner & Klien
                </flux:sidebar.item>
                <flux:sidebar.item icon="question-mark-circle" :href="route('admin-v2.faqs.index')" :current="request()->routeIs('admin-v2.faqs.*')" wire:navigate>
                    FAQ
                </flux:sidebar.item>
            </flux:sidebar.group>

            <flux:sidebar.group heading="Pemasaran & Media" class="grid">
                <flux:sidebar.item icon="sparkles" :href="route('admin-v2.popups.index')" :current="request()->routeIs('admin-v2.popups.*')" wire:navigate>
                    Popup Promo
                </flux:sidebar.item>
                <flux:sidebar.item icon="photo" :href="route('admin-v2.media.index')" :current="request()->routeIs('admin-v2.media.*')" wire:navigate>
                    Media Library
                </flux:sidebar.item>
            </flux:sidebar.group>
        </flux:sidebar.nav>

        <flux:spacer />

        <flux:sidebar.nav>
            <flux:sidebar.item icon="globe-alt" href="{{ route('home') }}" target="_blank">
                Lihat Situs Website
            </flux:sidebar.item>
        </flux:sidebar.nav>

        <x-desktop-user-menu class="hidden lg:block" :name="auth()->user()->name" />
    </flux:sidebar>

    <!-- Mobile Header -->
    <flux:header class="lg:hidden border-b border-zinc-200 dark:border-zinc-800 bg-white dark:bg-zinc-900 px-4 py-2">
        <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />
        <span class="font-semibold text-sm">Admin V2</span>
        <flux:spacer />
        <flux:dropdown position="top" align="end">
            <flux:profile :initials="auth()->user()->initials()" icon-trailing="chevron-down" />
            <flux:menu>
                <flux:menu.item :href="route('home')" icon="globe-alt" target="_blank">Lihat Website</flux:menu.item>
                <flux:menu.separator />
                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full text-start">
                        Log out
                    </flux:menu.item>
                </form>
            </flux:menu>
        </flux:dropdown>
    </flux:header>

    <flux:main class="p-6">
        @if (session('success'))
            <div class="mb-4 p-4 rounded-xl bg-emerald-50 text-emerald-800 dark:bg-emerald-950/50 dark:text-emerald-300 border border-emerald-200 dark:border-emerald-800 flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <flux:icon name="check-circle" class="size-5 text-emerald-600 dark:text-emerald-400" />
                    <span>{{ session('success') }}</span>
                </div>
            </div>
        @endif

        @if (session('error'))
            <div class="mb-4 p-4 rounded-xl bg-rose-50 text-rose-800 dark:bg-rose-950/50 dark:text-rose-300 border border-rose-200 dark:border-rose-800 flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <flux:icon name="exclamation-circle" class="size-5 text-rose-600 dark:text-rose-400" />
                    <span>{{ session('error') }}</span>
                </div>
            </div>
        @endif

        {{ $slot }}
    </flux:main>

    @persist('toast')
        <flux:toast.group>
            <flux:toast />
        </flux:toast.group>
    @endpersist

    @fluxScripts
</body>
</html>
