<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class NicheLocationPageController extends Controller
{
    public function show(string $niche, string $location): View
    {
        $nichePage = config("niche_pages.{$niche}");
        $locationPage = config("location_pages.{$location}");

        if (! $nichePage || ! $locationPage) {
            throw new NotFoundHttpException;
        }

        $nichePage['slug'] = $niche;
        $locationPage['slug'] = $location;

        $otherNiches = collect(config('niche_pages'))
            ->reject(fn (array $item, string $slug) => $slug === $niche)
            ->map(fn (array $item, string $slug) => array_merge(['slug' => $slug], $item))
            ->values()
            ->all();

        $otherLocations = collect($locationPage['nearby'])
            ->map(fn (string $slug) => array_merge(['slug' => $slug], config("location_pages.{$slug}")))
            ->all();

        return view('jasa-website.niche-lokasi', [
            'niche' => $nichePage,
            'location' => $locationPage,
            'otherNiches' => $otherNiches,
            'otherLocations' => $otherLocations,
        ]);
    }
}
