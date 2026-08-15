<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View as ViewFacade;
use Illuminate\View\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class NichePageController extends Controller
{
    public function show(string $niche): View
    {
        $view = "jasa-website.niche.{$niche}";

        if (! ViewFacade::exists($view)) {
            throw new NotFoundHttpException;
        }

        return view($view);
    }
}
