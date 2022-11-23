<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Bahasa;
use App\Models\Aplikasi;

class ProjectdetailController extends Controller
{
    public function index()
    {
        
        $bahasa = Bahasa::all();        
        $aplikasi = Aplikasi::all();  
        $project = Project::latest()->get()->random(2);
        $projectall = Project::latest()->get();
        $projectterkait = Project::latest()->limit(4)->get();

        $semuaproject = Project::all();

        return view('visitor-page.daftar-project', compact('bahasa', 'project', 'projectall', 'projectterkait', 'semuaproject','aplikasi'));
        
    }

}
