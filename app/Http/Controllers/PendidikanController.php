<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendidikan;

class PendidikanController extends Controller
{
    public function index(){       

        $pendidikan = Pendidikan::all();

        return view ('pendidikan.index', compact('pendidikan'));
    }

    public function create()
    {
          return view('pendidikan.create');
    }

   
    public function store(Request $request)
    {
        $pendidikan = Pendidikan::create([
            
            'nama_sekolah' => $request->get('nama_sekolah'),
            'kota' => $request->get('kota'),
            'jurusan' => $request->get('jurusan'),
            'tanggal_lulus' => $request->get('tanggal_lulus'),            
                               
            ]);      
        return redirect()->route('pendidikan.index');
    }
}
