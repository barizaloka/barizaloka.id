<x-layouts.base
    title="Komunitas — Barizaloka"
    description="Kenali 4 komunitas aktif Barizaloka: Astro Sedan, Astraloka, Baricode, dan Self Reminder. Bersama membangun dampak nyata di bidang lingkungan, teknologi, dan spiritual."
>

    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-16px) rotate(5deg); }
        }
        @keyframes float-alt {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-12px) rotate(-5deg); }
        }
        @keyframes slide-up {
            from { opacity: 0; transform: translateY(24px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fade-in {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .float-1 { animation: float 6s ease-in-out infinite; }
        .float-2 { animation: float-alt 7s ease-in-out infinite; animation-delay: 1s; }
        .float-3 { animation: float 5.5s ease-in-out infinite; animation-delay: 2s; }
        .float-4 { animation: float-alt 8s ease-in-out infinite; animation-delay: 0.5s; }
        .float-5 { animation: float 9s ease-in-out infinite; animation-delay: 3s; }
        .float-6 { animation: float-alt 6.5s ease-in-out infinite; animation-delay: 1.5s; }
        .anim-up-1 { animation: slide-up 0.7s ease-out 0.05s both; }
        .anim-up-2 { animation: slide-up 0.7s ease-out 0.2s both; }
        .anim-up-3 { animation: slide-up 0.7s ease-out 0.35s both; }
        .anim-up-4 { animation: slide-up 0.7s ease-out 0.5s both; }
        .gradient-text {
            background: linear-gradient(135deg, #6366f1, #8b5cf6, #ec4899, #f97316);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .card-hover {
            transition: transform 0.3s cubic-bezier(.22,.68,0,1.2), box-shadow 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-6px);
        }
    </style>

    {{-- Hero --}}
    <section class="relative overflow-hidden pt-20 pb-20">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_80%_60%_at_50%_0%,rgba(139,92,246,0.15),transparent)]"></div>

        {{-- Blobs --}}
        <div class="absolute top-10 left-8 size-64 rounded-full bg-gradient-to-br from-indigo-200/50 to-purple-200/50 blur-3xl pointer-events-none"></div>
        <div class="absolute top-20 right-8 size-52 rounded-full bg-gradient-to-br from-pink-200/50 to-orange-200/50 blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 left-1/2 -translate-x-1/2 size-96 rounded-full bg-gradient-to-br from-purple-200/30 to-indigo-200/30 blur-3xl pointer-events-none"></div>

        {{-- Floating emojis --}}
        <div class="absolute top-12 left-[6%] text-4xl float-1 select-none pointer-events-none opacity-80">🌙</div>
        <div class="absolute top-24 right-[6%] text-3xl float-2 select-none pointer-events-none opacity-80">💻</div>
        <div class="absolute top-52 left-[3%] text-2xl float-3 select-none pointer-events-none opacity-70">♻️</div>
        <div class="absolute top-16 right-[18%] text-2xl float-4 select-none pointer-events-none opacity-70">📿</div>
        <div class="absolute bottom-20 left-[12%] text-3xl float-5 select-none pointer-events-none opacity-60">🌍</div>
        <div class="absolute bottom-12 right-[10%] text-2xl float-6 select-none pointer-events-none opacity-60">✨</div>
        <div class="absolute top-40 left-[20%] text-xl float-2 select-none pointer-events-none opacity-50">🔭</div>
        <div class="absolute top-44 right-[22%] text-xl float-3 select-none pointer-events-none opacity-50">🚀</div>

        <div class="relative max-w-4xl mx-auto px-6 text-center flex flex-col items-center gap-5">
            {{-- Back link --}}
            <a href="{{ route('home') }}" class="anim-up-1 inline-flex items-center gap-2 text-sm text-zinc-500 hover:text-zinc-700 transition-colors self-center">
                <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Kembali ke Beranda
            </a>

            <span class="anim-up-1 inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/80 backdrop-blur-sm border border-purple-200 text-xs font-semibold text-purple-700 shadow-sm">
                <span class="size-2 rounded-full bg-green-500 animate-pulse"></span>
                🏘️ 4 Komunitas Aktif
            </span>

            <h1 class="anim-up-2 text-4xl md:text-6xl font-bold leading-tight tracking-tight text-zinc-900">
                Komunitas<br>
                <span class="gradient-text">Barizaloka 🌟</span>
            </h1>

            <p class="anim-up-3 text-lg text-zinc-600 max-w-2xl leading-relaxed">
                Empat pilar komunitas yang lahir dari semangat pemuda Desa Sedan. Masing-masing bergerak di bidang berbeda, namun bersatu dalam satu misi — <strong class="text-zinc-800">menciptakan dampak nyata</strong> yang positif.
            </p>

            {{-- Stats --}}
            <div class="anim-up-4 flex flex-wrap justify-center gap-4 mt-2">
                <div class="flex items-center gap-2 px-5 py-3 rounded-2xl bg-white/80 backdrop-blur-sm border border-zinc-200 shadow-sm">
                    <span class="text-2xl">🏘️</span>
                    <div class="text-left">
                        <p class="text-xl font-bold text-zinc-900 leading-none">4</p>
                        <p class="text-xs text-zinc-500 mt-0.5">Komunitas</p>
                    </div>
                </div>
                <div class="flex items-center gap-2 px-5 py-3 rounded-2xl bg-white/80 backdrop-blur-sm border border-zinc-200 shadow-sm">
                    <span class="text-2xl">👥</span>
                    <div class="text-left">
                        <p class="text-xl font-bold text-zinc-900 leading-none">100+</p>
                        <p class="text-xs text-zinc-500 mt-0.5">Anggota</p>
                    </div>
                </div>
                <div class="flex items-center gap-2 px-5 py-3 rounded-2xl bg-white/80 backdrop-blur-sm border border-zinc-200 shadow-sm">
                    <span class="text-2xl">🌾</span>
                    <div class="text-left">
                        <p class="text-xl font-bold text-zinc-900 leading-none">2021</p>
                        <p class="text-xs text-zinc-500 mt-0.5">Berdiri</p>
                    </div>
                </div>
                <div class="flex items-center gap-2 px-5 py-3 rounded-2xl bg-white/80 backdrop-blur-sm border border-zinc-200 shadow-sm">
                    <span class="text-2xl">📍</span>
                    <div class="text-left">
                        <p class="text-xl font-bold text-zinc-900 leading-none">Sedan</p>
                        <p class="text-xs text-zinc-500 mt-0.5">Rembang, Jateng</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Community Cards --}}
    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6">

            <div class="flex flex-col gap-8">

                {{-- Astraloka --}}
                <div class="card-hover group rounded-3xl border border-green-100 overflow-hidden shadow-lg shadow-green-50 hover:shadow-2xl hover:shadow-green-100 hover:border-green-200">
                    <div class="grid grid-cols-1 lg:grid-cols-5">
                        {{-- Left / Header panel --}}
                        <div class="lg:col-span-2 relative bg-gradient-to-br from-green-400 via-emerald-500 to-teal-600 p-10 flex flex-col justify-between min-h-60 lg:min-h-auto overflow-hidden">
                            {{-- BG blobs --}}
                            <div class="absolute top-0 right-0 size-48 rounded-full bg-white/10 blur-3xl"></div>
                            <div class="absolute bottom-0 left-0 size-32 rounded-full bg-emerald-300/20 blur-2xl"></div>

                            <div class="relative">
                                <div class="size-18 rounded-2xl bg-white/20 backdrop-blur-sm border border-white/30 flex items-center justify-center text-5xl shadow-lg mb-6">
                                    🌍
                                </div>
                                <h2 class="text-3xl font-bold text-white mb-2">Astraloka</h2>
                                <p class="text-green-100 font-medium text-sm">🌱 Komunitas Peduli Alam</p>
                            </div>

                            <div class="relative flex flex-wrap gap-2 mt-6">
                                <span class="px-3 py-1 rounded-full bg-white/20 backdrop-blur-sm border border-white/30 text-white text-xs font-semibold">♻️ Daur Ulang</span>
                                <span class="px-3 py-1 rounded-full bg-white/20 backdrop-blur-sm border border-white/30 text-white text-xs font-semibold">🌿 Lingkungan</span>
                                <span class="px-3 py-1 rounded-full bg-white/20 backdrop-blur-sm border border-white/30 text-white text-xs font-semibold">🤝 Aksi Sosial</span>
                            </div>
                        </div>

                        {{-- Right / Content panel --}}
                        <div class="lg:col-span-3 p-8 lg:p-10 flex flex-col gap-6 bg-white">
                            <div>
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-bold uppercase tracking-wide">● Aktif</span>
                                    <span class="text-xs text-zinc-400">astraloka.my.id</span>
                                </div>
                                <p class="text-zinc-600 leading-relaxed text-base">
                                    Astraloka adalah komunitas yang bergerak dalam edukasi lingkungan hidup dan aksi sosial nyata. Dari kampanye daur ulang hingga program pengelolaan sampah berkelanjutan, Astraloka percaya bahwa menjaga bumi adalah tanggung jawab bersama.
                                </p>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                                <div class="flex items-start gap-3 p-4 rounded-2xl bg-green-50 border border-green-100">
                                    <span class="text-2xl">♻️</span>
                                    <div>
                                        <p class="text-sm font-semibold text-zinc-800">Edukasi Daur Ulang</p>
                                        <p class="text-xs text-zinc-500 mt-0.5">Pelatihan & kampanye</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3 p-4 rounded-2xl bg-green-50 border border-green-100">
                                    <span class="text-2xl">🤝</span>
                                    <div>
                                        <p class="text-sm font-semibold text-zinc-800">Aksi Sosial</p>
                                        <p class="text-xs text-zinc-500 mt-0.5">Gotong royong lingkungan</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3 p-4 rounded-2xl bg-green-50 border border-green-100">
                                    <span class="text-2xl">🗑️</span>
                                    <div>
                                        <p class="text-sm font-semibold text-zinc-800">Kelola Sampah</p>
                                        <p class="text-xs text-zinc-500 mt-0.5">Program berkelanjutan</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center gap-3 mt-auto pt-2">
                                <a href="https://astraloka.my.id" target="_blank" rel="noopener noreferrer"
                                   class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-green-500 to-emerald-600 text-white font-semibold text-sm hover:from-green-400 hover:to-emerald-500 hover:-translate-y-0.5 transition-all duration-200 shadow-md shadow-green-200">
                                    🌍 Kunjungi Astraloka
                                    <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Baricode --}}
                <div class="card-hover group rounded-3xl border border-blue-100 overflow-hidden shadow-lg shadow-blue-50 hover:shadow-2xl hover:shadow-blue-100 hover:border-blue-200">
                    <div class="grid grid-cols-1 lg:grid-cols-5">
                        {{-- Content panel (left on even cards) --}}
                        <div class="lg:col-span-3 p-8 lg:p-10 flex flex-col gap-6 bg-white order-2 lg:order-1">
                            <div>
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-xs font-bold uppercase tracking-wide">● Aktif</span>
                                    <span class="text-xs text-zinc-400">baricode.org</span>
                                </div>
                                <p class="text-zinc-600 leading-relaxed text-base">
                                    Baricode adalah ruang belajar kolaboratif bagi para developer dan tech enthusiast. Dari web development hingga open source projects, Baricode menjadi jembatan antara pemula yang ingin belajar dan profesional yang ingin berbagi ilmu.
                                </p>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                                <div class="flex items-start gap-3 p-4 rounded-2xl bg-blue-50 border border-blue-100">
                                    <span class="text-2xl">📚</span>
                                    <div>
                                        <p class="text-sm font-semibold text-zinc-800">Belajar Terstruktur</p>
                                        <p class="text-xs text-zinc-500 mt-0.5">Mandiri & terbimbing</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3 p-4 rounded-2xl bg-blue-50 border border-blue-100">
                                    <span class="text-2xl">🚀</span>
                                    <div>
                                        <p class="text-sm font-semibold text-zinc-800">Proyek Kolaboratif</p>
                                        <p class="text-xs text-zinc-500 mt-0.5">Build real products</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3 p-4 rounded-2xl bg-blue-50 border border-blue-100">
                                    <span class="text-2xl">🌐</span>
                                    <div>
                                        <p class="text-sm font-semibold text-zinc-800">Jaringan Developer</p>
                                        <p class="text-xs text-zinc-500 mt-0.5">Koneksi & mentorship</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center gap-3 mt-auto pt-2">
                                <a href="https://baricode.org" target="_blank" rel="noopener noreferrer"
                                   class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-semibold text-sm hover:from-blue-400 hover:to-indigo-500 hover:-translate-y-0.5 transition-all duration-200 shadow-md shadow-blue-200">
                                    💻 Kunjungi Baricode
                                    <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        {{-- Header panel (right on even cards) --}}
                        <div class="lg:col-span-2 relative bg-gradient-to-br from-blue-400 via-indigo-500 to-violet-600 p-10 flex flex-col justify-between min-h-60 lg:min-h-auto overflow-hidden order-1 lg:order-2">
                            <div class="absolute top-0 right-0 size-48 rounded-full bg-white/10 blur-3xl"></div>
                            <div class="absolute bottom-0 left-0 size-32 rounded-full bg-indigo-300/20 blur-2xl"></div>

                            <div class="relative">
                                <div class="size-18 rounded-2xl bg-white/20 backdrop-blur-sm border border-white/30 flex items-center justify-center text-5xl shadow-lg mb-6">
                                    💻
                                </div>
                                <h2 class="text-3xl font-bold text-white mb-2">Baricode</h2>
                                <p class="text-blue-100 font-medium text-sm">🖥️ Komunitas Belajar IT</p>
                            </div>

                            <div class="relative flex flex-wrap gap-2 mt-6">
                                <span class="px-3 py-1 rounded-full bg-white/20 backdrop-blur-sm border border-white/30 text-white text-xs font-semibold">⌨️ Coding</span>
                                <span class="px-3 py-1 rounded-full bg-white/20 backdrop-blur-sm border border-white/30 text-white text-xs font-semibold">🧑‍💻 Developer</span>
                                <span class="px-3 py-1 rounded-full bg-white/20 backdrop-blur-sm border border-white/30 text-white text-xs font-semibold">🌐 Tech</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Self Reminder --}}
                <div class="card-hover group rounded-3xl border border-purple-100 overflow-hidden shadow-lg shadow-purple-50 hover:shadow-2xl hover:shadow-purple-100 hover:border-purple-200">
                    <div class="grid grid-cols-1 lg:grid-cols-5">
                        {{-- Left / Header panel --}}
                        <div class="lg:col-span-2 relative bg-gradient-to-br from-purple-400 via-violet-500 to-fuchsia-600 p-10 flex flex-col justify-between min-h-60 lg:min-h-auto overflow-hidden">
                            <div class="absolute top-0 right-0 size-48 rounded-full bg-white/10 blur-3xl"></div>
                            <div class="absolute bottom-0 left-0 size-32 rounded-full bg-violet-300/20 blur-2xl"></div>

                            <div class="relative">
                                <div class="size-18 rounded-2xl bg-white/20 backdrop-blur-sm border border-white/30 flex items-center justify-center text-5xl shadow-lg mb-6">
                                    📿
                                </div>
                                <h2 class="text-3xl font-bold text-white mb-2">Self Reminder</h2>
                                <p class="text-purple-100 font-medium text-sm">🕌 Pengingat Menuju Akhirat</p>
                            </div>

                            <div class="relative flex flex-wrap gap-2 mt-6">
                                <span class="px-3 py-1 rounded-full bg-white/20 backdrop-blur-sm border border-white/30 text-white text-xs font-semibold">🌙 Spiritual</span>
                                <span class="px-3 py-1 rounded-full bg-white/20 backdrop-blur-sm border border-white/30 text-white text-xs font-semibold">💭 Muhasabah</span>
                                <span class="px-3 py-1 rounded-full bg-white/20 backdrop-blur-sm border border-white/30 text-white text-xs font-semibold">🤲 Ibadah</span>
                            </div>
                        </div>

                        {{-- Right / Content panel --}}
                        <div class="lg:col-span-3 p-8 lg:p-10 flex flex-col gap-6 bg-white">
                            <div>
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="px-3 py-1 rounded-full bg-purple-100 text-purple-700 text-xs font-bold uppercase tracking-wide">● Aktif</span>
                                    <span class="text-xs text-zinc-400">selfreminder.org</span>
                                </div>
                                <p class="text-zinc-600 leading-relaxed text-base">
                                    Self Reminder adalah ruang refleksi spiritual yang hadir untuk membantu menjaga kesadaran diri sehari-hari. Dengan pengingat islami, fitur muhasabah, dan pantauan ibadah, komunitas ini mengajak kita untuk selalu ingat tujuan akhir hidup.
                                </p>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                                <div class="flex items-start gap-3 p-4 rounded-2xl bg-purple-50 border border-purple-100">
                                    <span class="text-2xl">🌙</span>
                                    <div>
                                        <p class="text-sm font-semibold text-zinc-800">Pengingat Harian</p>
                                        <p class="text-xs text-zinc-500 mt-0.5">Notifikasi islami</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3 p-4 rounded-2xl bg-purple-50 border border-purple-100">
                                    <span class="text-2xl">💭</span>
                                    <div>
                                        <p class="text-sm font-semibold text-zinc-800">Muhasabah</p>
                                        <p class="text-xs text-zinc-500 mt-0.5">Refleksi & evaluasi diri</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3 p-4 rounded-2xl bg-purple-50 border border-purple-100">
                                    <span class="text-2xl">📊</span>
                                    <div>
                                        <p class="text-sm font-semibold text-zinc-800">Progres Ibadah</p>
                                        <p class="text-xs text-zinc-500 mt-0.5">Pantau & tingkatkan</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center gap-3 mt-auto pt-2">
                                <a href="https://selfreminder.org" target="_blank" rel="noopener noreferrer"
                                   class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-purple-500 to-violet-600 text-white font-semibold text-sm hover:from-purple-400 hover:to-violet-500 hover:-translate-y-0.5 transition-all duration-200 shadow-md shadow-purple-200">
                                    📿 Kunjungi Self Reminder
                                    <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Astro Sedan --}}
                <div class="card-hover group rounded-3xl border border-amber-100 overflow-hidden shadow-lg shadow-amber-50 hover:shadow-2xl hover:shadow-amber-100 hover:border-amber-200">
                    <div class="grid grid-cols-1 lg:grid-cols-5">
                        {{-- Content panel (left) --}}
                        <div class="lg:col-span-3 p-8 lg:p-10 flex flex-col gap-6 bg-white order-2 lg:order-1">
                            <div>
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="px-3 py-1 rounded-full bg-amber-100 text-amber-700 text-xs font-bold uppercase tracking-wide">⏳ Segera Hadir</span>
                                    <span class="text-xs text-zinc-400">in development</span>
                                </div>
                                <p class="text-zinc-600 leading-relaxed text-base">
                                    Astro Sedan adalah komunitas belajar ilmu falak dan astronomi Islam. Bersama para pecinta langit dan ulama, komunitas ini membuka ruang untuk memahami bagaimana Islam memandang waktu—dari pengamatan hilal hingga penetapan arah kiblat yang tepat.
                                </p>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                                <div class="flex items-start gap-3 p-4 rounded-2xl bg-amber-50 border border-amber-100">
                                    <span class="text-2xl">🌙</span>
                                    <div>
                                        <p class="text-sm font-semibold text-zinc-800">Pengamatan Hilal</p>
                                        <p class="text-xs text-zinc-500 mt-0.5">Kalender Hijriah</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3 p-4 rounded-2xl bg-amber-50 border border-amber-100">
                                    <span class="text-2xl">⭐</span>
                                    <div>
                                        <p class="text-sm font-semibold text-zinc-800">Ilmu Falak</p>
                                        <p class="text-xs text-zinc-500 mt-0.5">Astronomi Islam</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3 p-4 rounded-2xl bg-amber-50 border border-amber-100">
                                    <span class="text-2xl">🧭</span>
                                    <div>
                                        <p class="text-sm font-semibold text-zinc-800">Arah Kiblat</p>
                                        <p class="text-xs text-zinc-500 mt-0.5">Waktu shalat akurat</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center gap-3 mt-auto pt-2">
                                <span class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-zinc-100 text-zinc-400 font-semibold text-sm cursor-not-allowed select-none">
                                    🔭 Website Segera Hadir
                                </span>
                                <span class="px-3 py-2 rounded-xl bg-amber-50 border border-amber-200 text-amber-700 text-xs font-semibold">
                                    🚧 In Development
                                </span>
                            </div>
                        </div>

                        {{-- Header panel (right) --}}
                        <div class="lg:col-span-2 relative bg-gradient-to-br from-amber-400 via-orange-500 to-red-500 p-10 flex flex-col justify-between min-h-60 lg:min-h-auto overflow-hidden order-1 lg:order-2">
                            <div class="absolute top-0 right-0 size-48 rounded-full bg-white/10 blur-3xl"></div>
                            <div class="absolute bottom-0 left-0 size-32 rounded-full bg-orange-300/20 blur-2xl"></div>

                            <div class="relative">
                                <div class="size-18 rounded-2xl bg-white/20 backdrop-blur-sm border border-white/30 flex items-center justify-center text-5xl shadow-lg mb-6">
                                    🌙
                                </div>
                                <h2 class="text-3xl font-bold text-white mb-2">Astro Sedan</h2>
                                <p class="text-amber-100 font-medium text-sm">🔭 Komunitas Belajar Falak</p>
                            </div>

                            <div class="relative flex flex-wrap gap-2 mt-6">
                                <span class="px-3 py-1 rounded-full bg-white/20 backdrop-blur-sm border border-white/30 text-white text-xs font-semibold">🌙 Falak</span>
                                <span class="px-3 py-1 rounded-full bg-white/20 backdrop-blur-sm border border-white/30 text-white text-xs font-semibold">⭐ Astronomi</span>
                                <span class="px-3 py-1 rounded-full bg-white/20 backdrop-blur-sm border border-white/30 text-white text-xs font-semibold">🕌 Islam</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Values strip --}}
    <section class="py-16 bg-gradient-to-r from-zinc-900 via-zinc-800 to-zinc-900 border-y border-zinc-800">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="flex items-center gap-4 p-6 rounded-2xl bg-white/5 border border-white/10">
                    <span class="text-3xl">🤝</span>
                    <div>
                        <p class="font-bold text-white text-sm">Kolaboratif</p>
                        <p class="text-zinc-400 text-xs mt-0.5">Setiap anggota berkontribusi dan saling menguatkan</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 p-6 rounded-2xl bg-white/5 border border-white/10">
                    <span class="text-3xl">💡</span>
                    <div>
                        <p class="font-bold text-white text-sm">Inovatif</p>
                        <p class="text-zinc-400 text-xs mt-0.5">Teknologi untuk memecahkan masalah nyata</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 p-6 rounded-2xl bg-white/5 border border-white/10">
                    <span class="text-3xl">🌱</span>
                    <div>
                        <p class="font-bold text-white text-sm">Berdampak</p>
                        <p class="text-zinc-400 text-xs mt-0.5">Dampak nyata di lingkungan, ilmu, dan spiritual</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-20 bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 relative overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_80%_60%_at_50%_50%,rgba(255,255,255,0.1),transparent)] pointer-events-none"></div>
        <div class="absolute top-6 left-[8%] text-4xl float-1 opacity-30 select-none pointer-events-none">🎯</div>
        <div class="absolute bottom-6 right-[8%] text-4xl float-2 opacity-30 select-none pointer-events-none">🌟</div>
        <div class="absolute top-8 right-[22%] text-3xl float-3 opacity-25 select-none pointer-events-none">💪</div>
        <div class="absolute bottom-8 left-[22%] text-3xl float-4 opacity-25 select-none pointer-events-none">✨</div>

        <div class="relative max-w-3xl mx-auto px-6 text-center flex flex-col items-center gap-6">
            <span class="text-5xl animate-bounce">🚀</span>
            <h2 class="text-3xl md:text-4xl font-bold text-white leading-tight">
                Ingin Bergabung atau<br>Berkolaborasi?
            </h2>
            <p class="text-white/80 text-lg">
                Hubungi kami dan jadilah bagian dari gerakan positif bersama Barizaloka. 💪
            </p>
            <div class="flex flex-col sm:flex-row items-center gap-3">
                <a href="{{ route('home') }}#kontak"
                   class="px-8 py-4 rounded-xl bg-white text-indigo-700 font-bold text-sm hover:bg-indigo-50 hover:-translate-y-1 hover:shadow-xl transition-all duration-200 shadow-lg">
                    💬 Hubungi Kami
                </a>
                <a href="{{ route('solusi') }}"
                   class="px-8 py-4 rounded-xl bg-white/20 backdrop-blur-sm border border-white/40 text-white font-bold text-sm hover:bg-white/30 hover:-translate-y-1 transition-all duration-200">
                    💡 Lihat Solusi Kami
                </a>
            </div>
        </div>
    </section>

</x-layouts.base>
