<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class LocationPageController extends Controller
{
    public function show(string $location): View
    {
        $page = config("location_pages.{$location}");

        if (! $page) {
            throw new NotFoundHttpException;
        }

        $page['slug'] = $location;

        $nearbyLocations = collect($page['nearby'])
            ->map(fn (string $slug) => array_merge(['slug' => $slug], config("location_pages.{$slug}")))
            ->all();

        $niches = collect(config('niche_pages'))
            ->map(fn (array $niche, string $slug) => array_merge(['slug' => $slug], $niche))
            ->values()
            ->all();

        return view('jasa-website.lokasi', compact('page', 'nearbyLocations', 'niches'));
    }
}
