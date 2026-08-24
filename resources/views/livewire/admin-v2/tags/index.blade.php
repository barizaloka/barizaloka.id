<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-zinc-900 dark:text-zinc-100">Tag Artikel</h1>
            <p class="text-sm text-zinc-500 dark:text-zinc-400">Kelola tag untuk mengelompokkan topik artikel.</p>
        </div>
        <flux:button variant="primary" icon="plus" wire:click="openCreateModal">
            Tambah Tag
        </flux:button>
    </div>

    <!-- Filter & Search -->
    <div class="p-4 rounded-xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 flex items-center justify-between gap-4">
        <div class="w-full sm:w-72">
            <flux:input wire:model.live.debounce.300ms="search" placeholder="Cari tag..." icon="magnifying-glass" />
        </div>
    </div>

    <!-- Tags Table -->
    <div class="rounded-xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 overflow-hidden shadow-xs">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="bg-zinc-50 dark:bg-zinc-800/50 text-zinc-500 dark:text-zinc-400 border-b border-zinc-200 dark:border-zinc-800">
                    <tr>
                        <th class="px-6 py-3 font-semibold">Nama Tag</th>
                        <th class="px-6 py-3 font-semibold">Slug</th>
                        <th class="px-6 py-3 font-semibold">Jumlah Artikel</th>
                        <th class="px-6 py-3 font-semibold text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-200 dark:divide-zinc-800">
                    @forelse($tags as $tag)
                        <tr class="hover:bg-zinc-50/50 dark:hover:bg-zinc-800/30">
                            <td class="px-6 py-4 font-medium text-zinc-900 dark:text-zinc-100">
                                {{ $tag->name }}
                            </td>
                            <td class="px-6 py-4 text-zinc-500 dark:text-zinc-400 font-mono text-xs">
                                {{ $tag->slug }}
                            </td>
                            <td class="px-6 py-4">
                                <flux:badge size="sm" color="zinc">{{ $tag->posts_count }} Artikel</flux:badge>
                            </td>
                            <td class="px-6 py-4 text-right space-x-2">
                                <flux:button variant="ghost" size="sm" icon="pencil-square" wire:click="openEditModal({{ $tag->id }})" />
                                <flux:button variant="ghost" size="sm" icon="trash" class="text-rose-600 hover:text-rose-700" wire:click="delete({{ $tag->id }})" wire:confirm="Yakin ingin menghapus tag ini?" />
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-8 text-center text-zinc-500">Tidak ada tag ditemukan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="px-6 py-4 border-t border-zinc-200 dark:border-zinc-800">
            {{ $tags->links() }}
        </div>
    </div>

    <!-- Create / Edit Modal -->
    <flux:modal wire:model="showModal" class="md:w-[450px]">
        <form wire:submit="save" class="space-y-4">
            <div>
                <flux:heading size="lg">{{ $editingTagId ? 'Edit Tag' : 'Tambah Tag Baru' }}</flux:heading>
                <flux:subheading>Isi nama tag artikel di bawah ini.</flux:subheading>
            </div>

            <flux:field>
                <flux:label>Nama Tag</flux:label>
                <flux:input wire:model.live="name" placeholder="Contoh: Laravel" />
                <flux:error name="name" />
            </flux:field>

            <flux:field>
                <flux:label>Slug</flux:label>
                <flux:input wire:model="slug" placeholder="laravel" />
                <flux:error name="slug" />
            </flux:field>

            <div class="flex justify-end gap-2 pt-4">
                <flux:modal.close>
                    <flux:button variant="ghost">Batal</flux:button>
                </flux:modal.close>
                <flux:button type="submit" variant="primary">Simpan</flux:button>
            </div>
        </form>
    </flux:modal>
</div>
