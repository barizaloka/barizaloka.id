<footer id="site-footer" class="bg-[#0a1e18] text-[#9db8b0] pt-14 pb-6">
    <div class="max-w-[1100px] mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-[2fr_1fr_1fr_1fr] gap-10 mb-10">

            <div>
                <div class="font-brand-serif text-2xl font-bold text-white mb-2.5" style="font-family: 'Playfair Display', Georgia, serif;">Barizaloka</div>
                <p class="text-sm text-[#7a9992] leading-relaxed max-w-xs">Website & aplikasi yang dikerjakan santri Rembang, Jawa Tengah — dibangun rapi, tepat waktu, dan bisa dipertanggungjawabkan.</p>
                <p class="text-sm text-[#7a9992] leading-relaxed max-w-xs mt-3">Bukan sekadar jasa coding. Barizaloka adalah ekosistem teknologi yang mendedikasikan setiap proyek untuk dampak nyata di bidang lingkungan, teknologi, dan spiritual.</p>
            </div>

            <div>
                <div class="text-xs font-bold uppercase tracking-widest text-white mb-3.5">Ekosistem</div>
                <ul class="flex flex-col gap-1.5 text-sm">
                    <li><a href="{{ route('komunitas') }}" class="text-[#7a9992] hover:text-brand-mid transition-colors">🏘️ Semua Pilar</a></li>
                    <li><a href="https://astraloka.my.id" target="_blank" rel="noopener" class="text-[#7a9992] hover:text-brand-mid transition-colors">🌍 Astraloka</a></li>
                    <li><a href="https://baricode.org" target="_blank" rel="noopener" class="text-[#7a9992] hover:text-brand-mid transition-colors">💻 Baricode</a></li>
                    <li><a href="https://selfreminder.org" class="text-[#7a9992] hover:text-brand-mid transition-colors">📿 Self Reminder</a></li>
                    <li><a href="{{ route('sumu') }}" class="text-[#7a9992] hover:text-brand-mid transition-colors">💚 Inisiatif SUMU</a></li>
                </ul>
            </div>

            <div>
                <div class="text-xs font-bold uppercase tracking-widest text-white mb-3.5">Layanan</div>
                <ul class="flex flex-col gap-1.5 text-sm">
                    <li><a href="{{ route('harga') }}" class="text-[#7a9992] hover:text-brand-mid transition-colors">💰 Harga</a></li>
                    <li><a href="{{ route('portofolio.index') }}" class="text-[#7a9992] hover:text-brand-mid transition-colors">🖥️ Portofolio</a></li>
                    <li><a href="{{ route('faq.index') }}" class="text-[#7a9992] hover:text-brand-mid transition-colors">❓ FAQ</a></li>
                    <li><a href="https://lynk.id/barizaloka" target="_blank" rel="noopener" class="text-[#7a9992] hover:text-brand-mid transition-colors">🛍️ Etalase Karya Digital</a></li>
                    <li><a href="https://contohdesain.web.id" target="_blank" rel="noopener" class="text-[#7a9992] hover:text-brand-mid transition-colors">🎨 Contoh Desain</a></li>
                    <li><a href="{{ route('blog.index') }}" class="text-[#7a9992] hover:text-brand-mid transition-colors">✍️ Blog</a></li>
                    <li><button onclick="window.installPWA()" type="button" class="text-[#7a9992] hover:text-brand-mid transition-colors cursor-pointer text-left">📲 Install Aplikasi Barizaloka</button></li>
                </ul>
            </div>

            <div>
                <div class="text-xs font-bold uppercase tracking-widest text-white mb-3.5">Kontak</div>
                <ul class="flex flex-col gap-1.5 text-sm">
                    <li><a href="{{ route('kontak') }}" class="text-[#7a9992] hover:text-brand-mid transition-colors">☎️ Halaman Kontak</a></li>
                    <li><!--email_off--><a href="mailto:barizaloka@gmail.com" class="text-[#7a9992] hover:text-brand-mid transition-colors">📧 barizaloka@gmail.com</a><!--/email_off--></li>
                    <li><a href="https://wa.me/6285188158542" target="_blank" rel="noopener" class="text-[#7a9992] hover:text-brand-mid transition-colors">💬 WhatsApp</a></li>
                </ul>
            </div>

        </div>

        <div class="border-t border-white/8 pt-5 text-center text-xs text-[#4d6961]">
            <p>&copy; {{ date('Y') }} Barizaloka. Semua hak dilindungi. Dibuat dengan ❤️ di Rembang</p>
        </div>
    </div>
</footer>
