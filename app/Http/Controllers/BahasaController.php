<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bahasa;

class BahasaController extends Controller
{
    public function index(){       

        $bahasa = Bahasa::all();

        return view ('bahasa.index', compact('bahasa'));
    }

    public function create()
    {
          return view('bahasa.create');
    }

   
    public function store(Request $request)
    {
        $bahasa = Bahasa::create([
            
            'bahasa_program' => $request->get('bahasa_program'),
            'slug' => $request->get('slug'),
               
                
            ]);      
        return redirect()->route('bahasa.index');
    }
}
