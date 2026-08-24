<?php

test('pwa web manifest and static files exist and are valid', function () {
    $manifestPath = public_path('site.webmanifest');
    expect(file_exists($manifestPath))->toBeTrue();

    $content = json_decode(file_get_contents($manifestPath), true);
    expect($content)->toBeArray()
        ->and($content['short_name'])->toBe('Barizaloka')
        ->and($content['display'])->toBe('standalone')
        ->and($content['start_url'])->toBe('/')
        ->and(count($content['icons']))->toBeGreaterThanOrEqual(4);

    $jsonManifestPath = public_path('manifest.json');
    expect(file_exists($jsonManifestPath))->toBeTrue();

    $swPath = public_path('sw.js');
    expect(file_exists($swPath))->toBeTrue();
    $swContent = file_get_contents($swPath);
    expect($swContent)
        ->toContain('self.skipWaiting()')
        ->toContain('clients.claim()')
        ->toContain('SW_UPDATED');
});

test('pwa icons exist in public directory', function () {
    expect(file_exists(public_path('icon-192.png')))->toBeTrue()
        ->and(file_exists(public_path('icon-512.png')))->toBeTrue()
        ->and(file_exists(public_path('icon-maskable-192.png')))->toBeTrue()
        ->and(file_exists(public_path('icon-maskable-512.png')))->toBeTrue();
});

test('home page includes pwa manifest link and meta tags', function () {
    $response = $this->get('/');

    $response->assertSuccessful();
    $response->assertSee('rel="manifest"', false);
    $response->assertSee('href="/site.webmanifest"', false);
    $response->assertSee('name="theme-color"', false);
    $response->assertSee('name="apple-mobile-web-app-capable"', false);
});
