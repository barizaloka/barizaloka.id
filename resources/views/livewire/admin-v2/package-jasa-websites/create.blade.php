<div class="max-w-4xl mx-auto space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-zinc-900 dark:text-zinc-100">Tambah Paket Jasa Website</h1>
            <p class="text-sm text-zinc-500 dark:text-zinc-400">Isi rincian harga dan fitur penawaran paket.</p>
        </div>
        <flux:button variant="ghost" icon="arrow-left" :href="route('admin-v2.package-jasa-websites.index')" wire:navigate>
            Kembali
        </flux:button>
    </div>

    <form wire:submit="save" class="space-y-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Main Details -->
            <div class="lg:col-span-2 space-y-6">
                <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-4 shadow-xs">
                    <h2 class="font-semibold text-base border-b border-zinc-200 dark:border-zinc-800 pb-3">Detail Paket</h2>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <flux:field>
                            <flux:label>Nama Paket</flux:label>
                            <flux:input wire:model.live="name" placeholder="Paket Landing Page" />
                            <flux:error name="name" />
                        </flux:field>

                        <flux:field>
                            <flux:label>Slug</flux:label>
                            <flux:input wire:model="slug" placeholder="paket-landing-page" />
                            <flux:error name="slug" />
                        </flux:field>
                    </div>

                    <flux:field>
                        <flux:label>Tagline / Ringkasan</flux:label>
                        <flux:textarea wire:model="tagline" rows="2" placeholder="Cocok untuk promosi produk atau event khusus..." />
                        <flux:error name="tagline" />
                    </flux:field>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <flux:field>
                            <flux:label>Harga (Angka)</flux:label>
                            <flux:input type="number" wire:model="price" placeholder="350000" />
                            <flux:error name="price" />
                        </flux:field>

                        <flux:field>
                            <flux:label>Label Harga</flux:label>
                            <flux:input wire:model="price_label" placeholder="Rp 350rb" />
                            <flux:error name="price_label" />
                        </flux:field>

                        <flux:field>
                            <flux:label>Periode Harga</flux:label>
                            <flux:input wire:model="price_period" placeholder="per tahun" />
                            <flux:error name="price_period" />
                        </flux:field>
                    </div>
                </div>

                <!-- Features Repeater -->
                <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-4 shadow-xs">
                    <div class="flex items-center justify-between border-b border-zinc-200 dark:border-zinc-800 pb-3">
                        <h2 class="font-semibold text-base">Daftar Fitur Paket</h2>
                        <flux:button type="button" size="sm" variant="ghost" icon="plus" wire:click="addFeature">Tambah Fitur</flux:button>
                    </div>

                    <div class="space-y-3">
                        @foreach($features as $index => $feature)
                            <div class="flex items-center gap-3 p-3 rounded-xl border border-zinc-200 dark:border-zinc-800 bg-zinc-50 dark:bg-zinc-800/40">
                                <div class="flex-1">
                                    <flux:input wire:model="features.{{ $index }}.text" placeholder="Fitur (Gunakan <strong>teks</strong> untuk cetak tebal)" />
                                    <flux:error name="features.{{ $index }}.text" />
                                </div>
                                <label class="flex items-center gap-1.5 text-xs text-zinc-600 dark:text-zinc-400 shrink-0 cursor-pointer">
                                    <input type="checkbox" wire:model="features.{{ $index }}.indent" class="rounded text-emerald-600 focus:ring-emerald-500">
                                    <span>Sub-poin</span>
                                </label>
                                @if(count($features) > 1)
                                    <flux:button type="button" size="sm" variant="ghost" icon="trash" class="text-rose-600" wire:click="removeFeature({{ $index }})" />
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Sidebar Controls -->
            <div class="space-y-6">
                <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-4 shadow-xs">
                    <h2 class="font-semibold text-base border-b border-zinc-200 dark:border-zinc-800 pb-3">Tombol & Pesan WA</h2>

                    <flux:field>
                        <flux:label>Label Tombol CTA</flux:label>
                        <flux:input wire:model="cta_label" placeholder="Pilih Paket Landing" />
                        <flux:error name="cta_label" />
                    </flux:field>

                    <flux:field>
                        <flux:label>Pesan WhatsApp Default</flux:label>
                        <flux:textarea wire:model="whatsapp_message" rows="3" placeholder="Halo, saya mau pesan Paket Landing Page..." />
                        <flux:error name="whatsapp_message" />
                    </flux:field>
                </div>

                <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-4 shadow-xs">
                    <h2 class="font-semibold text-base border-b border-zinc-200 dark:border-zinc-800 pb-3">Pengaturan</h2>

                    <flux:field>
                        <flux:label>Label Badge (Opsional)</flux:label>
                        <flux:input wire:model="badge_label" placeholder="Paling Populer" />
                        <flux:error name="badge_label" />
                    </flux:field>

                    <flux:field>
                        <flux:label>Urutan Tampil</flux:label>
                        <flux:input type="number" wire:model="order" placeholder="0" />
                        <flux:error name="order" />
                    </flux:field>

                    <flux:checkbox wire:model="is_featured" label="Jadikan Paket Unggulan" />
                </div>

                <div class="flex gap-2">
                    <flux:button type="submit" variant="primary" class="w-full">Simpan Paket</flux:button>
                </div>
            </div>
        </div>
    </form>
</div>
