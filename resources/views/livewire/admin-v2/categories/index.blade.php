<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-zinc-900 dark:text-zinc-100">Kategori Artikel</h1>
            <p class="text-sm text-zinc-500 dark:text-zinc-400">Kelola kategori untuk postingan blog.</p>
        </div>
        <flux:button variant="primary" icon="plus" wire:click="openCreateModal">
            Tambah Kategori
        </flux:button>
    </div>

    <!-- Filter & Search -->
    <div class="p-4 rounded-xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 flex items-center justify-between gap-4">
        <div class="w-full sm:w-72">
            <flux:input wire:model.live.debounce.300ms="search" placeholder="Cari nama atau slug..." icon="magnifying-glass" />
        </div>
    </div>

    <!-- Categories Table -->
    <div class="rounded-xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 overflow-hidden shadow-xs">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="bg-zinc-50 dark:bg-zinc-800/50 text-zinc-500 dark:text-zinc-400 border-b border-zinc-200 dark:border-zinc-800">
                    <tr>
                        <th class="px-6 py-3 font-semibold">Nama Kategori</th>
                        <th class="px-6 py-3 font-semibold">Slug</th>
                        <th class="px-6 py-3 font-semibold">Induk</th>
                        <th class="px-6 py-3 font-semibold">Artikel</th>
                        <th class="px-6 py-3 font-semibold text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-200 dark:divide-zinc-800">
                    @forelse($categories as $category)
                        <tr class="hover:bg-zinc-50/50 dark:hover:bg-zinc-800/30">
                            <td class="px-6 py-4 font-medium text-zinc-900 dark:text-zinc-100">
                                {{ $category->name }}
                            </td>
                            <td class="px-6 py-4 text-zinc-500 dark:text-zinc-400 font-mono text-xs">
                                {{ $category->slug }}
                            </td>
                            <td class="px-6 py-4 text-zinc-500 dark:text-zinc-400">
                                {{ $category->parent?->name ?? '—' }}
                            </td>
                            <td class="px-6 py-4">
                                <flux:badge size="sm" color="emerald">{{ $category->posts_count }} Artikel</flux:badge>
                            </td>
                            <td class="px-6 py-4 text-right space-x-2">
                                <flux:button variant="ghost" size="sm" icon="pencil-square" wire:click="openEditModal({{ $category->id }})" />
                                <flux:button variant="ghost" size="sm" icon="trash" class="text-rose-600 hover:text-rose-700" wire:click="delete({{ $category->id }})" wire:confirm="Yakin ingin menghapus kategori ini?" />
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-8 text-center text-zinc-500">Tidak ada kategori ditemukan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="px-6 py-4 border-t border-zinc-200 dark:border-zinc-800">
            {{ $categories->links() }}
        </div>
    </div>

    <!-- Create / Edit Modal -->
    <flux:modal wire:model="showModal" class="md:w-[500px]">
        <form wire:submit="save" class="space-y-4">
            <div>
                <flux:heading size="lg">{{ $editingCategoryId ? 'Edit Kategori' : 'Tambah Kategori Baru' }}</flux:heading>
                <flux:subheading>Isi detail informasi kategori blog di bawah ini.</flux:subheading>
            </div>

            <flux:field>
                <flux:label>Nama Kategori</flux:label>
                <flux:input wire:model.live="name" placeholder="Contoh: Digital Marketing" />
                <flux:error name="name" />
            </flux:field>

            <flux:field>
                <flux:label>Slug</flux:label>
                <flux:input wire:model="slug" placeholder="digital-marketing" />
                <flux:error name="slug" />
            </flux:field>

            <flux:field>
                <flux:label>Kategori Induk (Opsional)</flux:label>
                <flux:select wire:model="parent_id" placeholder="Pilih Kategori Induk">
                    <option value="">Tidak Ada (Kategori Utama)</option>
                    @foreach($parentCategories as $parent)
                        <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                    @endforeach
                </flux:select>
                <flux:error name="parent_id" />
            </flux:field>

            <flux:field>
                <flux:label>Deskripsi</flux:label>
                <flux:textarea wire:model="description" rows="3" placeholder="Deskripsi singkat mengenai kategori..." />
                <flux:error name="description" />
            </flux:field>

            <flux:fieldset>
                <legend class="text-sm font-semibold mb-2 text-zinc-700 dark:text-zinc-300">Pengaturan SEO (Opsional)</legend>
                <div class="space-y-3">
                    <flux:field>
                        <flux:label>Meta Title</flux:label>
                        <flux:input wire:model="meta_title" placeholder="Maks 70 karakter" />
                        <flux:error name="meta_title" />
                    </flux:field>
                    <flux:field>
                        <flux:label>Meta Description</flux:label>
                        <flux:textarea wire:model="meta_description" rows="2" placeholder="Maks 160 karakter" />
                        <flux:error name="meta_description" />
                    </flux:field>
                </div>
            </flux:fieldset>

            <div class="flex justify-end gap-2 pt-4">
                <flux:modal.close>
                    <flux:button variant="ghost">Batal</flux:button>
                </flux:modal.close>
                <flux:button type="submit" variant="primary">Simpan</flux:button>
            </div>
        </form>
    </flux:modal>
</div>
