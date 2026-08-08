@props(['items'])

<nav {{ $attributes->class(['mb-4']) }} aria-label="Breadcrumb">
    <ol class="flex flex-wrap items-center justify-center gap-1.5 text-xs text-white/60">
        @foreach ($items as $index => $item)
            <li class="flex items-center gap-1.5">
                @if (! $loop->last)
                    <a href="{{ $item['url'] }}" class="hover:text-white transition-colors">{{ $item['label'] }}</a>
                    <span aria-hidden="true">/</span>
                @else
                    <span class="text-white/85" aria-current="page">{{ $item['label'] }}</span>
                @endif
            </li>
        @endforeach
    </ol>
</nav>
