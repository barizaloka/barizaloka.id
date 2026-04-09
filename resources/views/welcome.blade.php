<x-layouts.base title="Barizaloka — Menghubungkan Komunitas, Membangun Solusi">

    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-18px) rotate(6deg); }
        }
        @keyframes float-alt {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-14px) rotate(-6deg); }
        }
        @keyframes slide-up {
            from { opacity: 0; transform: translateY(28px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .float-1 { animation: float 6s ease-in-out infinite; }
        .float-2 { animation: float-alt 7s ease-in-out infinite; animation-delay: 1s; }
        .float-3 { animation: float 5.5s ease-in-out infinite; animation-delay: 2s; }
        .float-4 { animation: float-alt 8s ease-in-out infinite; animation-delay: 0.5s; }
        .float-5 { animation: float 9s ease-in-out infinite; animation-delay: 3s; }
        .float-6 { animation: float-alt 6.5s ease-in-out infinite; animation-delay: 1.5s; }
        .gradient-text {
            background: linear-gradient(135deg, #6366f1, #8b5cf6, #ec4899, #f97316);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .anim-up-1 { animation: slide-up 0.8s ease-out 0.1s both; }
        .anim-up-2 { animation: slide-up 0.8s ease-out 0.3s both; }
        .anim-up-3 { animation: slide-up 0.8s ease-out 0.5s both; }
        .anim-up-4 { animation: slide-up 0.8s ease-out 0.7s both; }
    </style>

    {{-- Hero --}}
    <section class="relative overflow-hidden pt-24 pb-32">
        {{-- Background --}}
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_80%_60%_at_50%_-10%,rgba(139,92,246,0.18),transparent)]"></div>

        {{-- Color blobs --}}
        <div class="absolute top-16 left-6 size-72 rounded-full bg-gradient-to-br from-indigo-200/40 to-purple-200/40 blur-3xl pointer-events-none"></div>
        <div class="absolute top-32 right-6 size-56 rounded-full bg-gradient-to-br from-pink-200/40 to-orange-200/40 blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 left-1/2 -translate-x-1/2 size-96 rounded-full bg-gradient-to-br from-purple-200/25 to-indigo-200/25 blur-3xl pointer-events-none"></div>

        {{-- Floating emoji decorations --}}
        <div class="absolute top-14 left-[7%] text-4xl float-1 select-none pointer-events-none">🌍</div>
        <div class="absolute top-28 right-[7%] text-3xl float-2 select-none pointer-events-none">💻</div>
        <div class="absolute top-60 left-[4%] text-2xl float-3 select-none pointer-events-none">✨</div>
        <div class="absolute top-20 right-[16%] text-2xl float-4 select-none pointer-events-none">📿</div>
        <div class="absolute bottom-28 left-[11%] text-3xl float-5 select-none pointer-events-none">🚀</div>
        <div class="absolute bottom-16 right-[9%] text-3xl float-6 select-none pointer-events-none">💡</div>
        <div class="absolute top-44 left-[19%] text-xl float-2 select-none pointer-events-none">🌱</div>
        <div class="absolute top-52 right-[19%] text-xl float-3 select-none pointer-events-none">🤝</div>

        <div class="relative max-w-6xl mx-auto px-6 text-center flex flex-col items-center gap-6">
            <span class="anim-up-1 inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/80 backdrop-blur-sm border border-purple-200 text-xs font-semibold text-purple-700 shadow-sm">
                <span class="size-2 rounded-full bg-green-500 animate-pulse"></span>
                🎉 Ekosistem Komunitas Aktif
            </span>

            <h1 class="anim-up-2 text-4xl md:text-6xl font-bold leading-tight tracking-tight max-w-3xl text-zinc-900">
                Menghubungkan Komunitas,<br>
                <span class="gradient-text">Membangun Solusi</span>
            </h1>

            <p class="anim-up-3 text-lg text-zinc-600 max-w-xl leading-relaxed">
                Ekosistem teknologi inovatif yang mendukung komunitas peduli dampak 🌍 lingkungan,
                💻 teknologi, dan ✨ spiritual yang positif.
            </p>

            <div class="anim-up-4 flex items-center gap-3 px-5 py-3 rounded-2xl bg-gradient-to-r from-amber-400 via-orange-400 to-yellow-400 shadow-lg shadow-orange-200 border border-orange-300">
                <span class="text-2xl">🏡</span>
                <p class="text-sm font-bold text-white drop-shadow">
                    Didirikan oleh Pemuda Desa — Kecamatan Sedan, Kabupaten Rembang
                </p>
                <span class="text-2xl">🌾</span>
            </div>

            <div class="anim-up-4 flex flex-col sm:flex-row items-center gap-3 mt-2">
                <a href="#komunitas"
                   class="px-7 py-3.5 rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold text-sm hover:from-indigo-500 hover:to-purple-500 hover:-translate-y-0.5 transition-all duration-200 shadow-lg shadow-indigo-200 hover:shadow-xl hover:shadow-indigo-300">
                    🚀 Jelajahi Komunitas
                </a>
                <a href="#layanan"
                   class="px-7 py-3.5 rounded-xl bg-white border border-zinc-200 text-zinc-700 font-semibold text-sm hover:bg-zinc-50 hover:-translate-y-0.5 transition-all duration-200 shadow-sm">
                    ✨ Lihat Layanan
                </a>
            </div>
        </div>
    </section>

    {{-- Stats --}}
    <section class="border-y border-purple-100 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50">
        <div class="max-w-6xl mx-auto px-6 py-10 grid grid-cols-3 divide-x divide-purple-100">
            <div class="text-center px-4">
                <p class="text-4xl font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">3</p>
                <p class="text-sm text-zinc-500 mt-1">🏘️ Komunitas Aktif</p>
            </div>
            <div class="text-center px-4">
                <p class="text-4xl font-bold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">100+</p>
                <p class="text-sm text-zinc-500 mt-1">👥 Anggota Bergabung</p>
            </div>
            <div class="text-center px-4">
                <p class="text-4xl font-bold bg-gradient-to-r from-pink-600 to-orange-500 bg-clip-text text-transparent">∞</p>
                <p class="text-sm text-zinc-500 mt-1">🌟 Dampak Positif</p>
            </div>
        </div>
    </section>

    {{-- Komunitas --}}
    <section id="komunitas" class="py-24 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center flex flex-col items-center gap-3 mb-16">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-gradient-to-r from-indigo-100 to-purple-100 text-xs font-semibold uppercase tracking-widest text-purple-700">
                    🏘️ Komunitas Kami
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-zinc-900">Tiga Pilar Utama 🌟</h2>
                <p class="text-zinc-500 max-w-lg">Setiap komunitas memiliki fokus yang berbeda namun bersatu dalam satu tujuan: dampak nyata yang positif.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                {{-- Astraloka --}}
                <div class="group flex flex-col gap-5 p-7 rounded-2xl border border-green-100 bg-gradient-to-b from-green-50/60 to-white hover:border-green-300 hover:shadow-xl hover:shadow-green-100 hover:-translate-y-1 transition-all duration-300">
                    <div class="size-14 rounded-2xl bg-gradient-to-br from-green-400 to-emerald-600 flex items-center justify-center text-3xl shadow-lg shadow-green-200 group-hover:scale-110 transition-transform duration-300">
                        🌍
                    </div>
                    <div class="flex flex-col gap-2">
                        <h3 class="text-xl font-bold text-zinc-900">Astraloka</h3>
                        <p class="text-sm font-semibold text-green-600">🌱 Komunitas Peduli Alam</p>
                        <p class="text-sm text-zinc-500 leading-relaxed">
                            Membangun kesadaran lingkungan melalui edukasi daur ulang, aksi sosial, dan program pengelolaan sampah yang berkelanjutan.
                        </p>
                    </div>
                    <ul class="flex flex-col gap-2 mt-auto">
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>♻️</span> Edukasi Daur Ulang
                        </li>
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>🤝</span> Aksi Sosial Lingkungan
                        </li>
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>🗑️</span> Program Pengelolaan Sampah
                        </li>
                    </ul>
                </div>

                {{-- Baricode --}}
                <div class="group flex flex-col gap-5 p-7 rounded-2xl border border-blue-100 bg-gradient-to-b from-blue-50/60 to-white hover:border-blue-300 hover:shadow-xl hover:shadow-blue-100 hover:-translate-y-1 transition-all duration-300">
                    <div class="size-14 rounded-2xl bg-gradient-to-br from-blue-400 to-indigo-600 flex items-center justify-center text-3xl shadow-lg shadow-blue-200 group-hover:scale-110 transition-transform duration-300">
                        💻
                    </div>
                    <div class="flex flex-col gap-2">
                        <h3 class="text-xl font-bold text-zinc-900">Baricode</h3>
                        <p class="text-sm font-semibold text-blue-600">🖥️ Komunitas Belajar IT</p>
                        <p class="text-sm text-zinc-500 leading-relaxed">
                            Ruang belajar mandiri dan kolaboratif bagi para developer—dari pemula hingga profesional yang ingin terus berkembang.
                        </p>
                    </div>
                    <ul class="flex flex-col gap-2 mt-auto">
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>📚</span> Belajar Mandiri & Terstruktur
                        </li>
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>🚀</span> Proyek Kolaboratif
                        </li>
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>🌐</span> Jaringan Developer
                        </li>
                    </ul>
                </div>

                {{-- Self Reminder --}}
                <div class="group flex flex-col gap-5 p-7 rounded-2xl border border-purple-100 bg-gradient-to-b from-purple-50/60 to-white hover:border-purple-300 hover:shadow-xl hover:shadow-purple-100 hover:-translate-y-1 transition-all duration-300">
                    <div class="size-14 rounded-2xl bg-gradient-to-br from-purple-400 to-violet-600 flex items-center justify-center text-3xl shadow-lg shadow-purple-200 group-hover:scale-110 transition-transform duration-300">
                        📿
                    </div>
                    <div class="flex flex-col gap-2">
                        <h3 class="text-xl font-bold text-zinc-900">Self Reminder</h3>
                        <p class="text-sm font-semibold text-purple-600">🕌 Pengingat Diri Menuju Akhirat</p>
                        <p class="text-sm text-zinc-500 leading-relaxed">
                            Ruang refleksi spiritual yang menyediakan pengingat harian, muhasabah diri, dan wawasan untuk perjalanan menuju akhirat.
                        </p>
                    </div>
                    <ul class="flex flex-col gap-2 mt-auto">
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>🌙</span> Pengingat Spiritual Harian
                        </li>
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>💭</span> Muhasabah & Refleksi Diri
                        </li>
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span>📊</span> Pantauan Progres Ibadah
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Nilai --}}
    <section class="py-24 bg-gradient-to-br from-zinc-900 via-indigo-950 to-purple-950 text-white relative overflow-hidden">
        <div class="absolute top-0 left-0 size-72 rounded-full bg-indigo-500/10 blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 right-0 size-72 rounded-full bg-purple-500/10 blur-3xl pointer-events-none"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 size-96 rounded-full bg-violet-500/5 blur-3xl pointer-events-none"></div>

        <div class="relative max-w-6xl mx-auto px-6">
            <div class="text-center flex flex-col items-center gap-3 mb-16">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 text-xs font-semibold uppercase tracking-widest text-purple-300">
                    💎 Nilai Kami
                </span>
                <h2 class="text-3xl md:text-4xl font-bold">Mengapa Bergabung? 🤔</h2>
                <p class="text-zinc-400 max-w-lg">Kami percaya bahwa perubahan nyata lahir dari kolaborasi yang tulus dan niat yang ikhlas.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="group flex flex-col gap-4 p-7 rounded-2xl bg-white/5 backdrop-blur-sm border border-white/10 hover:bg-white/10 hover:border-indigo-500/50 hover:-translate-y-1 transition-all duration-300">
                    <div class="size-12 rounded-xl bg-gradient-to-br from-indigo-500 to-blue-600 flex items-center justify-center text-2xl shadow-lg shadow-indigo-900/50 group-hover:scale-110 transition-transform duration-300">🤝</div>
                    <h3 class="text-lg font-bold">Kolaboratif</h3>
                    <p class="text-sm text-zinc-400 leading-relaxed">Kami percaya pada kekuatan kebersamaan. Setiap anggota berkontribusi dan saling menguatkan dalam ekosistem yang inklusif.</p>
                </div>

                <div class="group flex flex-col gap-4 p-7 rounded-2xl bg-white/5 backdrop-blur-sm border border-white/10 hover:bg-white/10 hover:border-purple-500/50 hover:-translate-y-1 transition-all duration-300">
                    <div class="size-12 rounded-xl bg-gradient-to-br from-purple-500 to-violet-600 flex items-center justify-center text-2xl shadow-lg shadow-purple-900/50 group-hover:scale-110 transition-transform duration-300">💡</div>
                    <h3 class="text-lg font-bold">Inovatif</h3>
                    <p class="text-sm text-zinc-400 leading-relaxed">Teknologi adalah alat, bukan tujuan. Kami memanfaatkannya secara kreatif untuk memecahkan masalah nyata di masyarakat.</p>
                </div>

                <div class="group flex flex-col gap-4 p-7 rounded-2xl bg-white/5 backdrop-blur-sm border border-white/10 hover:bg-white/10 hover:border-green-500/50 hover:-translate-y-1 transition-all duration-300">
                    <div class="size-12 rounded-xl bg-gradient-to-br from-green-500 to-emerald-600 flex items-center justify-center text-2xl shadow-lg shadow-green-900/50 group-hover:scale-110 transition-transform duration-300">🌱</div>
                    <h3 class="text-lg font-bold">Berdampak</h3>
                    <p class="text-sm text-zinc-400 leading-relaxed">Setiap langkah yang kami ambil memiliki tujuan yang jelas: menciptakan dampak positif bagi lingkungan, ilmu, dan spiritual.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Klien --}}
    <section class="py-20 bg-gradient-to-b from-zinc-50 to-white border-b border-zinc-100">
        <div class="max-w-6xl mx-auto px-6 text-center flex flex-col items-center gap-8">
            <div class="flex flex-col gap-2">
                <span class="text-xs font-semibold uppercase tracking-widest text-zinc-400">🏆 Dipercaya Oleh</span>
                <h2 class="text-2xl font-bold text-zinc-900">Mitra & Klien Kami</h2>
            </div>

            <div class="flex flex-wrap justify-center items-center gap-8">
                <div class="flex items-center gap-3 px-6 py-4 bg-white rounded-2xl border border-zinc-200 shadow-md hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300">
                    <span class="text-3xl">🕌</span>
                    <div class="text-left">
                        <p class="font-bold text-zinc-900 text-sm">Masjid Syatho Sedan</p>
                        <p class="text-xs text-zinc-500">📍 Rembang, Jawa Tengah</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Layanan --}}
    <section id="layanan" class="py-24 relative overflow-hidden">
        <div class="absolute top-0 right-0 size-96 rounded-full bg-gradient-to-br from-indigo-100/50 to-purple-100/50 blur-3xl pointer-events-none"></div>

        <div class="relative max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="flex flex-col gap-6">
                    <span class="inline-flex items-center gap-2 w-fit px-3 py-1 rounded-full bg-gradient-to-r from-indigo-100 to-purple-100 text-xs font-semibold uppercase tracking-widest text-purple-700">
                        🛠️ Layanan
                    </span>
                    <h2 class="text-3xl md:text-4xl font-bold text-zinc-900 leading-tight">
                        Butuh Website<br>
                        <span class="gradient-text">Profesional? 🌐</span>
                    </h2>
                    <p class="text-zinc-500 leading-relaxed">
                        Kami menyediakan jasa pembuatan website profesional yang modern, cepat, dan sesuai kebutuhan bisnis atau organisasi Anda. Dari landing page hingga sistem informasi lengkap.
                    </p>

                    <ul class="flex flex-col gap-3">
                        <li class="flex items-center gap-3 text-sm text-zinc-700 bg-green-50 px-4 py-3 rounded-xl border border-green-100">
                            <span class="text-lg">🖼️</span>
                            Landing page & company profile
                        </li>
                        <li class="flex items-center gap-3 text-sm text-zinc-700 bg-purple-50 px-4 py-3 rounded-xl border border-purple-100">
                            <span class="text-lg">🎨</span>
                            Desain modern & responsif
                        </li>
                        <li class="flex items-center gap-3 text-sm text-zinc-700 bg-orange-50 px-4 py-3 rounded-xl border border-orange-100">
                            <span class="text-lg">💬</span>
                            Konsultasi & dukungan teknis
                        </li>
                    </ul>
                </div>

                <div id="kontak" class="flex flex-col gap-6 p-8 rounded-2xl bg-gradient-to-br from-indigo-50 to-purple-50 border border-purple-100 shadow-xl shadow-purple-100">
                    <h3 class="text-xl font-bold text-zinc-900">💬 Mulai Konsultasi Gratis</h3>
                    <p class="text-sm text-zinc-500">Hubungi kami melalui Instagram untuk mendiskusikan kebutuhan website Anda. Kami siap membantu! 🚀</p>

                    <a href="https://instagram.com/@namaku.ahla"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="flex items-center justify-center gap-3 px-6 py-4 rounded-xl bg-gradient-to-r from-purple-500 via-pink-500 to-orange-400 text-white font-bold text-sm hover:opacity-90 hover:-translate-y-0.5 transition-all duration-200 shadow-lg shadow-pink-200">
                        <svg class="size-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                        @barizaloka di Instagram
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-20 bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 relative overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_80%_60%_at_50%_50%,rgba(255,255,255,0.1),transparent)] pointer-events-none"></div>

        {{-- Floating emoji accents --}}
        <div class="absolute top-6 left-[8%] text-4xl float-1 opacity-30 select-none pointer-events-none">🎯</div>
        <div class="absolute bottom-6 right-[8%] text-4xl float-2 opacity-30 select-none pointer-events-none">🌟</div>
        <div class="absolute top-8 right-[22%] text-3xl float-3 opacity-30 select-none pointer-events-none">💪</div>
        <div class="absolute bottom-8 left-[22%] text-3xl float-4 opacity-30 select-none pointer-events-none">✨</div>

        <div class="relative max-w-3xl mx-auto px-6 text-center flex flex-col items-center gap-6">
            <span class="text-5xl animate-bounce">🚀</span>
            <h2 class="text-3xl md:text-4xl font-bold text-white leading-tight">
                Siap Bergabung dengan<br>Komunitas Kami?
            </h2>
            <p class="text-white/80 text-lg">
                Jadilah bagian dari gerakan positif. Bersama kita bisa menciptakan perubahan yang lebih besar. 💪
            </p>
            <a href="#komunitas"
               class="px-8 py-4 rounded-xl bg-white text-indigo-700 font-bold text-sm hover:bg-indigo-50 hover:-translate-y-1 hover:shadow-xl transition-all duration-200 shadow-lg">
                🌍 Jelajahi Komunitas
            </a>
        </div>
    </section>

</x-layouts.base>
