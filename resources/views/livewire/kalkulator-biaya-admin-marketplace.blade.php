<div class="max-w-3xl mx-auto px-6 py-16">

    <div class="text-center max-w-xl mx-auto mb-10">
        <span class="inline-flex items-center gap-1.5 bg-brand-light border border-brand-primary/20 rounded-full px-4 py-1.5 text-sm text-brand-dark font-medium mb-4">🧮 Kalkulator Gratis</span>
        <h1 class="font-brand-serif font-extrabold text-3xl md:text-4xl leading-tight text-[#1a2420] mb-3">Kalkulator Biaya Admin Marketplace</h1>
        <p class="text-zinc-600">Hitung harga jual yang sudah termasuk potongan biaya admin Shopee, Tokopedia, dan TikTok Shop, supaya penghasilanmu tetap sesuai target.</p>
    </div>

    {{-- ===== PILIH MARKETPLACE ===== --}}
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-10">
        @foreach ([
            'shopee' => ['label' => 'Shopee', 'emoji' => '🛍️'],
            'tokopedia' => ['label' => 'Tokopedia', 'emoji' => '🟢'],
            'tiktok-shop' => ['label' => 'TikTok Shop', 'emoji' => '🎵'],
        ] as $value => $item)
            <button
                type="button"
                wire:click="pilihMarketplace('{{ $value }}')"
                class="flex flex-col items-center gap-2 rounded-2xl border-2 px-4 py-5 text-center transition-all {{ $marketplace === $value ? 'border-brand-primary bg-brand-light shadow-md' : 'border-[#e0ebe7] bg-white hover:border-brand-primary/40 hover:-translate-y-0.5' }}"
            >
                <span class="text-2xl">{{ $item['emoji'] }}</span>
                <span class="font-semibold text-sm text-[#1a2420]">{{ $item['label'] }}</span>
            </button>
        @endforeach
    </div>

    @if ($marketplace)
        {{-- ===== PERHATIAN ===== --}}
        <div class="rounded-2xl border border-amber-200 bg-amber-50 p-5 mb-8 text-sm text-amber-900">
            <p class="font-bold mb-2">⚠️ Perhatian</p>
            <ul class="space-y-1.5 list-disc list-inside">
                <li>Pastikan biaya admin yang diinput sudah paling update dari marketplace terkait.</li>
                <li>Pastikan biaya admin yang diinput sudah sesuai dengan variasi produk.</li>
                <li>Cek kembali harga yang akan diinput. Kesalahan input akan membuat potongan biaya admin ikut berubah.</li>
                <li>Disarankan membulatkan setiap harga <b>ke atas</b> agar tidak ada selisih perhitungan biaya admin.</li>
            </ul>
        </div>

        {{-- ===== FORM BIAYA ADMIN ===== --}}
        <div class="rounded-2xl border border-[#e0ebe7] bg-white p-6 mb-8">
            @if ($marketplace === 'shopee')
                <div class="space-y-5">
                    <div>
                        <label class="block text-sm font-semibold text-[#1a2420] mb-1">Biaya Administrasi (%)</label>
                        <p class="text-xs text-zinc-500 mb-2">Tidak termasuk biaya layanan Gratis Ongkir XTRA dan Cashback XTRA. Lihat besarannya di <a href="https://seller.shopee.co.id/edu/article/3489" target="_blank" rel="noopener" class="text-brand-primary underline">Pusat Edukasi Penjual</a>.</p>
                        <input type="number" step="0.1" min="0" wire:model="shopeeAdminFee" placeholder="Contoh: 6.5" class="w-full rounded-xl border border-[#e0ebe7] px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-brand-primary/40 focus:border-brand-primary" />
                    </div>

                    <div>
                        <label class="flex items-center gap-2 text-sm font-semibold text-[#1a2420] mb-2">
                            <input type="checkbox" wire:model.live="shopeeGratongXtra" class="size-4 rounded border-[#e0ebe7] text-brand-primary focus:ring-brand-primary/40" />
                            Gratis Ongkir XTRA
                        </label>
                        @if ($shopeeGratongXtra)
                            <input type="number" step="0.1" min="0" wire:model="shopeeGratongXtraFee" placeholder="Biaya Layanan Gratis Ongkir XTRA (%)" class="w-full rounded-xl border border-[#e0ebe7] px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-brand-primary/40 focus:border-brand-primary" />
                        @endif
                    </div>

                    <div>
                        <label class="flex items-center gap-2 text-sm font-semibold text-[#1a2420] mb-2">
                            <input type="checkbox" wire:model.live="shopeeCashbackXtra" class="size-4 rounded border-[#e0ebe7] text-brand-primary focus:ring-brand-primary/40" />
                            Cashback XTRA
                        </label>
                        @if ($shopeeCashbackXtra)
                            <input type="number" step="0.1" min="0" wire:model="shopeeCashbackXtraFee" placeholder="Biaya Layanan Cashback XTRA (%)" class="w-full rounded-xl border border-[#e0ebe7] px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-brand-primary/40 focus:border-brand-primary" />
                        @endif
                    </div>
                </div>
            @elseif ($marketplace === 'tokopedia')
                <div class="space-y-5">
                    <div>
                        <label class="block text-sm font-semibold text-[#1a2420] mb-1">Biaya Layanan Merchant (%)</label>
                        <p class="text-xs text-zinc-500 mb-2">Lihat besaran biaya layanan merchant dan bebas ongkir di <a href="https://seller.tokopedia.com/edu/skema-keanggotaan-seller-tokopedia/" target="_blank" rel="noopener" class="text-brand-primary underline">Pusat Edukasi Seller Tokopedia</a>.</p>
                        <input type="number" step="0.01" min="0" wire:model="tokopediaAdminFeeMerchant" placeholder="Contoh: 4.25" class="w-full rounded-xl border border-[#e0ebe7] px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-brand-primary/40 focus:border-brand-primary" />
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-[#1a2420] mb-1">Biaya Layanan Bebas Ongkir (%)</label>
                        <input type="number" step="0.01" min="0" wire:model="tokopediaAdminFeeOngkir" placeholder="Contoh: 1" class="w-full rounded-xl border border-[#e0ebe7] px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-brand-primary/40 focus:border-brand-primary" />
                    </div>
                </div>
            @elseif ($marketplace === 'tiktok-shop')
                <div>
                    <label class="block text-sm font-semibold text-[#1a2420] mb-1">Biaya Admin (%)</label>
                    <p class="text-xs text-zinc-500 mb-2">Lihat pembagian besaran biaya admin sesuai variasi produk di <a href="https://seller-id.tiktok.com/university/essay?knowledge_id=5411650459305729&role=1&from=feature_guide&identity=1" target="_blank" rel="noopener" class="text-brand-primary underline">sini</a>.</p>
                    <input type="number" step="0.1" min="0" wire:model="tiktokAdminFee" placeholder="Contoh: 5" class="w-full rounded-xl border border-[#e0ebe7] px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-brand-primary/40 focus:border-brand-primary" />
                </div>
            @endif

            <div class="flex flex-wrap gap-3 mt-6">
                <button
                    type="button"
                    wire:click="hitung"
                    wire:loading.attr="disabled"
                    wire:target="hitung"
                    class="inline-flex items-center gap-1.5 bg-brand-primary text-white rounded-xl px-6 py-2.5 text-sm font-bold hover:bg-brand-dark transition-colors disabled:opacity-60"
                >
                    <span wire:loading.remove wire:target="hitung">🧮 Hitung</span>
                    <span wire:loading wire:target="hitung">Menghitung…</span>
                </button>
                <button type="button" wire:click="tambahBaris" class="inline-flex items-center gap-1.5 bg-white border border-[#e0ebe7] text-[#1a2420] rounded-xl px-6 py-2.5 text-sm font-semibold hover:border-brand-primary/40 transition-colors">
                    ➕ Tambah Harga
                </button>
                <button type="button" wire:click="resetForm" class="inline-flex items-center gap-1.5 bg-white border border-red-200 text-red-600 rounded-xl px-6 py-2.5 text-sm font-semibold hover:bg-red-50 transition-colors">
                    ↺ Reset
                </button>
            </div>
        </div>

        {{-- ===== TABEL HARGA ===== --}}
        <div class="space-y-4">
            @foreach ($rows as $index => $row)
                <div wire:key="row-{{ $row['id'] }}" class="rounded-2xl border border-[#e0ebe7] bg-white p-5">
                    <div class="flex items-start gap-3">
                        <div class="flex-1">
                            <label class="block text-xs font-semibold text-zinc-500 mb-1">Harga Barang</label>
                            <input
                                type="number"
                                step="1"
                                min="0"
                                wire:model="rows.{{ $index }}.price"
                                placeholder="Contoh: 50000"
                                class="w-full rounded-xl border border-[#e0ebe7] px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-brand-primary/40 focus:border-brand-primary"
                            />
                        </div>

                        @if (count($rows) > 1)
                            <button type="button" wire:click="hapusBaris({{ $row['id'] }})" class="mt-6 shrink-0 inline-flex items-center justify-center size-10 rounded-xl bg-red-50 text-red-600 hover:bg-red-100 transition-colors" aria-label="Hapus baris">
                                🗑️
                            </button>
                        @endif
                    </div>

                    @if ($row['result'])
                        <div class="mt-4 pt-4 border-t border-[#e0ebe7]">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="text-xs font-semibold text-zinc-500">Harga + Admin</span>
                                <span class="text-xl font-bold text-brand-dark">Rp{{ number_format($row['result']['harga'], 0, ',', '.') }}</span>
                                <button
                                    type="button"
                                    x-data="{ copied: false }"
                                    @click="navigator.clipboard.writeText('{{ $row['result']['harga'] }}'); copied = true; setTimeout(() => copied = false, 1500)"
                                    class="inline-flex items-center gap-1 text-xs font-semibold text-brand-primary hover:text-brand-dark"
                                >
                                    <span x-show="!copied">📋 Salin</span>
                                    <span x-show="copied" x-cloak>✅ Disalin</span>
                                </button>
                            </div>

                            <dl class="grid grid-cols-2 sm:grid-cols-4 gap-3 text-sm">
                                @foreach ($row['result']['rincian'] as $item)
                                    <div>
                                        <dt class="text-xs text-zinc-500">{{ $item['label'] }}</dt>
                                        <dd class="font-semibold text-[#1a2420]">Rp{{ number_format($item['value'], 0, ',', '.') }}</dd>
                                    </div>
                                @endforeach
                            </dl>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    @endif
</div>
