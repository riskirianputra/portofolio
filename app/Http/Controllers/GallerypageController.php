<?php
namespace App\Http\Controllers;
use File;
use Alert;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GallerypageController extends Controller
{
    public function index()
    {
        $gallery = Gallery::all();
        return view('visitor-page.gallery-page',  get_defined_vars());
    }

    
}