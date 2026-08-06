<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use SimpleXMLElement;

class WordPressXmlImportService
{
    private const WP_NAMESPACE = 'http://wordpress.org/export/1.2/';

    private const CONTENT_NAMESPACE = 'http://purl.org/rss/1.0/modules/content/';

    private const EXCERPT_NAMESPACE = 'http://wordpress.org/export/1.2/excerpt/';

    private int $imported = 0;

    private int $skipped = 0;

    /**
     * Import posts from a WordPress WXR export XML string.
     *
     * @return array{imported: int, skipped: int}
     */
    public function import(string $xmlContents, User $author, bool $onlyPublished = true): array
    {
        $this->imported = 0;
        $this->skipped = 0;

        $xml = new SimpleXMLElement($xmlContents, LIBXML_NOCDATA);

        foreach ($xml->channel->item as $item) {
            $this->importItem($item, $author, $onlyPublished);
        }

        return [
            'imported' => $this->imported,
            'skipped' => $this->skipped,
        ];
    }

    private function importItem(SimpleXMLElement $item, User $author, bool $onlyPublished): void
    {
        $wp = $item->children(self::WP_NAMESPACE);

        if ((string) $wp->post_type !== 'post') {
            $this->skipped++;

            return;
        }

        $status = (string) $wp->status;

        if ($onlyPublished && $status !== 'publish') {
            $this->skipped++;

            return;
        }

        $slug = (string) $wp->post_name ?: Str::slug((string) $item->title);

        if (Post::where('slug', $slug)->exists()) {
            $this->skipped++;

            return;
        }

        $content = $item->children(self::CONTENT_NAMESPACE);
        $excerpt = $item->children(self::EXCERPT_NAMESPACE);

        $post = new Post([
            'user_id' => $author->id,
            'category_id' => $this->resolveCategory($item)?->id,
            'title' => (string) $item->title,
            'slug' => $slug,
            'excerpt' => (string) $excerpt->encoded ?: null,
            'content' => (string) $content->encoded,
            'status' => $this->mapStatus($status),
            'published_at' => $this->resolvePublishedAt($wp),
        ]);

        $post->save();

        $tags = $this->resolveTags($item);

        if ($tags->isNotEmpty()) {
            $post->tags()->sync($tags->pluck('id'));
        }

        $this->imported++;
    }

    private function mapStatus(string $wordpressStatus): string
    {
        return match ($wordpressStatus) {
            'publish' => 'published',
            'future' => 'scheduled',
            default => 'draft',
        };
    }

    private function resolvePublishedAt(SimpleXMLElement $wp): ?Carbon
    {
        $date = (string) $wp->post_date_gmt;

        if ($date === '' || $date === '0000-00-00 00:00:00') {
            $date = (string) $wp->post_date;
        }

        if ($date === '' || $date === '0000-00-00 00:00:00') {
            return null;
        }

        return Carbon::parse($date);
    }

    private function resolveCategory(SimpleXMLElement $item): ?Category
    {
        foreach ($item->category as $categoryNode) {
            if ((string) $categoryNode['domain'] !== 'category') {
                continue;
            }

            $name = (string) $categoryNode;
            $slug = (string) $categoryNode['nicename'] ?: Str::slug($name);

            return Category::firstOrCreate(
                ['slug' => $slug],
                ['name' => $name],
            );
        }

        return null;
    }

    /** @return Collection<int, Tag> */
    private function resolveTags(SimpleXMLElement $item): Collection
    {
        $tags = collect();

        foreach ($item->category as $categoryNode) {
            if ((string) $categoryNode['domain'] !== 'post_tag') {
                continue;
            }

            $name = (string) $categoryNode;
            $slug = (string) $categoryNode['nicename'] ?: Str::slug($name);

            $tags->push(Tag::firstOrCreate(
                ['slug' => $slug],
                ['name' => $name],
            ));
        }

        return $tags;
    }
}
