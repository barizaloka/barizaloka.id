<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-zinc-900 dark:text-zinc-100">Pertanyaan Umum (FAQ)</h1>
            <p class="text-sm text-zinc-500 dark:text-zinc-400">Kelola daftar pertanyaan dan jawaban yang sering ditanyakan pengunjung.</p>
        </div>
        <flux:button variant="primary" icon="plus" :href="route('admin-v2.faqs.create')" wire:navigate>
            Tambah FAQ
        </flux:button>
    </div>

    <!-- Filter & Search -->
    <div class="p-4 rounded-xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 flex items-center justify-between gap-4">
        <div class="w-full sm:w-72">
            <flux:input wire:model.live.debounce.300ms="search" placeholder="Cari pertanyaan..." icon="magnifying-glass" />
        </div>
    </div>

    <!-- FAQs Table -->
    <div class="rounded-xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 overflow-hidden shadow-xs">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="bg-zinc-50 dark:bg-zinc-800/50 text-zinc-500 dark:text-zinc-400 border-b border-zinc-200 dark:border-zinc-800">
                    <tr>
                        <th class="px-6 py-3 font-semibold">Pertanyaan</th>
                        <th class="px-6 py-3 font-semibold">Kategori</th>
                        <th class="px-6 py-3 font-semibold">Status</th>
                        <th class="px-6 py-3 font-semibold">Urutan</th>
                        <th class="px-6 py-3 font-semibold text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-200 dark:divide-zinc-800">
                    @forelse($faqs as $faq)
                        <tr class="hover:bg-zinc-50/50 dark:hover:bg-zinc-800/30">
                            <td class="px-6 py-4 font-medium text-zinc-900 dark:text-zinc-100">
                                <a href="{{ route('admin-v2.faqs.show', $faq) }}" wire:navigate class="hover:text-emerald-600 block font-semibold">
                                    {{ Str::limit($faq->question, 60) }}
                                </a>
                                <div class="text-xs text-zinc-400 truncate max-w-md mt-0.5">{{ Str::limit($faq->answer, 80) }}</div>
                            </td>
                            <td class="px-6 py-4 text-zinc-500">
                                {{ $faq->category ?: 'Umum' }}
                            </td>
                            <td class="px-6 py-4">
                                <button type="button" wire:click="toggleActive({{ $faq->id }})">
                                    <flux:badge size="sm" :color="$faq->is_active ? 'emerald' : 'zinc'">
                                        {{ $faq->is_active ? 'Aktif' : 'Nonaktif' }}
                                    </flux:badge>
                                </button>
                            </td>
                            <td class="px-6 py-4 text-zinc-500 font-mono text-xs">
                                {{ $faq->order }}
                            </td>
                            <td class="px-6 py-4 text-right space-x-1">
                                <flux:button variant="ghost" size="sm" icon="eye" :href="route('admin-v2.faqs.show', $faq)" wire:navigate />
                                <flux:button variant="ghost" size="sm" icon="pencil-square" :href="route('admin-v2.faqs.edit', $faq)" wire:navigate />
                                <flux:button variant="ghost" size="sm" icon="trash" class="text-rose-600 hover:text-rose-700" wire:click="delete({{ $faq->id }})" wire:confirm="Yakin ingin menghapus FAQ ini?" />
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-8 text-center text-zinc-500">Tidak ada FAQ ditemukan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="px-6 py-4 border-t border-zinc-200 dark:border-zinc-800">
            {{ $faqs->links() }}
        </div>
    </div>
</div>
