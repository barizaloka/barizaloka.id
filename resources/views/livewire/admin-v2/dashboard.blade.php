<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-zinc-900 dark:text-zinc-100">Dashboard Admin V2</h1>
            <p class="text-sm text-zinc-500 dark:text-zinc-400">Ringkasan statistik dan aktivitas terbaru platform Barizaloka.</p>
        </div>
        <div class="flex items-center gap-2">
            <flux:button variant="primary" icon="plus" :href="route('admin-v2.posts.create')" wire:navigate>
                Buat Postingan
            </flux:button>
        </div>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="p-5 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-2 shadow-xs">
            <div class="flex items-center justify-between text-zinc-500 dark:text-zinc-400">
                <span class="text-xs font-semibold uppercase tracking-wider">Postingan Blog</span>
                <flux:icon name="document-text" class="size-5 text-emerald-500" />
            </div>
            <div class="text-3xl font-extrabold text-zinc-900 dark:text-zinc-100">{{ $stats['total_posts'] }}</div>
            <div class="text-xs text-emerald-600 dark:text-emerald-400 font-medium">
                {{ $stats['published_posts'] }} dipublikasikan
            </div>
        </div>

        <div class="p-5 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-2 shadow-xs">
            <div class="flex items-center justify-between text-zinc-500 dark:text-zinc-400">
                <span class="text-xs font-semibold uppercase tracking-wider">Total Pembaca Views</span>
                <flux:icon name="eye" class="size-5 text-sky-500" />
            </div>
            <div class="text-3xl font-extrabold text-zinc-900 dark:text-zinc-100">{{ number_format($stats['total_views']) }}</div>
            <div class="text-xs text-zinc-500 dark:text-zinc-400 font-medium">Total seluruh views artikel</div>
        </div>

        <div class="p-5 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-2 shadow-xs">
            <div class="flex items-center justify-between text-zinc-500 dark:text-zinc-400">
                <span class="text-xs font-semibold uppercase tracking-wider">Portofolio Proyek</span>
                <flux:icon name="briefcase" class="size-5 text-amber-500" />
            </div>
            <div class="text-3xl font-extrabold text-zinc-900 dark:text-zinc-100">{{ $stats['total_projects'] }}</div>
            <div class="text-xs text-amber-600 dark:text-amber-400 font-medium">
                {{ $stats['featured_projects'] }} proyek unggulan
            </div>
        </div>

        <div class="p-5 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-2 shadow-xs">
            <div class="flex items-center justify-between text-zinc-500 dark:text-zinc-400">
                <span class="text-xs font-semibold uppercase tracking-wider">Partner Aktif</span>
                <flux:icon name="user-group" class="size-5 text-indigo-500" />
            </div>
            <div class="text-3xl font-extrabold text-zinc-900 dark:text-zinc-100">{{ $stats['active_partners'] }}</div>
            <div class="text-xs text-zinc-500 dark:text-zinc-400 font-medium">Partner & Klien terdaftar</div>
        </div>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3">
        <a href="{{ route('admin-v2.categories.index') }}" wire:navigate class="p-4 rounded-xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 hover:border-emerald-500 dark:hover:border-emerald-500 transition">
            <div class="text-xs text-zinc-500">Kategori</div>
            <div class="text-xl font-bold mt-1">{{ $stats['total_categories'] }}</div>
        </a>
        <a href="{{ route('admin-v2.tags.index') }}" wire:navigate class="p-4 rounded-xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 hover:border-emerald-500 dark:hover:border-emerald-500 transition">
            <div class="text-xs text-zinc-500">Tag</div>
            <div class="text-xl font-bold mt-1">{{ $stats['total_tags'] }}</div>
        </a>
        <a href="{{ route('admin-v2.package-jasa-websites.index') }}" wire:navigate class="p-4 rounded-xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 hover:border-emerald-500 dark:hover:border-emerald-500 transition">
            <div class="text-xs text-zinc-500">Paket Website</div>
            <div class="text-xl font-bold mt-1">{{ $stats['total_packages'] }}</div>
        </a>
        <a href="{{ route('admin-v2.popups.index') }}" wire:navigate class="p-4 rounded-xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 hover:border-emerald-500 dark:hover:border-emerald-500 transition">
            <div class="text-xs text-zinc-500">Popup Aktif</div>
            <div class="text-xl font-bold mt-1">{{ $stats['active_popups'] }}</div>
        </a>
        <a href="{{ route('admin-v2.faqs.index') }}" wire:navigate class="p-4 rounded-xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 hover:border-emerald-500 dark:hover:border-emerald-500 transition">
            <div class="text-xs text-zinc-500">FAQ</div>
            <div class="text-xl font-bold mt-1">{{ $stats['total_faqs'] }}</div>
        </a>
        <a href="{{ route('admin-v2.media.index') }}" wire:navigate class="p-4 rounded-xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 hover:border-emerald-500 dark:hover:border-emerald-500 transition">
            <div class="text-xs text-zinc-500">Media Library</div>
            <div class="text-xl font-bold mt-1">{{ $stats['total_media'] }}</div>
        </a>
    </div>

    <!-- Recent Lists -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Recent Posts -->
        <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-4">
            <div class="flex items-center justify-between">
                <h2 class="font-bold text-lg">Postingan Terbaru</h2>
                <flux:button variant="ghost" size="sm" :href="route('admin-v2.posts.index')" wire:navigate>Lihat Semua</flux:button>
            </div>
            <div class="divide-y divide-zinc-200 dark:divide-zinc-800">
                @forelse($recentPosts as $post)
                    <div class="py-3 flex items-center justify-between gap-4">
                        <div class="min-w-0 flex-1">
                            <a href="{{ route('admin-v2.posts.edit', $post) }}" wire:navigate class="font-medium text-sm hover:text-emerald-600 truncate block">
                                {{ $post->title }}
                            </a>
                            <div class="text-xs text-zinc-500 flex items-center gap-2 mt-0.5">
                                <span>{{ $post->category?->name ?? 'Tanpa Kategori' }}</span>
                                <span>•</span>
                                <span>{{ $post->published_at ? $post->published_at->format('d M Y') : 'Draft' }}</span>
                            </div>
                        </div>
                        <flux:badge size="sm" :color="$post->status === 'published' ? 'emerald' : ($post->status === 'scheduled' ? 'amber' : 'zinc')">
                            {{ ucfirst($post->status) }}
                        </flux:badge>
                    </div>
                @empty
                    <p class="py-4 text-sm text-zinc-500 text-center">Belum ada postingan.</p>
                @endforelse
            </div>
        </div>

        <!-- Recent Projects -->
        <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-4">
            <div class="flex items-center justify-between">
                <h2 class="font-bold text-lg">Proyek Portofolio Terbaru</h2>
                <flux:button variant="ghost" size="sm" :href="route('admin-v2.projects.index')" wire:navigate>Lihat Semua</flux:button>
            </div>
            <div class="divide-y divide-zinc-200 dark:divide-zinc-800">
                @forelse($recentProjects as $project)
                    <div class="py-3 flex items-center justify-between gap-4">
                        <div class="min-w-0 flex-1">
                            <a href="{{ route('admin-v2.projects.edit', $project) }}" wire:navigate class="font-medium text-sm hover:text-emerald-600 truncate block">
                                {{ $project->title }}
                            </a>
                            <div class="text-xs text-zinc-500 flex items-center gap-2 mt-0.5">
                                <span>{{ $project->client_name ?: 'Client Internal' }}</span>
                                <span>•</span>
                                <span>Category: {{ $project->category ?: '-' }}</span>
                            </div>
                        </div>
                        @if($project->is_featured)
                            <flux:badge size="sm" color="amber">Unggulan</flux:badge>
                        @endif
                    </div>
                @empty
                    <p class="py-4 text-sm text-zinc-500 text-center">Belum ada proyek.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
