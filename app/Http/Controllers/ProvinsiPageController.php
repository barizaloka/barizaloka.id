<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProvinsiPageController extends Controller
{
    public function index(): View
    {
        $provinces = collect(config('provinsi_pages'))
            ->map(fn (array $province, string $slug) => array_merge(['slug' => $slug], $province))
            ->sortBy('name')
            ->values()
            ->all();

        return view('jasa-website.provinsi-index', compact('provinces'));
    }

    public function show(string $provinsi): View
    {
        $page = config("provinsi_pages.{$provinsi}");

        if (! $page) {
            throw new NotFoundHttpException;
        }

        $page['slug'] = $provinsi;

        $relatedProvinces = collect($page['related'])
            ->map(fn (string $slug) => array_merge(['slug' => $slug], config("provinsi_pages.{$slug}")))
            ->all();

        return view('jasa-website.provinsi', compact('page', 'relatedProvinces'));
    }
}
