<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-zinc-900 dark:text-zinc-100">Popup Promo & Widget</h1>
            <p class="text-sm text-zinc-500 dark:text-zinc-400">Kelola popup pengumuman, promo, dan penawaran khusus di website.</p>
        </div>
        <flux:button variant="primary" icon="plus" :href="route('admin-v2.popups.create')" wire:navigate>
            Buat Popup
        </flux:button>
    </div>

    <!-- Filter & Search -->
    <div class="p-4 rounded-xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 flex items-center justify-between gap-4">
        <div class="w-full sm:w-72">
            <flux:input wire:model.live.debounce.300ms="search" placeholder="Cari nama popup..." icon="magnifying-glass" />
        </div>
    </div>

    <!-- Popups Table -->
    <div class="rounded-xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 overflow-hidden shadow-xs">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="bg-zinc-50 dark:bg-zinc-800/50 text-zinc-500 dark:text-zinc-400 border-b border-zinc-200 dark:border-zinc-800">
                    <tr>
                        <th class="px-6 py-3 font-semibold">Nama Popup</th>
                        <th class="px-6 py-3 font-semibold">Tipe Target</th>
                        <th class="px-6 py-3 font-semibold">Frekuensi</th>
                        <th class="px-6 py-3 font-semibold">Slide</th>
                        <th class="px-6 py-3 font-semibold">Prioritas</th>
                        <th class="px-6 py-3 font-semibold">Status</th>
                        <th class="px-6 py-3 font-semibold text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-200 dark:divide-zinc-800">
                    @forelse($popups as $popup)
                        <tr class="hover:bg-zinc-50/50 dark:hover:bg-zinc-800/30">
                            <td class="px-6 py-4 font-medium text-zinc-900 dark:text-zinc-100">
                                <a href="{{ route('admin-v2.popups.show', $popup) }}" wire:navigate class="hover:text-emerald-600 block">
                                    {{ $popup->name }}
                                </a>
                            </td>
                            <td class="px-6 py-4 text-zinc-500">
                                <flux:badge size="sm" color="sky">{{ ucfirst($popup->target_type) }}</flux:badge>
                            </td>
                            <td class="px-6 py-4 text-zinc-500 text-xs">
                                {{ Popup::frequencyOptions()[$popup->frequency] ?? $popup->frequency }}
                            </td>
                            <td class="px-6 py-4">
                                <flux:badge size="sm" color="zinc">{{ $popup->slides_count }} Slide</flux:badge>
                            </td>
                            <td class="px-6 py-4 text-zinc-500 font-mono text-xs">
                                {{ $popup->priority }}
                            </td>
                            <td class="px-6 py-4">
                                <button type="button" wire:click="toggleActive({{ $popup->id }})">
                                    <flux:badge size="sm" :color="$popup->is_active ? 'emerald' : 'zinc'">
                                        {{ $popup->is_active ? 'Aktif' : 'Nonaktif' }}
                                    </flux:badge>
                                </button>
                            </td>
                            <td class="px-6 py-4 text-right space-x-1">
                                <flux:button variant="ghost" size="sm" icon="eye" :href="route('admin-v2.popups.show', $popup)" wire:navigate />
                                <flux:button variant="ghost" size="sm" icon="pencil-square" :href="route('admin-v2.popups.edit', $popup)" wire:navigate />
                                <flux:button variant="ghost" size="sm" icon="trash" class="text-rose-600 hover:text-rose-700" wire:click="delete({{ $popup->id }})" wire:confirm="Yakin ingin menghapus popup ini?" />
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-8 text-center text-zinc-500">Tidak ada popup ditemukan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="px-6 py-4 border-t border-zinc-200 dark:border-zinc-800">
            {{ $popups->links() }}
        </div>
    </div>
</div>
