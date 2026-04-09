<x-layouts.base title="Barizaloka — Menghubungkan Komunitas, Membangun Solusi">

    {{-- Hero --}}
    <section class="relative overflow-hidden bg-gradient-to-b from-zinc-50 to-white pt-24 pb-32">
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_80%_60%_at_50%_-10%,rgba(0,0,0,0.06),transparent)]"></div>

        <div class="relative max-w-6xl mx-auto px-6 text-center flex flex-col items-center gap-6">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-zinc-100 border border-zinc-200 text-xs font-medium text-zinc-600">
                <span class="size-1.5 rounded-full bg-green-500"></span>
                Ekosistem Komunitas Aktif
            </span>

            <h1 class="text-4xl md:text-6xl font-bold text-zinc-900 leading-tight tracking-tight max-w-3xl">
                Menghubungkan Komunitas,<br>
                <span class="text-zinc-500">Membangun Solusi</span>
            </h1>

            <p class="text-lg text-zinc-500 max-w-xl leading-relaxed">
                Ekosistem teknologi inovatif yang mendukung komunitas peduli dampak lingkungan, teknologi, dan spiritual yang positif.
            </p>

            <div class="flex flex-col sm:flex-row items-center gap-3 mt-2">
                <a href="#komunitas"
                   class="px-6 py-3 rounded-xl bg-zinc-900 text-white font-medium text-sm hover:bg-zinc-700 transition-colors">
                    Jelajahi Komunitas
                </a>
                <a href="#layanan"
                   class="px-6 py-3 rounded-xl bg-white border border-zinc-200 text-zinc-700 font-medium text-sm hover:bg-zinc-50 transition-colors">
                    Lihat Layanan
                </a>
            </div>
        </div>
    </section>

    {{-- Stats --}}
    <section class="border-y border-zinc-100 bg-zinc-50">
        <div class="max-w-6xl mx-auto px-6 py-10 grid grid-cols-3 divide-x divide-zinc-200">
            <div class="text-center px-4">
                <p class="text-3xl font-bold text-zinc-900">3</p>
                <p class="text-sm text-zinc-500 mt-1">Komunitas Aktif</p>
            </div>
            <div class="text-center px-4">
                <p class="text-3xl font-bold text-zinc-900">100+</p>
                <p class="text-sm text-zinc-500 mt-1">Anggota Bergabung</p>
            </div>
            <div class="text-center px-4">
                <p class="text-3xl font-bold text-zinc-900">∞</p>
                <p class="text-sm text-zinc-500 mt-1">Dampak Positif</p>
            </div>
        </div>
    </section>

    {{-- Komunitas --}}
    <section id="komunitas" class="py-24">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center flex flex-col items-center gap-3 mb-16">
                <span class="text-xs font-semibold uppercase tracking-widest text-zinc-400">Komunitas Kami</span>
                <h2 class="text-3xl md:text-4xl font-bold text-zinc-900">Tiga Pilar Utama</h2>
                <p class="text-zinc-500 max-w-lg">Setiap komunitas memiliki fokus yang berbeda namun bersatu dalam satu tujuan: dampak nyata yang positif.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                {{-- Astraloka --}}
                <div class="group flex flex-col gap-5 p-7 rounded-2xl border border-zinc-200 bg-white hover:border-green-300 hover:shadow-lg hover:shadow-green-50 transition-all">
                    <div class="size-12 rounded-xl bg-green-50 border border-green-100 flex items-center justify-center text-2xl">
                        🌍
                    </div>
                    <div class="flex flex-col gap-2">
                        <h3 class="text-xl font-bold text-zinc-900">Astraloka</h3>
                        <p class="text-sm font-medium text-green-600">Komunitas Peduli Alam</p>
                        <p class="text-sm text-zinc-500 leading-relaxed">
                            Membangun kesadaran lingkungan melalui edukasi daur ulang, aksi sosial, dan program pengelolaan sampah yang berkelanjutan.
                        </p>
                    </div>
                    <ul class="flex flex-col gap-2 mt-auto">
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span class="size-1.5 rounded-full bg-green-400 shrink-0"></span>
                            Edukasi Daur Ulang
                        </li>
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span class="size-1.5 rounded-full bg-green-400 shrink-0"></span>
                            Aksi Sosial Lingkungan
                        </li>
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span class="size-1.5 rounded-full bg-green-400 shrink-0"></span>
                            Program Pengelolaan Sampah
                        </li>
                    </ul>
                </div>

                {{-- Baricode --}}
                <div class="group flex flex-col gap-5 p-7 rounded-2xl border border-zinc-200 bg-white hover:border-blue-300 hover:shadow-lg hover:shadow-blue-50 transition-all">
                    <div class="size-12 rounded-xl bg-blue-50 border border-blue-100 flex items-center justify-center text-2xl">
                        💻
                    </div>
                    <div class="flex flex-col gap-2">
                        <h3 class="text-xl font-bold text-zinc-900">Baricode</h3>
                        <p class="text-sm font-medium text-blue-600">Komunitas Belajar IT</p>
                        <p class="text-sm text-zinc-500 leading-relaxed">
                            Ruang belajar mandiri dan kolaboratif bagi para developer—dari pemula hingga profesional yang ingin terus berkembang.
                        </p>
                    </div>
                    <ul class="flex flex-col gap-2 mt-auto">
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span class="size-1.5 rounded-full bg-blue-400 shrink-0"></span>
                            Belajar Mandiri & Terstruktur
                        </li>
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span class="size-1.5 rounded-full bg-blue-400 shrink-0"></span>
                            Proyek Kolaboratif
                        </li>
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span class="size-1.5 rounded-full bg-blue-400 shrink-0"></span>
                            Jaringan Developer
                        </li>
                    </ul>
                </div>

                {{-- Self Reminder --}}
                <div class="group flex flex-col gap-5 p-7 rounded-2xl border border-zinc-200 bg-white hover:border-purple-300 hover:shadow-lg hover:shadow-purple-50 transition-all">
                    <div class="size-12 rounded-xl bg-purple-50 border border-purple-100 flex items-center justify-center text-2xl">
                        📿
                    </div>
                    <div class="flex flex-col gap-2">
                        <h3 class="text-xl font-bold text-zinc-900">Self Reminder</h3>
                        <p class="text-sm font-medium text-purple-600">Pengingat Diri Menuju Akhirat</p>
                        <p class="text-sm text-zinc-500 leading-relaxed">
                            Ruang refleksi spiritual yang menyediakan pengingat harian, muhasabah diri, dan wawasan untuk perjalanan menuju akhirat.
                        </p>
                    </div>
                    <ul class="flex flex-col gap-2 mt-auto">
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span class="size-1.5 rounded-full bg-purple-400 shrink-0"></span>
                            Pengingat Spiritual Harian
                        </li>
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span class="size-1.5 rounded-full bg-purple-400 shrink-0"></span>
                            Muhasabah & Refleksi Diri
                        </li>
                        <li class="flex items-center gap-2 text-sm text-zinc-600">
                            <span class="size-1.5 rounded-full bg-purple-400 shrink-0"></span>
                            Pantauan Progres Ibadah
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Nilai --}}
    <section class="py-24 bg-zinc-900 text-white">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center flex flex-col items-center gap-3 mb-16">
                <span class="text-xs font-semibold uppercase tracking-widest text-zinc-400">Nilai Kami</span>
                <h2 class="text-3xl md:text-4xl font-bold">Mengapa Bergabung?</h2>
                <p class="text-zinc-400 max-w-lg">Kami percaya bahwa perubahan nyata lahir dari kolaborasi yang tulus dan niat yang ikhlas.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="flex flex-col gap-4 p-7 rounded-2xl bg-zinc-800 border border-zinc-700">
                    <div class="size-10 rounded-lg bg-zinc-700 flex items-center justify-center text-xl">🤝</div>
                    <h3 class="text-lg font-bold">Kolaboratif</h3>
                    <p class="text-sm text-zinc-400 leading-relaxed">Kami percaya pada kekuatan kebersamaan. Setiap anggota berkontribusi dan saling menguatkan dalam ekosistem yang inklusif.</p>
                </div>

                <div class="flex flex-col gap-4 p-7 rounded-2xl bg-zinc-800 border border-zinc-700">
                    <div class="size-10 rounded-lg bg-zinc-700 flex items-center justify-center text-xl">💡</div>
                    <h3 class="text-lg font-bold">Inovatif</h3>
                    <p class="text-sm text-zinc-400 leading-relaxed">Teknologi adalah alat, bukan tujuan. Kami memanfaatkannya secara kreatif untuk memecahkan masalah nyata di masyarakat.</p>
                </div>

                <div class="flex flex-col gap-4 p-7 rounded-2xl bg-zinc-800 border border-zinc-700">
                    <div class="size-10 rounded-lg bg-zinc-700 flex items-center justify-center text-xl">🌱</div>
                    <h3 class="text-lg font-bold">Berdampak</h3>
                    <p class="text-sm text-zinc-400 leading-relaxed">Setiap langkah yang kami ambil memiliki tujuan yang jelas: menciptakan dampak positif bagi lingkungan, ilmu, dan spiritual.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Klien --}}
    <section class="py-20 bg-zinc-50 border-b border-zinc-100">
        <div class="max-w-6xl mx-auto px-6 text-center flex flex-col items-center gap-8">
            <div class="flex flex-col gap-2">
                <span class="text-xs font-semibold uppercase tracking-widest text-zinc-400">Dipercaya Oleh</span>
                <h2 class="text-2xl font-bold text-zinc-900">Mitra & Klien Kami</h2>
            </div>

            <div class="flex flex-wrap justify-center items-center gap-8">
                <div class="flex items-center gap-3 px-6 py-4 bg-white rounded-xl border border-zinc-200 shadow-xs">
                    <span class="text-2xl">🕌</span>
                    <div class="text-left">
                        <p class="font-semibold text-zinc-900 text-sm">Masjid Syatho Sedan</p>
                        <p class="text-xs text-zinc-500">Rembang, Jawa Tengah</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Layanan --}}
    <section id="layanan" class="py-24">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="flex flex-col gap-6">
                    <span class="text-xs font-semibold uppercase tracking-widest text-zinc-400">Layanan</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-zinc-900 leading-tight">
                        Butuh Website Profesional?
                    </h2>
                    <p class="text-zinc-500 leading-relaxed">
                        Kami menyediakan jasa pembuatan website profesional yang modern, cepat, dan sesuai kebutuhan bisnis atau organisasi Anda. Dari landing page hingga sistem informasi lengkap.
                    </p>

                    <ul class="flex flex-col gap-3">
                        <li class="flex items-start gap-3 text-sm text-zinc-600">
                            <svg class="size-5 text-green-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Landing page & company profile
                        </li>
                        <li class="flex items-start gap-3 text-sm text-zinc-600">
                            <svg class="size-5 text-green-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Sistem informasi & manajemen
                        </li>
                        <li class="flex items-start gap-3 text-sm text-zinc-600">
                            <svg class="size-5 text-green-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Desain modern & responsif
                        </li>
                        <li class="flex items-start gap-3 text-sm text-zinc-600">
                            <svg class="size-5 text-green-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Konsultasi & dukungan teknis
                        </li>
                    </ul>
                </div>

                <div id="kontak" class="flex flex-col gap-6 p-8 rounded-2xl bg-zinc-50 border border-zinc-200">
                    <h3 class="text-xl font-bold text-zinc-900">Mulai Konsultasi Gratis</h3>
                    <p class="text-sm text-zinc-500">Hubungi kami melalui Instagram untuk mendiskusikan kebutuhan website Anda. Kami siap membantu!</p>

                    <a href="https://instagram.com/barizaloka"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="flex items-center justify-center gap-3 px-6 py-3.5 rounded-xl bg-gradient-to-r from-purple-500 via-pink-500 to-orange-400 text-white font-semibold text-sm hover:opacity-90 transition-opacity">
                        <svg class="size-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                        @barizaloka di Instagram
                    </a>

                    <p class="text-xs text-zinc-400 text-center">Respon cepat dalam 1×24 jam</p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-20 bg-zinc-900">
        <div class="max-w-3xl mx-auto px-6 text-center flex flex-col items-center gap-6">
            <h2 class="text-3xl md:text-4xl font-bold text-white leading-tight">
                Siap Bergabung dengan Komunitas Kami?
            </h2>
            <p class="text-zinc-400 text-lg">
                Jadilah bagian dari gerakan positif. Bersama kita bisa menciptakan perubahan yang lebih besar.
            </p>
            <a href="#komunitas"
               class="px-8 py-3.5 rounded-xl bg-white text-zinc-900 font-semibold text-sm hover:bg-zinc-100 transition-colors">
                Jelajahi Komunitas
            </a>
        </div>
    </section>

</x-layouts.base>
