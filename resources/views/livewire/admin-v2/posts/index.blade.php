<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-zinc-900 dark:text-zinc-100">Postingan Blog</h1>
            <p class="text-sm text-zinc-500 dark:text-zinc-400">Kelola artikel dan publikasi berita platform.</p>
        </div>
        <flux:button variant="primary" icon="plus" :href="route('admin-v2.posts.create')" wire:navigate>
            Buat Postingan
        </flux:button>
    </div>

    <!-- Filter & Search Bar -->
    <div class="p-4 rounded-xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 flex flex-wrap items-center justify-between gap-4">
        <div class="flex flex-wrap items-center gap-3 w-full lg:w-auto">
            <div class="w-full sm:w-64">
                <flux:input wire:model.live.debounce.300ms="search" placeholder="Cari judul postingan..." icon="magnifying-glass" />
            </div>
            <div class="w-full sm:w-44">
                <flux:select wire:model.live="statusFilter" placeholder="Status">
                    <option value="">Semua Status</option>
                    <option value="published">Dipublikasikan</option>
                    <option value="draft">Draft</option>
                    <option value="scheduled">Terjadwal</option>
                </flux:select>
            </div>
            <div class="w-full sm:w-48">
                <flux:select wire:model.live="categoryFilter" placeholder="Kategori">
                    <option value="">Semua Kategori</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </flux:select>
            </div>
        </div>

        @if(count($selectedPosts) > 0)
            <div class="flex items-center gap-2 bg-emerald-50 dark:bg-emerald-950/40 p-2 rounded-lg border border-emerald-200 dark:border-emerald-800 text-xs">
                <span class="font-semibold text-emerald-800 dark:text-emerald-300">{{ count($selectedPosts) }} Dipilih</span>
                <flux:button size="xs" color="emerald" wire:click="bulkPublish">Publikasikan</flux:button>
                <flux:button size="xs" color="amber" wire:click="bulkUnpublish">Draft-kan</flux:button>
                <flux:button size="xs" color="rose" wire:click="bulkDelete" wire:confirm="Hapus {{ count($selectedPosts) }} postingan ini?">Hapus</flux:button>
            </div>
        @endif
    </div>

    <!-- Posts Table -->
    <div class="rounded-xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 overflow-hidden shadow-xs">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="bg-zinc-50 dark:bg-zinc-800/50 text-zinc-500 dark:text-zinc-400 border-b border-zinc-200 dark:border-zinc-800">
                    <tr>
                        <th class="px-4 py-3 w-10">
                            <input type="checkbox" wire:model.live="selectAll" class="rounded border-zinc-300 dark:border-zinc-700 text-emerald-600 focus:ring-emerald-500">
                        </th>
                        <th class="px-4 py-3 font-semibold">Gambar</th>
                        <th class="px-6 py-3 font-semibold">Judul</th>
                        <th class="px-6 py-3 font-semibold">Kategori</th>
                        <th class="px-6 py-3 font-semibold">Status</th>
                        <th class="px-6 py-3 font-semibold">Views</th>
                        <th class="px-6 py-3 font-semibold">Tanggal</th>
                        <th class="px-6 py-3 font-semibold text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-200 dark:divide-zinc-800">
                    @forelse($posts as $post)
                        <tr class="hover:bg-zinc-50/50 dark:hover:bg-zinc-800/30">
                            <td class="px-4 py-4">
                                <input type="checkbox" wire:model.live="selectedPosts" value="{{ $post->id }}" class="rounded border-zinc-300 dark:border-zinc-700 text-emerald-600 focus:ring-emerald-500">
                            </td>
                            <td class="px-4 py-4">
                                @if($post->featured_image)
                                    <img src="{{ Storage::url($post->featured_image) }}" alt="" class="size-10 rounded-lg object-cover border border-zinc-200 dark:border-zinc-800">
                                @else
                                    <div class="size-10 rounded-lg bg-zinc-100 dark:bg-zinc-800 flex items-center justify-center text-zinc-400">
                                        <flux:icon name="photo" class="size-5" />
                                    </div>
                                @endif
                            </td>
                            <td class="px-6 py-4 font-medium text-zinc-900 dark:text-zinc-100">
                                <a href="{{ route('admin-v2.posts.show', $post) }}" wire:navigate class="hover:text-emerald-600 block">
                                    {{ Str::limit($post->title, 50) }}
                                </a>
                                <div class="text-xs text-zinc-400 font-mono mt-0.5">/{{ $post->slug }}</div>
                            </td>
                            <td class="px-6 py-4 text-zinc-500">
                                {{ $post->category?->name ?? '—' }}
                            </td>
                            <td class="px-6 py-4">
                                <flux:badge size="sm" :color="$post->status === 'published' ? 'emerald' : ($post->status === 'scheduled' ? 'amber' : 'zinc')">
                                    {{ ucfirst($post->status) }}
                                </flux:badge>
                                @if($post->is_featured)
                                    <span class="inline-block ml-1 text-xs text-amber-500 font-semibold" title="Unggulan">★</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-zinc-500">
                                {{ number_format($post->views_count) }}
                            </td>
                            <td class="px-6 py-4 text-zinc-500 text-xs">
                                {{ $post->published_at ? $post->published_at->format('d M Y') : 'Draft' }}
                            </td>
                            <td class="px-6 py-4 text-right space-x-1">
                                <flux:button variant="ghost" size="sm" icon="eye" :href="route('admin-v2.posts.show', $post)" wire:navigate />
                                <flux:button variant="ghost" size="sm" icon="pencil-square" :href="route('admin-v2.posts.edit', $post)" wire:navigate />
                                <flux:button variant="ghost" size="sm" icon="trash" class="text-rose-600 hover:text-rose-700" wire:click="delete({{ $post->id }})" wire:confirm="Yakin ingin menghapus postingan ini?" />
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="px-6 py-8 text-center text-zinc-500">Tidak ada postingan ditemukan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="px-6 py-4 border-t border-zinc-200 dark:border-zinc-800">
            {{ $posts->links() }}
        </div>
    </div>
</div>
