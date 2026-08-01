<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class NichePageController extends Controller
{
    public function show(string $niche): View
    {
        $page = config("niche_pages.{$niche}");

        if (! $page) {
            throw new NotFoundHttpException;
        }

        $page['slug'] = $niche;

        $relatedNiches = collect($page['related_niches'])
            ->map(fn (string $slug) => array_merge(['slug' => $slug], config("niche_pages.{$slug}")))
            ->all();

        return view('jasa-website.niche', compact('page', 'relatedNiches'));
    }
}
