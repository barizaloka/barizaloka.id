<div class="max-w-4xl mx-auto space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-zinc-900 dark:text-zinc-100">Edit Proyek Portofolio</h1>
            <p class="text-sm text-zinc-500 dark:text-zinc-400">Ubah informasi proyek "{{ $project->title }}".</p>
        </div>
        <flux:button variant="ghost" icon="arrow-left" :href="route('admin-v2.projects.index')" wire:navigate>
            Kembali
        </flux:button>
    </div>

    <form wire:submit="save" class="space-y-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Main Info -->
            <div class="lg:col-span-2 space-y-6">
                <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-4 shadow-xs">
                    <h2 class="font-semibold text-base border-b border-zinc-200 dark:border-zinc-800 pb-3">Informasi Proyek</h2>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <flux:field>
                            <flux:label>Judul Proyek</flux:label>
                            <flux:input wire:model.live="title" placeholder="Masukkan judul..." />
                            <flux:error name="title" />
                        </flux:field>

                        <flux:field>
                            <flux:label>Slug</flux:label>
                            <flux:input wire:model="slug" placeholder="slug-proyek" />
                            <flux:error name="slug" />
                        </flux:field>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <flux:field>
                            <flux:label>Nama Klien</flux:label>
                            <flux:input wire:model="client_name" placeholder="Nama Klien" />
                            <flux:error name="client_name" />
                        </flux:field>

                        <flux:field>
                            <flux:label>Kategori</flux:label>
                            <flux:select wire:model="category">
                                <option value="pesantren">Pesantren & Masjid</option>
                                <option value="desa">Desa</option>
                                <option value="umkm">UMKM</option>
                            </flux:select>
                            <flux:error name="category" />
                        </flux:field>
                    </div>

                    <flux:field>
                        <flux:label>Tautan / URL Website</flux:label>
                        <flux:input wire:model="url" placeholder="https://..." />
                        <flux:error name="url" />
                    </flux:field>

                    <flux:field>
                        <flux:label>Ringkasan Proyek</flux:label>
                        <flux:textarea wire:model="summary" rows="3" placeholder="Ringkasan..." />
                        <flux:error name="summary" />
                    </flux:field>

                    <flux:field>
                        <flux:label>Deskripsi Lengkap</flux:label>
                        <flux:textarea wire:model="description" rows="8" placeholder="Deskripsi..." />
                        <flux:error name="description" />
                    </flux:field>
                </div>

                <!-- SEO Section -->
                <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-4 shadow-xs">
                    <h2 class="font-semibold text-base border-b border-zinc-200 dark:border-zinc-800 pb-3">SEO Meta</h2>
                    <flux:field>
                        <flux:label>Meta Title</flux:label>
                        <flux:input wire:model="meta_title" placeholder="Maks 70 karakter" />
                        <flux:error name="meta_title" />
                    </flux:field>
                    <flux:field>
                        <flux:label>Meta Description</flux:label>
                        <flux:textarea wire:model="meta_description" rows="3" placeholder="Maks 160 karakter" />
                        <flux:error name="meta_description" />
                    </flux:field>
                </div>
            </div>

            <!-- Sidebar Controls -->
            <div class="space-y-6">
                <!-- Thumbnail -->
                <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-4 shadow-xs">
                    <h2 class="font-semibold text-base border-b border-zinc-200 dark:border-zinc-800 pb-3">Thumbnail Proyek</h2>

                    @if ($thumbnail)
                        <div class="relative rounded-xl overflow-hidden border border-zinc-200 dark:border-zinc-800">
                            <img src="{{ $thumbnail->temporaryUrl() }}" class="w-full h-40 object-cover" alt="Preview Baru">
                        </div>
                    @elseif ($existing_thumbnail)
                        <div class="relative rounded-xl overflow-hidden border border-zinc-200 dark:border-zinc-800">
                            <img src="{{ Storage::url($existing_thumbnail) }}" class="w-full h-40 object-cover" alt="Preview">
                        </div>
                    @endif

                    <flux:field>
                        <flux:input type="file" wire:model="thumbnail" accept="image/*" />
                        <flux:error name="thumbnail" />
                    </flux:field>
                </div>

                <!-- Options -->
                <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-4 shadow-xs">
                    <h2 class="font-semibold text-base border-b border-zinc-200 dark:border-zinc-800 pb-3">Pengaturan</h2>

                    <flux:field>
                        <flux:label>Urutan Tampil</flux:label>
                        <flux:input type="number" wire:model="order" placeholder="0" />
                        <flux:error name="order" />
                    </flux:field>

                    <flux:checkbox wire:model="is_featured" label="Proyek Unggulan" />
                </div>

                <div class="flex gap-2">
                    <flux:button type="submit" variant="primary" class="w-full">Simpan Perubahan</flux:button>
                </div>
            </div>
        </div>
    </form>
</div>
