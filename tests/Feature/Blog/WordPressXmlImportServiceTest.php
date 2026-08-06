<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Services\WordPressXmlImportService;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

function wordPressXmlFixture(): string
{
    return <<<'XML'
<?xml version="1.0" encoding="UTF-8" ?>
<rss version="2.0"
    xmlns:excerpt="http://wordpress.org/export/1.2/excerpt/"
    xmlns:content="http://purl.org/rss/1.0/modules/content/"
    xmlns:wp="http://wordpress.org/export/1.2/">
<channel>
    <item>
        <title>Kabar Baik dari Barizaloka</title>
        <link>https://example.com/?p=1</link>
        <content:encoded><![CDATA[<p>Ini adalah konten artikel.</p>]]></content:encoded>
        <excerpt:encoded><![CDATA[Ringkasan artikel.]]></excerpt:encoded>
        <wp:post_id>1</wp:post_id>
        <wp:post_date>2026-01-10 08:00:00</wp:post_date>
        <wp:post_date_gmt>2026-01-10 01:00:00</wp:post_date_gmt>
        <wp:post_name>kabar-baik-dari-barizaloka</wp:post_name>
        <wp:status>publish</wp:status>
        <wp:post_type>post</wp:post_type>
        <category domain="category" nicename="berita"><![CDATA[Berita]]></category>
        <category domain="post_tag" nicename="komunitas"><![CDATA[Komunitas]]></category>
    </item>
    <item>
        <title>Draf yang Belum Terbit</title>
        <content:encoded><![CDATA[<p>Konten draf.</p>]]></content:encoded>
        <excerpt:encoded><![CDATA[]]></excerpt:encoded>
        <wp:post_id>2</wp:post_id>
        <wp:post_date>2026-01-11 08:00:00</wp:post_date>
        <wp:post_date_gmt>2026-01-11 01:00:00</wp:post_date_gmt>
        <wp:post_name>draf-yang-belum-terbit</wp:post_name>
        <wp:status>draft</wp:status>
        <wp:post_type>post</wp:post_type>
    </item>
    <item>
        <title>Halaman Statis</title>
        <content:encoded><![CDATA[<p>Bukan artikel.</p>]]></content:encoded>
        <excerpt:encoded><![CDATA[]]></excerpt:encoded>
        <wp:post_id>3</wp:post_id>
        <wp:post_date>2026-01-12 08:00:00</wp:post_date>
        <wp:post_date_gmt>2026-01-12 01:00:00</wp:post_date_gmt>
        <wp:post_name>halaman-statis</wp:post_name>
        <wp:status>publish</wp:status>
        <wp:post_type>page</wp:post_type>
    </item>
</channel>
</rss>
XML;
}

test('it imports only published posts by default and skips pages and drafts', function () {
    $author = User::factory()->create();

    $result = app(WordPressXmlImportService::class)->import(wordPressXmlFixture(), $author);

    expect($result)->toBe(['imported' => 1, 'skipped' => 2]);
    expect(Post::count())->toBe(1);

    $post = Post::first();
    expect($post->title)->toBe('Kabar Baik dari Barizaloka');
    expect($post->slug)->toBe('kabar-baik-dari-barizaloka');
    expect($post->content)->toBe('<p>Ini adalah konten artikel.</p>');
    expect($post->excerpt)->toBe('Ringkasan artikel.');
    expect($post->status)->toBe('published');
    expect($post->user_id)->toBe($author->id);
    expect($post->published_at->toDateTimeString())->toBe('2026-01-10 01:00:00');

    expect(Category::where('slug', 'berita')->exists())->toBeTrue();
    expect($post->category->name)->toBe('Berita');

    expect(Tag::where('slug', 'komunitas')->exists())->toBeTrue();
    expect($post->tags->pluck('name')->all())->toBe(['Komunitas']);
});

test('it can import drafts when only_published is disabled', function () {
    $author = User::factory()->create();

    $result = app(WordPressXmlImportService::class)->import(wordPressXmlFixture(), $author, onlyPublished: false);

    expect($result)->toBe(['imported' => 2, 'skipped' => 1]);
    expect(Post::where('slug', 'draf-yang-belum-terbit')->first()->status)->toBe('draft');
});

test('it skips posts whose slug already exists', function () {
    $author = User::factory()->create();
    Post::factory()->create(['slug' => 'kabar-baik-dari-barizaloka']);

    $result = app(WordPressXmlImportService::class)->import(wordPressXmlFixture(), $author);

    expect($result)->toBe(['imported' => 0, 'skipped' => 3]);
    expect(Post::count())->toBe(1);
});
