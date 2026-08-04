<?php

namespace App\Http\Controllers;

use App\Models\PackageJasaWebsite;
use Illuminate\View\View;

class JasaWebsiteController extends Controller
{
    public function index(): View
    {
        $packages = PackageJasaWebsite::ordered()->get();

        return view('jasa-website.index', compact('packages'));
    }
}
