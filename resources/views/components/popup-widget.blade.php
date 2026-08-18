@php $popup = \App\Support\PopupMatcher::current(); @endphp
@if ($popup && $popup->slides->isNotEmpty())
    <div
        id="site-popup"
        class="fixed inset-0 z-[9998] hidden items-center justify-center p-4"
        data-popup-delay="{{ $popup->delay_seconds }}"
    >
        <div id="site-popup-backdrop" class="absolute inset-0 bg-black/50"></div>

        <div class="relative z-10 w-full max-w-lg overflow-hidden rounded-xl bg-white shadow-xl">
            <button
                type="button"
                onclick="closePopup()"
                class="absolute top-2 right-2 z-20 flex h-8 w-8 items-center justify-center rounded-full bg-black/50 text-white hover:bg-black/70"
                aria-label="Tutup"
            >
                &times;
            </button>

            <div id="site-popup-slides" class="relative">
                @foreach ($popup->slides as $slide)
                    <div
                        class="site-popup-slide {{ $loop->first ? '' : 'hidden' }}"
                        data-slide-index="{{ $loop->index }}"
                    >
                        @if ($slide->type === 'video')
                            <video
                                src="{{ Illuminate\Support\Facades\Storage::disk('public')->url($slide->media_path) }}"
                                class="max-h-[80vh] w-full object-contain"
                                controls
                                playsinline
                            ></video>
                        @else
                            <img
                                src="{{ Illuminate\Support\Facades\Storage::disk('public')->url($slide->media_path) }}"
                                alt="{{ $slide->button_label ?? $popup->name }}"
                                class="max-h-[80vh] w-full object-contain"
                            >
                        @endif

                        @if ($slide->button_url)
                            <div class="p-4 text-center">
                                <a
                                    href="{{ $slide->button_url }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="inline-block rounded-lg bg-blue-600 px-6 py-2 font-semibold text-white hover:bg-blue-700"
                                >
                                    {{ $slide->button_label ?: 'Selengkapnya' }}
                                </a>
                            </div>
                        @endif
                    </div>
                @endforeach

                @if ($popup->slides->count() > 1)
                    <button
                        type="button"
                        id="site-popup-prev"
                        class="absolute top-1/2 left-2 z-20 flex h-8 w-8 -translate-y-1/2 items-center justify-center rounded-full bg-black/50 text-white hover:bg-black/70"
                        aria-label="Sebelumnya"
                    >
                        &#8249;
                    </button>
                    <button
                        type="button"
                        id="site-popup-next"
                        class="absolute top-1/2 right-2 z-20 flex h-8 w-8 -translate-y-1/2 items-center justify-center rounded-full bg-black/50 text-white hover:bg-black/70"
                        aria-label="Berikutnya"
                    >
                        &#8250;
                    </button>
                @endif
            </div>
        </div>
    </div>

    <script>
        (function () {
            const popup = document.getElementById('site-popup');
            if (!popup) return;

            const delay = parseInt(popup.dataset.popupDelay, 10) || 0;
            const slides = Array.from(document.querySelectorAll('.site-popup-slide'));
            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle('hidden', i !== index);
                });
                currentSlide = index;
            }

            const prevButton = document.getElementById('site-popup-prev');
            if (prevButton) {
                prevButton.addEventListener('click', function () {
                    showSlide((currentSlide - 1 + slides.length) % slides.length);
                });
            }

            const nextButton = document.getElementById('site-popup-next');
            if (nextButton) {
                nextButton.addEventListener('click', function () {
                    showSlide((currentSlide + 1) % slides.length);
                });
            }

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
