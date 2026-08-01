<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\View\View;

class ProjectController extends Controller
{
    public function index(): View
    {
        $projects = Project::with('service')->ordered()->get();

        return view('portofolio.index', compact('projects'));
    }

    public function show(Project $project): View
    {
        $project->load('service');

        return view('portofolio.show', compact('project'));
    }
}
