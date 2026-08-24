<div class="max-w-2xl mx-auto space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-zinc-900 dark:text-zinc-100">Tambah Partner / Klien</h1>
            <p class="text-sm text-zinc-500 dark:text-zinc-400">Isi data mitra atau klien baru.</p>
        </div>
        <flux:button variant="ghost" icon="arrow-left" :href="route('admin-v2.partners.index')" wire:navigate>
            Kembali
        </flux:button>
    </div>

    <form wire:submit="save" class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-4 shadow-xs">
        <flux:field>
            <flux:label>Nama Partner / Lembaga / Usaha</flux:label>
            <flux:input wire:model="name" placeholder="Contoh: Ponpes Al-Hidayah" />
            <flux:error name="name" />
        </flux:field>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <flux:field>
                <flux:label>Ikon Emoji</flux:label>
                <flux:input wire:model="icon" placeholder="🕌 / 🏬 / 🏫" />
                <flux:error name="icon" />
            </flux:field>

            <flux:field>
                <flux:label>Lokasi</flux:label>
                <flux:input wire:model="location" placeholder="Rembang, Jawa Tengah" />
                <flux:error name="location" />
            </flux:field>
        </div>

        <flux:field>
            <flux:label>URL Website Partner</flux:label>
            <flux:input wire:model="url" placeholder="https://..." />
            <flux:error name="url" />
        </flux:field>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
            <flux:field>
                <flux:label>Urutan Tampil</flux:label>
                <flux:input type="number" wire:model="order" placeholder="0" />
                <flux:error name="order" />
            </flux:field>

            <div class="flex items-center pt-6">
                <flux:checkbox wire:model="is_active" label="Status Aktif" />
            </div>
        </div>

        <div class="flex justify-end gap-2 pt-4">
            <flux:button type="submit" variant="primary">Simpan Partner</flux:button>
        </div>
    </form>
</div>
