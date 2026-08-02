<?php

namespace App\Http\Controllers;

use App\Models\PackageJasaWebsite;
use Illuminate\View\View;

class HargaController extends Controller
{
    public function index(): View
    {
        $packages = PackageJasaWebsite::ordered()->get();

        return view('harga', compact('packages'));
    }
}
