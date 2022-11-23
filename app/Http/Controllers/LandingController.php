<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pendidikan;
use App\Models\Bahasa;
use App\Models\Aplikasi;
use App\Models\Informasipribadi;
use App\Models\Pengalamankerja;

class LandingController extends Controller
{
    public function index()
    {
        
        $bahasa = Bahasa::all();        
        $project = Project::latest()->get()->random(2);
        $pendidikan = Pendidikan::all();
        $informasi = Informasipribadi::all();
        $pengalaman = Pengalamankerja::all();

        return view('visitor-page.landing-page', compact('bahasa', 'project','pendidikan','informasi','pengalaman'));
        
    }
}
