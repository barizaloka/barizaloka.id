<div class="max-w-2xl mx-auto space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-zinc-900 dark:text-zinc-100">Tambah FAQ Baru</h1>
            <p class="text-sm text-zinc-500 dark:text-zinc-400">Isi pertanyaan dan jawaban baru.</p>
        </div>
        <flux:button variant="ghost" icon="arrow-left" :href="route('admin-v2.faqs.index')" wire:navigate>
            Kembali
        </flux:button>
    </div>

    <form wire:submit="save" class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-4 shadow-xs">
        <flux:field>
            <flux:label>Pertanyaan</flux:label>
            <flux:input wire:model="question" placeholder="Berapa lama proses pembuatan website?" />
            <flux:error name="question" />
        </flux:field>

        <flux:field>
            <flux:label>Jawaban</flux:label>
            <flux:textarea wire:model="answer" rows="5" placeholder="Proses pengerjaan biasanya memakan waktu 3-7 hari kerja..." />
            <flux:error name="answer" />
        </flux:field>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <flux:field>
                <flux:label>Kategori</flux:label>
                <flux:input wire:model="category" placeholder="Layanan / Pembayaran / Umum" />
                <flux:error name="category" />
            </flux:field>

            <flux:field>
                <flux:label>Urutan Tampil</flux:label>
                <flux:input type="number" wire:model="order" placeholder="0" />
                <flux:error name="order" />
            </flux:field>
        </div>

        <div class="flex items-center pt-2">
            <flux:checkbox wire:model="is_active" label="Status Aktif" />
        </div>

        <div class="flex justify-end gap-2 pt-4">
            <flux:button type="submit" variant="primary">Simpan FAQ</flux:button>
        </div>
    </form>
</div>
