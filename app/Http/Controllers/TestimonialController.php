<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\View\View;

class TestimonialController extends Controller
{
    public function index(): View
    {
        $testimonials = Testimonial::ordered()->get();

        $averageRating = $testimonials->isNotEmpty()
            ? round($testimonials->avg('rating'), 1)
            : null;

        return view('testimoni.index', compact('testimonials', 'averageRating'));
    }
}
