<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-zinc-900 dark:text-zinc-100">Paket Jasa Website</h1>
            <p class="text-sm text-zinc-500 dark:text-zinc-400">Kelola daftar penawaran paket harga dan fitur jasa pemuatan website.</p>
        </div>
        <flux:button variant="primary" icon="plus" :href="route('admin-v2.package-jasa-websites.create')" wire:navigate>
            Tambah Paket
        </flux:button>
    </div>

    <!-- Filter & Search -->
    <div class="p-4 rounded-xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 flex items-center justify-between gap-4">
        <div class="w-full sm:w-72">
            <flux:input wire:model.live.debounce.300ms="search" placeholder="Cari nama paket..." icon="magnifying-glass" />
        </div>
    </div>

    <!-- Packages Table -->
    <div class="rounded-xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 overflow-hidden shadow-xs">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="bg-zinc-50 dark:bg-zinc-800/50 text-zinc-500 dark:text-zinc-400 border-b border-zinc-200 dark:border-zinc-800">
                    <tr>
                        <th class="px-6 py-3 font-semibold">Nama Paket</th>
                        <th class="px-6 py-3 font-semibold">Harga</th>
                        <th class="px-6 py-3 font-semibold">Periode</th>
                        <th class="px-6 py-3 font-semibold">Badge / Status</th>
                        <th class="px-6 py-3 font-semibold">Urutan</th>
                        <th class="px-6 py-3 font-semibold text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-200 dark:divide-zinc-800">
                    @forelse($packages as $package)
                        <tr class="hover:bg-zinc-50/50 dark:hover:bg-zinc-800/30">
                            <td class="px-6 py-4 font-medium text-zinc-900 dark:text-zinc-100">
                                <a href="{{ route('admin-v2.package-jasa-websites.show', $package) }}" wire:navigate class="hover:text-emerald-600 block">
                                    {{ $package->name }}
                                </a>
                                <div class="text-xs text-zinc-400 truncate max-w-xs">{{ $package->tagline }}</div>
                            </td>
                            <td class="px-6 py-4 font-bold text-emerald-600 dark:text-emerald-400">
                                {{ $package->price_label ?: 'Rp '.number_format($package->price) }}
                            </td>
                            <td class="px-6 py-4 text-zinc-500 text-xs">
                                {{ $package->price_period }}
                            </td>
                            <td class="px-6 py-4">
                                @if($package->badge_label)
                                    <flux:badge size="sm" color="amber">{{ $package->badge_label }}</flux:badge>
                                @endif
                                @if($package->is_featured)
                                    <flux:badge size="sm" color="emerald">Unggulan</flux:badge>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-zinc-500 font-mono text-xs">
                                {{ $package->order }}
                            </td>
                            <td class="px-6 py-4 text-right space-x-1">
                                <flux:button variant="ghost" size="sm" icon="eye" :href="route('admin-v2.package-jasa-websites.show', $package)" wire:navigate />
                                <flux:button variant="ghost" size="sm" icon="pencil-square" :href="route('admin-v2.package-jasa-websites.edit', $package)" wire:navigate />
                                <flux:button variant="ghost" size="sm" icon="trash" class="text-rose-600 hover:text-rose-700" wire:click="delete({{ $package->id }})" wire:confirm="Yakin ingin menghapus paket ini?" />
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-8 text-center text-zinc-500">Tidak ada paket ditemukan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="px-6 py-4 border-t border-zinc-200 dark:border-zinc-800">
            {{ $packages->links() }}
        </div>
    </div>
</div>
