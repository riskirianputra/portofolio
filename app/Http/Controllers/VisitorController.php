<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Bahasa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisitorController extends Controller
{
    public function index()
    {
        
        $bahasa = Bahasa::all();        
        $project = Project::latest()->get()->random(2);
        $projectall = Project::latest()->get();
        $projectterkait = Project::latest()->limit(4)->get();

        return view('visitor-page.landing-page', compact('bahasa', 'project', 'projectall', 'projectterkait'));
        
    }

    public function project_bahasa(Bahasa $bahasa)
       {
        
        $projectall = $bahasa->project()->get();
        $bahasa = Bahasa::all();
        $project = Project::latest()->get()->random(2);        
        $projectterkait = Project::latest()->limit(4)->get();

        return view('visitor-page.landing-page', compact('bahasa', 'project', 'projectall', 'projectterkait'));
       }

    public function show(Project $project)
    {
        $project_detail = $project;
        $projectterkait = Project::latest()->get()->random(2);
        $bahasa = Bahasa::withCount('project')->get();

        return view('visitor-page.project-page', compact('project_detail', 'bahasa', 'projectterkait'));
    }
}

