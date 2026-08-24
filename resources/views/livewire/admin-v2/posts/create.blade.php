<div class="max-w-4xl mx-auto space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-zinc-900 dark:text-zinc-100">Buat Postingan Baru</h1>
            <p class="text-sm text-zinc-500 dark:text-zinc-400">Tulis dan atur publikasi artikel baru.</p>
        </div>
        <flux:button variant="ghost" icon="arrow-left" :href="route('admin-v2.posts.index')" wire:navigate>
            Kembali
        </flux:button>
    </div>

    <form wire:submit="save" class="space-y-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Main Content Area -->
            <div class="lg:col-span-2 space-y-6">
                <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-4 shadow-xs">
                    <h2 class="font-semibold text-base border-b border-zinc-200 dark:border-zinc-800 pb-3">Konten Utama</h2>

                    <flux:field>
                        <flux:label>Judul Artikel</flux:label>
                        <flux:input wire:model.live="title" placeholder="Masukkan judul artikel..." />
                        <flux:error name="title" />
                    </flux:field>

                    <flux:field>
                        <flux:label>Slug Permalink</flux:label>
                        <flux:input wire:model="slug" placeholder="slug-artikel" />
                        <flux:error name="slug" />
                    </flux:field>

                    <flux:field>
                        <flux:label>Ringkasan (Excerpt)</flux:label>
                        <flux:textarea wire:model="excerpt" rows="3" placeholder="Ringkasan singkat artikel..." />
                        <flux:error name="excerpt" />
                    </flux:field>

                    <flux:field>
                        <flux:label>Isi Konten Artikel</flux:label>
                        <flux:textarea wire:model="content" rows="12" placeholder="Tulis isi artikel (bisa format HTML/Markdown)..." />
                        <flux:error name="content" />
                    </flux:field>
                </div>

                <!-- SEO Section -->
                <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-4 shadow-xs">
                    <h2 class="font-semibold text-base border-b border-zinc-200 dark:border-zinc-800 pb-3">Pengaturan SEO</h2>

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
                <!-- Media Section -->
                <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-4 shadow-xs">
                    <h2 class="font-semibold text-base border-b border-zinc-200 dark:border-zinc-800 pb-3">Gambar Unggulan</h2>

                    @if ($featured_image)
                        <div class="relative rounded-xl overflow-hidden border border-zinc-200 dark:border-zinc-800">
                            <img src="{{ $featured_image->temporaryUrl() }}" class="w-full h-40 object-cover" alt="Preview">
                        </div>
                    @endif

                    <flux:field>
                        <flux:input type="file" wire:model="featured_image" accept="image/*" />
                        <flux:error name="featured_image" />
                    </flux:field>
                </div>

                <!-- Publication Settings -->
                <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-4 shadow-xs">
                    <h2 class="font-semibold text-base border-b border-zinc-200 dark:border-zinc-800 pb-3">Publikasi</h2>

                    <flux:field>
                        <flux:label>Status</flux:label>
                        <flux:select wire:model="status">
                            <option value="draft">Draft</option>
                            <option value="published">Dipublikasikan</option>
                            <option value="scheduled">Terjadwal</option>
                        </flux:select>
                        <flux:error name="status" />
                    </flux:field>

                    <flux:field>
                        <flux:label>Tanggal Publikasi</flux:label>
                        <flux:input type="datetime-local" wire:model="published_at" />
                        <flux:error name="published_at" />
                    </flux:field>

                    <flux:field>
                        <flux:label>Format Permalink</flux:label>
                        <flux:select wire:model="permalink_format">
                            <option value="tahun_bulan_slug">Tahun/Bulan/Slug (default)</option>
                            <option value="slug">Slug Langsung (/artikel/slug)</option>
                        </flux:select>
                        <flux:error name="permalink_format" />
                    </flux:field>

                    <flux:checkbox wire:model="is_featured" label="Jadikan Artikel Unggulan" />
                </div>

                <!-- Taxonomy -->
                <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-4 shadow-xs">
                    <h2 class="font-semibold text-base border-b border-zinc-200 dark:border-zinc-800 pb-3">Taksonomi & Penulis</h2>

                    <flux:field>
                        <flux:label>Kategori</flux:label>
                        <flux:select wire:model="category_id">
                            <option value="">Pilih Kategori</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </flux:select>
                        <flux:error name="category_id" />
                    </flux:field>

                    <flux:field>
                        <flux:label>Penulis</flux:label>
                        <flux:select wire:model="user_id">
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </flux:select>
                        <flux:error name="user_id" />
                    </flux:field>

                    <flux:field>
                        <flux:label>Tag Artikel</flux:label>
                        <div class="max-h-40 overflow-y-auto space-y-1 p-2 rounded-lg border border-zinc-200 dark:border-zinc-800">
                            @foreach($tags as $tag)
                                <label class="flex items-center gap-2 text-sm p-1 rounded hover:bg-zinc-100 dark:hover:bg-zinc-800 cursor-pointer">
                                    <input type="checkbox" wire:model="tag_ids" value="{{ $tag->id }}" class="rounded text-emerald-600 focus:ring-emerald-500">
                                    <span>{{ $tag->name }}</span>
                                </label>
                            @endforeach
                        </div>
                        <flux:error name="tag_ids" />
                    </flux:field>
                </div>

                <div class="flex gap-2">
                    <flux:button type="submit" variant="primary" class="w-full">Simpan Postingan</flux:button>
                </div>
            </div>
        </div>
    </form>
</div>
