<?php

namespace App\Http\Controllers;
use App\Models\About;
use Illuminate\Http\Request;

class AboutpageController extends Controller
{
  
    public function index()
    {
        $about = about::all();
        return view('visitor-page.about-page',  get_defined_vars());
    }

    
}

