<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keahlian;

class KeahlianController extends Controller
{
    public function index(){       

        $keahlian = Keahlian::all();

        return view ('keahlian.index', compact('keahlian'));
    }

    public function create()
    {
          return view('keahlian.create');
    }

   
    public function store(Request $request)
    {
        $keahlian = Keahlian::create([
            
            'keterampilan' => $request->get('keterampilan'),
            'level' => $request->get('level'),
           
            ]);      
        return redirect()->route('keahlian.index');
    }
}
