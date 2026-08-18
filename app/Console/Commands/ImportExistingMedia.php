<?php

namespace App\Console\Commands;

use App\Models\Media;
use App\Models\PopupSlide;
use App\Models\Post;
use App\Models\Project;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

#[Signature('media:import')]
#[Description('Import already-uploaded images/files into the Media Library')]
class ImportExistingMedia extends Command
{
    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $before = Media::count();

        Post::query()->each(fn (Post $post) => $post->syncMediaLibrary());
        Project::query()->each(fn (Project $project) => $project->syncMediaLibrary());
        PopupSlide::query()->each(fn (PopupSlide $slide) => $slide->syncMediaLibrary());

        foreach (Storage::disk('public')->allFiles() as $path) {
            if (str_starts_with(basename($path), '.')) {
                continue;
            }

            Media::track('public', $path);
        }

        $imported = Media::count() - $before;

        $this->info("Media library import complete. {$imported} new file(s) registered.");

        return self::SUCCESS;
    }
}
