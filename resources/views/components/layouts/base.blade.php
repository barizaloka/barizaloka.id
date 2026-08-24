<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name', 'Barizaloka') }}</title>
    <meta name="description" content="{{ $description ?? config('app.default_description') }}">

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    {{-- PWA Meta Tags & Manifest --}}
    <link rel="manifest" href="/site.webmanifest">
    <meta name="theme-color" content="#0f172a">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="Barizaloka">

    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="robots" content="{{ $robots ?? 'index, follow' }}">

    {{-- Open Graph (WhatsApp, Facebook, dll) --}}
    <meta property="og:type" content="{{ $ogType ?? 'website' }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title ?? config('app.name', 'Barizaloka') }}">
    <meta property="og:description" content="{{ $description ?? config('app.default_description') }}">
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
    <meta name="twitter:description" content="{{ $description ?? config('app.default_description') }}">
    <meta name="twitter:image" content="{{ $ogImage ?? url('/og-image.png') }}">
    <meta name="twitter:image:alt" content="{{ $title ?? config('app.name', 'Barizaloka') }}">

    <script type="application/ld+json">
        {!! json_encode([
            '@@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => 'Barizaloka',
            'url' => url('/'),
            'logo' => url('/favicon.svg'),
            'description' => config('app.default_description'),
            'email' => 'barizaloka@gmail.com',
            'telephone' => '+6285188158542',
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'Rembang',
                'addressRegion' => 'Jawa Tengah',
                'addressCountry' => 'ID',
            ],
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{ $head ?? '' }}
</head>
<body class="bg-white text-[#1a2420] antialiased font-brand-sans" style="font-family: 'Plus Jakarta Sans', 'Segoe UI', sans-serif;">

    <x-navbar />

    {{-- Main content --}}
    <main class="pt-17">
        {{ $slot }}
    </main>

    <x-footer />

    {{-- WhatsApp Float Button --}}
    <a href="https://wa.me/6285188158542?text=Salam%2C%20saya%20ingin%20bertanya%20sesuatu..." target="_blank" rel="noopener"
       class="fixed bottom-7 right-7 z-[9999] flex items-center gap-2.5 bg-[#25D366] text-white rounded-full py-3 pl-3.5 pr-5 shadow-lg shadow-green-900/20 text-sm font-semibold hover:bg-[#1ebe5d] hover:-translate-y-1 transition-all max-w-[200px] overflow-hidden max-sm:p-3 max-sm:rounded-full max-sm:max-w-none"
       aria-label="Chat WhatsApp">
        <svg class="size-6.5 fill-white shrink-0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
        </svg>
        <span class="whitespace-nowrap max-sm:hidden">Chat WhatsApp</span>
    </a>

    <x-pwa-install-banner />
    <x-popup-widget />

    @stack('scripts')
    <script src="https://analytics.ahrefs.com/analytics.js" data-key="QT3vkVW4ywuJBzCorYjTGQ" async></script>
</body>
</html>
