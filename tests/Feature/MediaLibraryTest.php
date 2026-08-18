<?php

use App\Console\Commands\ImportExistingMedia;
use App\Models\Media;
use App\Models\PopupSlide;
use App\Models\Post;
use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

uses(RefreshDatabase::class);

beforeEach(function () {
    Storage::fake('public');
});

test('saving a post tracks its featured image and content images in the media library', function () {
    $user = User::factory()->create();
    $featured = UploadedFile::fake()->image('featured.jpg')->store('blog/images', 'public');
    $inline = UploadedFile::fake()->image('inline.jpg')->store('blog/attachments', 'public');

    Post::factory()->create([
        'user_id' => $user->id,
        'featured_image' => $featured,
        'content' => '<p>Hello</p><img src="'.Storage::disk('public')->url($inline).'">',
    ]);

    expect(Media::count())->toBe(2);
    expect(Media::where('path', $featured)->first()->uploaded_by)->toBe($user->id);
    expect(Media::where('path', $inline)->exists())->toBeTrue();
});

test('saving a project tracks its thumbnail in the media library', function () {
    $thumbnail = UploadedFile::fake()->image('thumb.jpg')->store('portfolio/thumbnails', 'public');

    Project::factory()->create(['thumbnail' => $thumbnail]);

    expect(Media::where('path', $thumbnail)->exists())->toBeTrue();
});

test('saving a popup slide tracks its media file in the media library', function () {
    $path = UploadedFile::fake()->image('slide.jpg')->store('popup-slides', 'public');

    PopupSlide::factory()->create(['media_path' => $path]);

    expect(Media::where('path', $path)->exists())->toBeTrue();
});

test('a missing file is never tracked', function () {
    Post::factory()->create(['featured_image' => 'blog/images/does-not-exist.jpg']);

    expect(Media::count())->toBe(0);
});

test('media import command backfills already-uploaded files not yet tracked', function () {
    Storage::disk('public')->put('blog/images/legacy.jpg', 'legacy-bytes');
    Storage::disk('public')->put('.gitignore', '*');

    $this->artisan(ImportExistingMedia::class)->assertSuccessful();

    expect(Media::count())->toBe(1);
    expect(Media::first()->path)->toBe('blog/images/legacy.jpg');
});

test('media library page is viewable and lists media', function () {
    $user = User::factory()->create(['email' => 'admin@barizaloka.id']);
    $path = UploadedFile::fake()->image('foo.jpg')->store('media', 'public');
    Media::track('public', $path, $user->id);

    $this->actingAs($user)
        ->get(route('filament.admin.resources.media.index'))
        ->assertSuccessful()
        ->assertSee('foo');
});
