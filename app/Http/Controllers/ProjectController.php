<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\View\View;

class ProjectController extends Controller
{
    public function index(): View
    {
        $projects = Project::ordered()->get();

        return view('portofolio.index', compact('projects'));
    }

    public function show(Project $project): View
    {
        return view('portofolio.show', compact('project'));
    }
}
