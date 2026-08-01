<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(): View
    {
        $services = Service::ordered()->get();

        return view('layanan.index', compact('services'));
    }

    public function show(Service $service): View
    {
        $relatedServices = Service::ordered()
            ->where('id', '!=', $service->id)
            ->limit(3)
            ->get();

        return view('layanan.show', compact('service', 'relatedServices'));
    }
}
