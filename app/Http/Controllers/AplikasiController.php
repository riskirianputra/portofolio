<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aplikasi;

class AplikasiController extends Controller
{
    public function index(){       

        $aplikasi = Aplikasi::all();

        return view ('aplikasi.index', compact('aplikasi'));
    }

    public function create()
    {
          return view('aplikasi.create');
    }

   
    public function store(Request $request)
    {
        $aplikasi = Aplikasi::create([
            
            'nama_aplikasi' => $request->get('nama_aplikasi'),
            'slug' => $request->get('slug'),
               
                
            ]);      
        return redirect()->route('aplikasi.index');
    }
}
