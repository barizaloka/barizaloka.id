@php $popup = \App\Support\PopupMatcher::current(); @endphp
@if ($popup)
    <div
        id="site-popup"
        class="fixed inset-0 z-[9998] hidden items-center justify-center p-4"
        data-popup-delay="{{ $popup->delay_seconds }}"
    >
        <div id="site-popup-backdrop" class="absolute inset-0 bg-black/50"></div>
        <div class="relative z-10 max-h-full w-full max-w-lg overflow-y-auto">
            {!! $popup->html_content !!}
        </div>
    </div>

    <script>
        (function () {
            const popup = document.getElementById('site-popup');
            if (!popup) return;

            const delay = parseInt(popup.dataset.popupDelay, 10) || 0;

            window.closePopup = function () {
                popup.classList.add('hidden');
                popup.classList.remove('flex');
            };

            const backdrop = document.getElementById('site-popup-backdrop');
            if (backdrop) {
                backdrop.addEventListener('click', window.closePopup);
            }

            window.setTimeout(function () {
                popup.classList.remove('hidden');
                popup.classList.add('flex');
            }, delay * 1000);
        })();
    </script>
@endif
