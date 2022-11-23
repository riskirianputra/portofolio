<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengalamankerja;


class PengalamankerjaController extends Controller
{
    public function index(){       

        $pengalaman = Pengalamankerja::all();

        return view ('pengalaman-kerja.index', compact('pengalaman'));
    }

    public function create()
    {
          return view('pengalaman-kerja.create');
    }

   
    public function store(Request $request)
    {
        $pengalaman = Pengalamankerja::create([
            
            'nama_perusahaan' => $request->get('nama_perusahaan'),
            'kota' => $request->get('kota'),
            'jabatan' => $request->get('jabatan'),
            'tanggal_mulai' => $request->get('tanggal_mulai'),            
            'tanggal_berakhir' => $request->get('tanggal_berakhir'),  
                               
            ]);      
        return redirect()->route('pengalaman-kerja.index');
    }
}
