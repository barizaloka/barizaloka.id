<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class KalkulatorBiayaAdminMarketplaceController extends Controller
{
    public function index(): View
    {
        return view('kalkulator-biaya-admin-marketplace.index');
    }
}
