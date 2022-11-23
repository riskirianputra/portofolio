<?php

namespace App\Http\Controllers;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $about = About::all();
        return view('about.index', compact('about'));
    }

    public function create(){
       
        return view('about.create');
        
    }
    
    public function store(Request $request){

        $about = About::create([
               
            'nama' => $request->get('nama'),
            'keterangan1' => $request->get('keterangan1'),  
            'keterangan2' => $request->get('keterangan2'),   
            'keterangan3' => $request->get('keterangan3'),
            'keterangan4' => $request->get('keterangan4'),
            'keterangan5' => $request->get('keterangan5'),
           
        ]);      
    return redirect()->route('about.index');
    }

    public function edit($id)
    {
         $about = About::findOrFail($id);
       
        return view('about.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        About::find($id)->update($request->all());
        
        return redirect()->to('about');
    }

}
