<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-zinc-900 dark:text-zinc-100">Media Library</h1>
            <p class="text-sm text-zinc-500 dark:text-zinc-400">Kelola gambar dan media yang diunggah di situs.</p>
        </div>
        <flux:button variant="primary" icon="cloud-arrow-up" wire:click="$set('showUploadModal', true)">
            Unggah Media
        </flux:button>
    </div>

    <!-- Filter & Search -->
    <div class="p-4 rounded-xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 flex items-center justify-between gap-4">
        <div class="w-full sm:w-72">
            <flux:input wire:model.live.debounce.300ms="search" placeholder="Cari nama media..." icon="magnifying-glass" />
        </div>
    </div>

    <!-- Media Grid -->
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
        @forelse($mediaFiles as $media)
            <div class="group relative rounded-xl overflow-hidden border border-zinc-200 dark:border-zinc-800 bg-white dark:bg-zinc-900 shadow-xs flex flex-col">
                <div class="h-36 w-full bg-zinc-100 dark:bg-zinc-800 flex items-center justify-center overflow-hidden">
                    @if($media->isImage())
                        <img src="{{ $media->url() }}" alt="{{ $media->alt_text }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-200">
                    @else
                        <div class="text-center p-2">
                            <flux:icon name="document" class="size-10 mx-auto text-zinc-400" />
                            <div class="text-[10px] text-zinc-500 font-mono mt-1 uppercase">{{ pathinfo($media->name, PATHINFO_EXTENSION) }}</div>
                        </div>
                    @endif
                </div>
                <div class="p-2 flex-1 flex flex-col justify-between space-y-1">
                    <div class="text-xs font-medium text-zinc-900 dark:text-zinc-100 truncate" title="{{ $media->name }}">
                        {{ $media->name }}
                    </div>
                    <div class="flex items-center justify-between text-[11px] text-zinc-500">
                        <span>{{ $media->humanSize() }}</span>
                        <div class="flex items-center gap-1">
                            <flux:button variant="ghost" size="xs" icon="pencil-square" wire:click="openEditModal({{ $media->id }})" />
                            <flux:button variant="ghost" size="xs" icon="trash" class="text-rose-600" wire:click="delete({{ $media->id }})" wire:confirm="Yakin ingin menghapus media ini?" />
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-full py-12 text-center text-zinc-500">Belum ada file media diunggah.</div>
        @endforelse
    </div>

    <div class="px-6 py-4">
        {{ $mediaFiles->links() }}
    </div>

    <!-- Upload Modal -->
    <flux:modal wire:model="showUploadModal" class="md:w-[450px]">
        <form wire:submit="upload" class="space-y-4">
            <div>
                <flux:heading size="lg">Unggah File Media</flux:heading>
                <flux:subheading>Pilih file gambar atau dokumen dari komputer Anda.</flux:subheading>
            </div>

            <flux:field>
                <flux:label>File Media</flux:label>
                <flux:input type="file" wire:model="uploadFile" />
                <flux:error name="uploadFile" />
            </flux:field>

            <div class="flex justify-end gap-2 pt-4">
                <flux:modal.close>
                    <flux:button variant="ghost">Batal</flux:button>
                </flux:modal.close>
                <flux:button type="submit" variant="primary">Unggah Sekarang</flux:button>
            </div>
        </form>
    </flux:modal>

    <!-- Edit Modal -->
    <flux:modal wire:model="showEditModal" class="md:w-[450px]">
        <form wire:submit="saveEdit" class="space-y-4">
            <div>
                <flux:heading size="lg">Edit Detail Media</flux:heading>
                <flux:subheading>Ubah alt text dan keterangan file.</flux:subheading>
            </div>

            <flux:field>
                <flux:label>Nama File</flux:label>
                <flux:input wire:model="name" disabled />
            </flux:field>

            <flux:field>
                <flux:label>Alt Text (Teks Alternatif)</flux:label>
                <flux:input wire:model="alt_text" placeholder="Deskripsi gambar untuk SEO..." />
                <flux:error name="alt_text" />
            </flux:field>

            <flux:field>
                <flux:label>Keterangan (Caption)</flux:label>
                <flux:input wire:model="caption" placeholder="Keterangan singkat..." />
                <flux:error name="caption" />
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
