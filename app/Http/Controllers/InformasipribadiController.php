<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasipribadi;

class InformasipribadiController extends Controller
{
    public function index(){       

        $informasipribadi = Informasipribadi::all();

        return view ('informasi-pribadi.index', compact('informasipribadi'));
    }

    public function create()
    {
          return view('informasi-pribadi.create');
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
            'photo' => 'mimes:jpeg,png,jpg,doc,docx,ppt,xls,xlsx,pdf',
        ]);

           if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $name = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $newName = $name;
            $path =  $file->move(public_path('assets/img/informasi'),$newName);          
        }       

        Informasipribadi::create([
            
            'profesi' => $request->get('profesi'),
            'nama_depan' => $request->get('nama_depan'),
            'nama_belakang' => $request->get('nama_belakang'),
            'email' => $request->get('email'),
            'no_hp' => $request->get('no_hp'),
            'alamat' => $request->get('alamat'),
            'photo' => $name,
                                                       
            ]);      
        return redirect()->route('informasi-pribadi.index');
    }
}
