<div class="max-w-4xl mx-auto space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-zinc-900 dark:text-zinc-100">Edit Popup Promo</h1>
            <p class="text-sm text-zinc-500 dark:text-zinc-400">Ubah konfigurasi dan slide "{{ $popup->name }}".</p>
        </div>
        <flux:button variant="ghost" icon="arrow-left" :href="route('admin-v2.popups.index')" wire:navigate>
            Kembali
        </flux:button>
    </div>

    <form wire:submit="save" class="space-y-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Left Config -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Internal Info -->
                <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-4 shadow-xs">
                    <h2 class="font-semibold text-base border-b border-zinc-200 dark:border-zinc-800 pb-3">Informasi Internal</h2>

                    <flux:field>
                        <flux:label>Nama Popup</flux:label>
                        <flux:input wire:model="name" placeholder="Nama..." />
                        <flux:error name="name" />
                    </flux:field>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <flux:field>
                            <flux:label>Prioritas</flux:label>
                            <flux:input type="number" wire:model="priority" placeholder="0" />
                            <flux:error name="priority" />
                        </flux:field>

                        <div class="flex items-center pt-6">
                            <flux:checkbox wire:model="is_active" label="Popup Aktif" />
                        </div>
                    </div>
                </div>

                <!-- Media Slides Repeater -->
                <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-4 shadow-xs">
                    <div class="flex items-center justify-between border-b border-zinc-200 dark:border-zinc-800 pb-3">
                        <div>
                            <h2 class="font-semibold text-base">Media Slide</h2>
                            <p class="text-xs text-zinc-500">Bisa lebih dari 1 slide.</p>
                        </div>
                        <flux:button type="button" size="sm" variant="ghost" icon="plus" wire:click="addSlide">Tambah Slide</flux:button>
                    </div>

                    <div class="space-y-4">
                        @foreach($slides as $index => $slide)
                            <div class="p-4 rounded-xl border border-zinc-200 dark:border-zinc-800 bg-zinc-50 dark:bg-zinc-800/40 space-y-3">
                                <div class="flex items-center justify-between">
                                    <span class="font-bold text-xs uppercase tracking-wider text-emerald-600 dark:text-emerald-400">Slide #{{ $index + 1 }}</span>
                                    @if(count($slides) > 1)
                                        <flux:button type="button" size="sm" variant="ghost" icon="trash" class="text-rose-600" wire:click="removeSlide({{ $index }})" />
                                    @endif
                                </div>

                                @if(!empty($slide['media_path']))
                                    <div class="w-full h-32 rounded-lg overflow-hidden border border-zinc-200 dark:border-zinc-800 bg-black">
                                        @if($slide['type'] === 'video')
                                            <video src="{{ Storage::url($slide['media_path']) }}" class="w-full h-full object-cover" controls></video>
                                        @else
                                            <img src="{{ Storage::url($slide['media_path']) }}" class="w-full h-full object-cover" alt="Slide">
                                        @endif
                                    </div>
                                @endif

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                    <flux:field>
                                        <flux:label>Tipe Media</flux:label>
                                        <flux:select wire:model="slides.{{ $index }}.type">
                                            <option value="image">Gambar</option>
                                            <option value="video">Video</option>
                                        </flux:select>
                                    </flux:field>

                                    <flux:field>
                                        <flux:label>Ganti File (Opsional)</flux:label>
                                        <flux:input type="file" wire:model="slides.{{ $index }}.file" />
                                        <flux:error name="slides.{{ $index }}.file" />
                                    </flux:field>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                    <flux:field>
                                        <flux:label>Label Tombol CTA</flux:label>
                                        <flux:input wire:model="slides.{{ $index }}.button_label" placeholder="Dapatkan Promo" />
                                    </flux:field>

                                    <flux:field>
                                        <flux:label>URL Tombol CTA</flux:label>
                                        <flux:input wire:model="slides.{{ $index }}.button_url" placeholder="https://..." />
                                    </flux:field>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Target Page Selection -->
                <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-4 shadow-xs">
                    <h2 class="font-semibold text-base border-b border-zinc-200 dark:border-zinc-800 pb-3">Target Penayangan</h2>

                    <flux:field>
                        <flux:label>Tampilkan Di</flux:label>
                        <flux:select wire:model.live="target_type">
                            <option value="all">Semua Halaman</option>
                            <option value="pages">Halaman Spesifik</option>
                            <option value="categories">Kategori Blog Spesifik</option>
                        </flux:select>
                    </flux:field>

                    @if($target_type === 'pages')
                        <div class="space-y-3 pt-2">
                            <flux:label>Pilih Halaman Target</flux:label>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 p-3 rounded-xl border border-zinc-200 dark:border-zinc-800 max-h-48 overflow-y-auto">
                                @foreach($availablePages as $key => $pageLabel)
                                    <label class="flex items-center gap-2 text-sm p-1 rounded hover:bg-zinc-100 dark:hover:bg-zinc-800 cursor-pointer">
                                        <input type="checkbox" wire:model="pages" value="{{ $key }}" class="rounded text-emerald-600 focus:ring-emerald-500">
                                        <span>{{ $pageLabel }}</span>
                                    </label>
                                @endforeach
                            </div>

                            <flux:field>
                                <flux:label>Pattern URL Tambahan (pisah dengan koma)</flux:label>
                                <flux:input wire:model="url_patterns_text" placeholder="jasa-website-*, blog/kategori/*" />
                            </flux:field>
                        </div>
                    @endif

                    @if($target_type === 'categories')
                        <div class="space-y-3 pt-2">
                            <flux:label>Pilih Kategori Blog Target</flux:label>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 p-3 rounded-xl border border-zinc-200 dark:border-zinc-800 max-h-48 overflow-y-auto">
                                @foreach($categories as $category)
                                    <label class="flex items-center gap-2 text-sm p-1 rounded hover:bg-zinc-100 dark:hover:bg-zinc-800 cursor-pointer">
                                        <input type="checkbox" wire:model="category_ids" value="{{ $category->id }}" class="rounded text-emerald-600 focus:ring-emerald-500">
                                        <span>{{ $category->name }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Right Sidebar Controls -->
            <div class="space-y-6">
                <!-- Frequency & Delay -->
                <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-4 shadow-xs">
                    <h2 class="font-semibold text-base border-b border-zinc-200 dark:border-zinc-800 pb-3">Frekuensi & Jeda</h2>

                    <flux:field>
                        <flux:label>Frekuensi Penayangan</flux:label>
                        <flux:select wire:model="frequency">
                            @foreach(Popup::frequencyOptions() as $freqKey => $freqLabel)
                                <option value="{{ $freqKey }}">{{ $freqLabel }}</option>
                            @endforeach
                        </flux:select>
                        <flux:error name="frequency" />
                    </flux:field>

                    <flux:field>
                        <flux:label>Jeda Sebelum Muncul (Detik)</flux:label>
                        <flux:input type="number" wire:model="delay_seconds" placeholder="0" />
                        <flux:error name="delay_seconds" />
                    </flux:field>
                </div>

                <!-- Schedule -->
                <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-4 shadow-xs">
                    <h2 class="font-semibold text-base border-b border-zinc-200 dark:border-zinc-800 pb-3">Jadwal Penayangan</h2>

                    <flux:field>
                        <flux:label>Mulai Tampil</flux:label>
                        <flux:input type="datetime-local" wire:model="start_at" />
                        <flux:error name="start_at" />
                    </flux:field>

                    <flux:field>
                        <flux:label>Berhenti Tampil</flux:label>
                        <flux:input type="datetime-local" wire:model="end_at" />
                        <flux:error name="end_at" />
                    </flux:field>
                </div>

                <div class="flex gap-2">
                    <flux:button type="submit" variant="primary" class="w-full">Simpan Perubahan</flux:button>
                </div>
            </div>
        </div>
    </form>
</div>
