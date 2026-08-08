<?php

namespace App\Filament\Widgets;

use App\Models\Partner;
use App\Models\Post;
use App\Models\Project;
use Filament\Support\Icons\Heroicon;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected static bool $isLazy = false;

    protected function getStats(): array
    {
        return [
            Stat::make('Postingan Blog', Post::query()->count())
                ->description(Post::query()->where('status', 'published')->count().' dipublikasikan')
                ->descriptionIcon(Heroicon::OutlinedDocumentText)
                ->color('success'),

            Stat::make('Total Dilihat', number_format(Post::query()->sum('views_count')))
                ->description('Total views seluruh postingan')
                ->descriptionIcon(Heroicon::OutlinedEye)
                ->color('info'),

            Stat::make('Proyek Portfolio', Project::query()->count())
                ->description(Project::query()->where('is_featured', true)->count().' unggulan')
                ->descriptionIcon(Heroicon::OutlinedBriefcase)
                ->color('warning'),

            Stat::make('Partner Aktif', Partner::query()->where('is_active', true)->count())
                ->description('dari '.Partner::query()->count().' total partner')
                ->descriptionIcon(Heroicon::OutlinedUserGroup)
                ->color('primary'),
        ];
    }
}
