<x-layouts.base
    title="Tokoh Ekonomi Indonesia: Yuk Jadi Seperti Mereka di Bidang Teknologi — Barizaloka"
    description="Profil singkat 5 pengusaha sukses teknologi Indonesia (Nadiem Makarim, Ferry Unardi, Natali Ardianto, Achmad Zaky, William Tanuwijaya) serta inspirasi merintis wirausaha digital."
>

    <style>
        .gradient-text-blue {
            background: linear-gradient(135deg, #1d9e75, #2563eb, #4f46e5);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .card-hover {
            transition: transform 0.3s cubic-bezier(.22,.68,0,1.2), box-shadow 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
        }
    </style>

    {{-- Hero Section --}}
    <section class="relative overflow-hidden pt-24 pb-20 bg-gradient-to-br from-blue-50/70 via-teal-50/50 to-indigo-50/60 border-b border-teal-100/60">
        <div class="absolute top-10 left-8 size-72 rounded-full bg-teal-200/30 blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-10 right-8 size-80 rounded-full bg-blue-200/30 blur-3xl pointer-events-none"></div>

        <div class="relative max-w-4xl mx-auto px-6 text-center flex flex-col items-center gap-5">
            <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-sm text-zinc-500 hover:text-teal-700 transition-colors">
                <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Kembali ke Beranda
            </a>

            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/90 backdrop-blur-sm border border-teal-200 text-xs font-bold text-teal-800 shadow-sm">
                <span class="size-2 rounded-full bg-teal-500 animate-pulse"></span>
                🚀 Inspirasi Wirausaha Digital Indonesia
            </div>

            <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-zinc-900 leading-tight">
                Tokoh Ekonomi Indonesia:<br>
                <span class="gradient-text-blue">Yuk Jadi Seperti Mereka di Bidang Teknologi!</span>
            </h1>

            <p class="text-base sm:text-lg text-zinc-600 max-w-2xl leading-relaxed">
                Bersaing di pasar teknologi digital Indonesia tidaklah mudah. Memerlukan keuletan, kreativitas, dan kemampuan adaptasi dengan teknologi baru agar dapat terus bertahan dan berkembang.
            </p>

            <div class="flex flex-wrap items-center justify-center gap-3 mt-2">
                <a href="#tokoh-teknologi" class="px-6 py-3 rounded-xl bg-teal-600 text-white font-bold text-sm hover:bg-teal-700 transition-all shadow-md shadow-teal-200">
                    📖 Baca Profil 5 Tokoh Sukses
                </a>
                <a href="{{ route('harga') }}" class="px-6 py-3 rounded-xl bg-white border border-zinc-200 text-zinc-800 font-semibold text-sm hover:bg-zinc-50 transition-all shadow-sm">
                    💡 Mulai Website Usahamu
                </a>
            </div>
        </div>
    </section>

    {{-- Pengantar & Nilai Pengusaha --}}
    <section class="py-12 bg-white border-b border-zinc-100">
        <div class="max-w-4xl mx-auto px-6">
            <div class="p-6 sm:p-8 rounded-2xl bg-zinc-50 border border-zinc-200/80 shadow-sm flex flex-col md:flex-row gap-6 items-center">
                <div class="size-16 rounded-2xl bg-teal-100 text-teal-700 flex items-center justify-center font-bold text-3xl shrink-0">
                    💡
                </div>
                <div>
                    <h2 class="text-xl sm:text-2xl font-bold text-zinc-900 mb-2 font-brand-serif">
                        Berbagi Ilmu: Mahalnya Perjalanan Jadi Pengusaha Sukses
                    </h2>
                    <p class="text-zinc-600 text-sm leading-relaxed mb-3">
                        Menjadi pengusaha teknologi yang sukses tidak terjadi secara instan. Kunci utama untuk bisa bertahan dan berkembang adalah <strong class="text-zinc-800">menjaga integritas, kepercayaan (trust), serta memperluas jaringan (networking)</strong>.
                    </p>
                    <p class="text-xs text-teal-800 font-semibold bg-teal-50 px-3 py-1.5 rounded-lg border border-teal-100 inline-block">
                        ✨ Keuletan + Kreativitas + Adaptasi Teknologi Baru = Kunci Keberhasilan Digital
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- 5 Tokoh Ekonomi Teknologi Indonesia --}}
    <section id="tokoh-teknologi" class="py-16 bg-zinc-50/50">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-teal-700 bg-teal-100 px-3.5 py-1.5 rounded-full mb-3">Profil Singkat</span>
                <h2 class="text-2xl sm:text-4xl font-bold text-zinc-900 font-brand-serif">
                    Lima Pengusaha Sukses Teknologi Indonesia
                </h2>
                <p class="text-zinc-600 text-sm sm:text-base mt-2">
                    Kisah inspiratif para pendiri perusahaan teknologi Indonesia yang berawal dari kepedulian, keberanian mengambil risiko, dan solusi nyata bagi masyarakat.
                </p>
            </div>

            <div class="space-y-8">
                {{-- 1. Nadiem Makarim --}}
                <div class="p-6 sm:p-8 rounded-3xl bg-white border border-zinc-200/80 shadow-sm card-hover">
                    <div class="flex flex-col md:flex-row gap-6 items-start">
                        <div class="size-16 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-extrabold text-2xl shrink-0">
                            1
                        </div>
                        <div class="space-y-3">
                            <div class="flex flex-wrap items-center gap-3">
                                <h3 class="text-xl sm:text-2xl font-bold text-zinc-900 font-brand-serif">Nadiem Makarim</h3>
                                <span class="px-3 py-1 rounded-full bg-emerald-100 text-emerald-800 text-xs font-bold">Go-Jek & Zalora</span>
                            </div>
                            <p class="text-sm text-zinc-600 leading-relaxed">
                                Pria yang kini tengah menjabat sebagai Menteri Pendidikan, Kebudayaan, Riset, dan Teknologi ini merupakan pendiri sekaligus mantan CEO dari Gojek dan Zalora.
                            </p>
                            <p class="text-sm text-zinc-600 leading-relaxed">
                                Nadiem mulai membangun perusahaan teknologi untuk kebutuhan transportasi tanah air karena melihat para tukang ojek yang kesulitan mendapatkan penumpang secara konvensional. Dengan niatan membantu, pria yang lahir pada <strong>4 Juli 1984</strong> ini mampu mengangkat derajat para tukang ojek yang dulunya dikenal dengan kelas menengah ke bawah.
                            </p>
                            <div class="p-4 rounded-xl bg-emerald-50/60 border border-emerald-100 text-xs text-emerald-900 font-medium">
                                🟢 <strong>Dampak Nyata:</strong> Atas jasanya ini, kehidupan tukang ojek dapat lebih makmur. Bahkan orang yang sebelumnya bukanlah tukang ojek menginginkan profesi tersebut demi penghidupan yang layak.
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 2. Ferry Unardi --}}
                <div class="p-6 sm:p-8 rounded-3xl bg-white border border-zinc-200/80 shadow-sm card-hover">
                    <div class="flex flex-col md:flex-row gap-6 items-start">
                        <div class="size-16 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center font-extrabold text-2xl shrink-0">
                            2
                        </div>
                        <div class="space-y-3">
                            <div class="flex flex-wrap items-center gap-3">
                                <h3 class="text-xl sm:text-2xl font-bold text-zinc-900 font-brand-serif">Ferry Unardi</h3>
                                <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-800 text-xs font-bold">Traveloka</span>
                            </div>
                            <p class="text-sm text-zinc-600 leading-relaxed">
                                Pria asal Padang yang lahir pada <strong>16 Januari 1988</strong> ini merupakan mantan <i>software engineer</i> di Microsoft. Setelah bekerja selama tiga tahun, dia memutuskan untuk melanjutkan kuliah S2 jurusan bisnis di Harvard Business School.
                            </p>
                            <p class="text-sm text-zinc-600 leading-relaxed">
                                Tak berselang satu semester berkuliah, dia mengambil risiko besar untuk berhenti dan mencoba peruntungan mengembangkan sebuah mesin pencari tiket pesawat yang dapat diakses masyarakat dengan mudah.
                            </p>
                            <div class="p-4 rounded-xl bg-blue-50/60 border border-blue-100 text-xs text-blue-900 font-medium">
                                ✈️ <strong>Inovasi Traveloka:</strong> Bersama dua sahabatnya, Derianto Kusuma dan Albert Zhang, Ferry akhirnya mendirikan Traveloka pada tahun 2012. Pada saat itu, Traveloka fokus menawarkan layanan pencari dan pembanding harga tiket pesawat bagi masyarakat Indonesia.
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 3. Natali Ardianto --}}
                <div class="p-6 sm:p-8 rounded-3xl bg-white border border-zinc-200/80 shadow-sm card-hover">
                    <div class="flex flex-col md:flex-row gap-6 items-start">
                        <div class="size-16 rounded-2xl bg-indigo-100 text-indigo-700 flex items-center justify-center font-extrabold text-2xl shrink-0">
                            3
                        </div>
                        <div class="space-y-3">
                            <div class="flex flex-wrap items-center gap-3">
                                <h3 class="text-xl sm:text-2xl font-bold text-zinc-900 font-brand-serif">Natali Ardianto</h3>
                                <span class="px-3 py-1 rounded-full bg-indigo-100 text-indigo-800 text-xs font-bold">Tiket.com</span>
                            </div>
                            <p class="text-sm text-zinc-600 leading-relaxed">
                                Lulusan Fakultas Ilmu Komputer (Fasilkom) Universitas Indonesia ini merupakan salah satu pendiri dari platform aplikasi Tiket.com.
                            </p>
                            <p class="text-sm text-zinc-600 leading-relaxed">
                                Sebelum mendirikan Tiket.com, Natali sempat mendirikan dua startup lain yakni Urbanesia dan Golfnesia. Sayangnya perjalanan dua startup tersebut tidaklah mulus dan menghadapi berbagai hambatan bisnis.
                            </p>
                            <div class="p-4 rounded-xl bg-indigo-50/60 border border-indigo-100 text-xs text-indigo-900 font-medium">
                                💡 <strong>Pelajaran Penting:</strong> Dari pengalaman kegagalan sebelumnya, Natali belajar dari kesalahan, melakukan evaluasi mendalam, dan berhasil membangun Tiket.com yang tumbuh sukses dan menjadi salah satu agen perjalanan digital terbesar di tanah air.
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 4. Achmad Zaky --}}
                <div class="p-6 sm:p-8 rounded-3xl bg-white border border-zinc-200/80 shadow-sm card-hover">
                    <div class="flex flex-col md:flex-row gap-6 items-start">
                        <div class="size-16 rounded-2xl bg-red-100 text-red-700 flex items-center justify-center font-extrabold text-2xl shrink-0">
                            4
                        </div>
                        <div class="space-y-3">
                            <div class="flex flex-wrap items-center gap-3">
                                <h3 class="text-xl sm:text-2xl font-bold text-zinc-900 font-brand-serif">Achmad Zaky</h3>
                                <span class="px-3 py-1 rounded-full bg-red-100 text-red-800 text-xs font-bold">Bukalapak</span>
                            </div>
                            <p class="text-sm text-zinc-600 leading-relaxed">
                                Pria kelahiran <strong>24 Agustus 1986</strong> ini terinspirasi untuk menciptakan sebuah *software* yang berguna sebagai tempat dan bisa dimanfaatkan oleh para pengusaha kecil (UMKM) agar dapat berjualan secara online.
                            </p>
                            <p class="text-sm text-zinc-600 leading-relaxed">
                                Melihat fenomena tersebut, dia bersama temannya yaitu Nugroho Herucahyono (yang menjabat sebagai CTO Bukalapak) membangun software tersebut. Bermodalkan uang **Rp 90.000** untuk membeli domain, proyek Bukalapak akhirnya diluncurkan ke publik pada 10 Januari 2010.
                            </p>
                            <div class="p-4 rounded-xl bg-red-50/60 border border-red-100 text-xs text-red-900 font-medium">
                                🛍️ <strong>Pertumbuhan Pesat:</strong> Perkembangan Bukalapak melonjak pesat dengan puluhan ribu pedagang bergabung, hingga menarik investor global seperti 500 Startups, Green van Batavia Incubator, IMJ Investment, dan Elang Mahkota Teknologi Tbk (Emtek).
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 5. William Tanuwijaya --}}
                <div class="p-6 sm:p-8 rounded-3xl bg-white border border-zinc-200/80 shadow-sm card-hover">
                    <div class="flex flex-col md:flex-row gap-6 items-start">
                        <div class="size-16 rounded-2xl bg-teal-100 text-teal-700 flex items-center justify-center font-extrabold text-2xl shrink-0">
                            5
                        </div>
                        <div class="space-y-3">
                            <div class="flex flex-wrap items-center gap-3">
                                <h3 class="text-xl sm:text-2xl font-bold text-zinc-900 font-brand-serif">William Tanuwijaya</h3>
                                <span class="px-3 py-1 rounded-full bg-teal-100 text-teal-800 text-xs font-bold">Tokopedia</span>
                            </div>
                            <p class="text-sm text-zinc-600 leading-relaxed">
                                Siapa sangka pendiri Tokopedia ini pernah bekerja menjadi penjaga warnet dari jam 9 malam hingga 9 pagi untuk mendapatkan uang tambahan ketika berkuliah di Universitas Bina Nusantara (BINUS). Pria kelahiran <strong>18 November 1981</strong> ini kemudian bekerja di bidang pengembangan software komputer setelah lulus.
                            </p>
                            <p class="text-sm text-zinc-600 leading-relaxed">
                                Inspirasi mendirikan startup didapat ketika menjadi moderator dalam forum online *Kafegaul* yang memiliki fasilitas jual beli. Pada tahun 2007, dia mulai membangun Tokopedia bersama Leontinus Alpha Edison sebagai situs gratis yang menghubungkan antara penjual dan pembeli secara aman.
                            </p>
                            <div class="p-4 rounded-xl bg-teal-50/60 border border-teal-100 text-xs text-teal-900 font-medium">
                                💰 <strong>Investasi Raksasa:</strong> Tokopedia berhasil menarik perhatian investor dunia seperti East Ventures (2010), CyberAgent Venture (2011), Beenos (2012), hingga suntikan dana fantastis sebesar **100 Juta Dollar** dari SoftBank pada tahun 2014.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Pesan Inspirasi Barizaloka --}}
    <section class="py-16 bg-gradient-to-r from-zinc-900 via-slate-900 to-zinc-900 text-white">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <span class="inline-block text-xs font-bold uppercase tracking-widest text-teal-400 bg-white/10 px-3.5 py-1.5 rounded-full mb-4">Inspirasi Dari Barizaloka</span>
            <h2 class="text-2xl sm:text-4xl font-bold font-brand-serif leading-tight mb-4">
                Langkah Kecil Hari Ini, Karya Besar Masa Depan
            </h2>
            <p class="text-zinc-300 text-sm sm:text-base leading-relaxed max-w-2xl mx-auto mb-8">
                Semua pendiri perusahaan teknologi besar di atas mengawali dari hal yang sama: <strong class="text-white">melihat masalah di sekitar, belajar coding/software engineering, dan berani mengambil langkah pertama dengan website milik sendiri.</strong>
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-left">
                <div class="p-5 rounded-2xl bg-white/5 border border-white/10">
                    <div class="text-3xl mb-2">💻</div>
                    <h3 class="font-bold text-white text-base mb-1">Pentingnya Software Engineering</h3>
                    <p class="text-xs text-zinc-400 leading-relaxed">
                        Keahlian pemrograman adalah modal berharga untuk menciptakan solusi yang menyelesaikan masalah jutaan orang.
                    </p>
                </div>

                <div class="p-5 rounded-2xl bg-white/5 border border-white/10">
                    <div class="text-3xl mb-2">🏠</div>
                    <h3 class="font-bold text-white text-base mb-1">Mulai Dari Website Mandiri</h3>
                    <p class="text-xs text-zinc-400 leading-relaxed">
                        Bukalapak dimulai dari modal domain Rp 90rb. Website milik sendiri adalah fondasi awal aset digital bisnis Anda.
                    </p>
                </div>

                <div class="p-5 rounded-2xl bg-white/5 border border-white/10">
                    <div class="text-3xl mb-2">🤝</div>
                    <h3 class="font-bold text-white text-base mb-1">Barizaloka Siap Mendampingi</h3>
                    <p class="text-xs text-zinc-400 leading-relaxed">
                        Kami di Barizaloka siap membantu UMKM, santri, dan wirausahawan merintis website & aplikasi profesional secara rapi.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-20 bg-gradient-to-br from-teal-900 via-emerald-900 to-indigo-950 text-white text-center">
        <div class="max-w-3xl mx-auto px-6 flex flex-col items-center gap-6">
            <span class="text-5xl">🚀</span>
            <h2 class="text-3xl sm:text-4xl font-bold leading-tight font-brand-serif">
                Siap Merintis Langkah Wirausaha Digital Anda?
            </h2>
            <p class="text-teal-100/90 text-base max-w-xl">
                Konsultasikan ide usaha Anda dengan tim Barizaloka. Dapatkan website profesional yang cepat, responsif, dan siap melesatkan bisnis Anda.
            </p>

            <div class="flex flex-wrap justify-center items-center gap-3">
                <a href="https://wa.me/6285188158542?text=Halo%20Barizaloka,%20saya%20terinspirasi%20merintis%20website%20usaha%20digital"
                   target="_blank" rel="noopener noreferrer"
                   class="px-8 py-4 rounded-xl bg-white text-teal-900 font-bold text-sm hover:bg-teal-50 transition-all shadow-lg">
                    💬 Konsultasi via WhatsApp
                </a>
                <a href="{{ route('harga') }}"
                   class="px-8 py-4 rounded-xl bg-white/10 backdrop-blur-sm border border-white/20 text-white font-bold text-sm hover:bg-white/20 transition-all">
                    💰 Lihat Paket Pembuatan Web
                </a>
            </div>
        </div>
    </section>

</x-layouts.base>
