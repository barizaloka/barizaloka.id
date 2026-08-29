<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-zinc-900 dark:text-zinc-100">Portofolio Proyek</h1>
            <p class="text-sm text-zinc-500 dark:text-zinc-400">Kelola daftar hasil karya dan proyek website yang telah dikerjakan.</p>
        </div>
        <flux:button variant="primary" icon="plus" :href="route('admin-v2.projects.create')" wire:navigate>
            Tambah Proyek
        </flux:button>
    </div>

    <!-- Filter & Search -->
    <div class="p-4 rounded-xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 flex flex-wrap items-center justify-between gap-4">
        <div class="flex flex-wrap items-center gap-3 w-full sm:w-auto">
            <div class="w-full sm:w-72">
                <flux:input wire:model.live.debounce.300ms="search" placeholder="Cari judul / nama klien..." icon="magnifying-glass" />
            </div>
            <div class="w-full sm:w-48">
                <flux:select wire:model.live="categoryFilter" placeholder="Kategori">
                    <option value="">Semua Kategori</option>
                    <option value="pesantren">Pesantren & Masjid</option>
                    <option value="desa">Desa</option>
                    <option value="umkm">UMKM</option>
                </flux:select>
            </div>
        </div>
    </div>

    <!-- Projects Table -->
    <div class="rounded-xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 overflow-hidden shadow-xs">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="bg-zinc-50 dark:bg-zinc-800/50 text-zinc-500 dark:text-zinc-400 border-b border-zinc-200 dark:border-zinc-800">
                    <tr>
                        <th class="px-4 py-3 font-semibold">Thumbnail</th>
                        <th class="px-6 py-3 font-semibold">Judul Proyek</th>
                        <th class="px-6 py-3 font-semibold">Klien</th>
                        <th class="px-6 py-3 font-semibold">Kategori</th>
                        <th class="px-6 py-3 font-semibold">Unggulan</th>
                        <th class="px-6 py-3 font-semibold">Urutan</th>
                        <th class="px-6 py-3 font-semibold text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-200 dark:divide-zinc-800">
                    @forelse($projects as $project)
                        <tr class="hover:bg-zinc-50/50 dark:hover:bg-zinc-800/30">
                            <td class="px-4 py-4">
                                @if($project->thumbnail)
                                    <img src="{{ Storage::url($project->thumbnail) }}" alt="" class="size-10 rounded-lg object-cover border border-zinc-200 dark:border-zinc-800">
                                @else
                                    <div class="size-10 rounded-lg bg-zinc-100 dark:bg-zinc-800 flex items-center justify-center text-zinc-400">
                                        <flux:icon name="briefcase" class="size-5" />
                                    </div>
                                @endif
                            </td>
                            <td class="px-6 py-4 font-medium text-zinc-900 dark:text-zinc-100">
                                <a href="{{ route('admin-v2.projects.show', $project) }}" wire:navigate class="hover:text-emerald-600 block">
                                    {{ $project->title }}
                                </a>
                                @if($project->url)
                                    <a href="{{ $project->url }}" target="_blank" class="text-xs text-sky-600 dark:text-sky-400 hover:underline">
                                        {{ $project->url }}
                                    </a>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-zinc-500">
                                {{ $project->client_name ?: '—' }}
                            </td>
                            <td class="px-6 py-4">
                                <flux:badge size="sm" color="amber">{{ ucfirst($project->category ?? 'Umum') }}</flux:badge>
                            </td>
                            <td class="px-6 py-4">
                                @if($project->is_featured)
                                    <flux:badge size="sm" color="emerald">Unggulan</flux:badge>
                                @else
                                    <span class="text-zinc-400">-</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-zinc-500 font-mono text-xs">
                                {{ $project->order }}
                            </td>
                            <td class="px-6 py-4 text-right space-x-1">
                                <flux:button variant="ghost" size="sm" icon="eye" :href="route('admin-v2.projects.show', $project)" wire:navigate />
                                <flux:button variant="ghost" size="sm" icon="pencil-square" :href="route('admin-v2.projects.edit', $project)" wire:navigate />
                                <flux:button variant="ghost" size="sm" icon="trash" class="text-rose-600 hover:text-rose-700" wire:click="delete({{ $project->id }})" wire:confirm="Yakin ingin menghapus proyek ini?" />
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-8 text-center text-zinc-500">Tidak ada proyek ditemukan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="px-6 py-4 border-t border-zinc-200 dark:border-zinc-800">
            {{ $projects->links() }}
        </div>
    </div>
</div>
