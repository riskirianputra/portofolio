<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Bahasa;
use App\Models\Aplikasi;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use DB;

class ProjectController extends Controller
{
    public function index()
    {
        $project = Project::all();
        $bahasa = Bahasa::get();
        $aplikasi = Aplikasi::get();

        $datas = Project::with(['bahasa'])->get();

        return view('project.index', compact('project','bahasa','datas','aplikasi'));
    }

    public function create()
    {
        $project = Project::get();

        $bahasa = Bahasa::get();

        $aplikasi = Aplikasi::get();

        return view('project.create', compact('bahasa','aplikasi'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'img' => 'mimes:jpeg,png,jpg,doc,docx,ppt,xls,xlsx,pdf',
        ]);

           if ($request->hasFile('img')) {
            $file = $request->file('img');
            $name = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $newName = $name;
            $path =  $file->move(public_path('assets/img/project'),$newName);          
        }        

        $this->validate($request, [
            'img2' => 'mimes:jpeg,png,jpg,doc,docx,ppt,xls,xlsx,pdf',
        ]);

           if ($request->hasFile('img2')) {
            $file = $request->file('img2');
            $name2 = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $newName = $name2;
            $path =  $file->move(public_path('assets/img/project'),$newName);          
        }        

        $this->validate($request, [
            'img3' => 'mimes:jpeg,png,jpg,doc,docx,ppt,xls,xlsx,pdf',
        ]);

           if ($request->hasFile('img3')) {
            $file = $request->file('img3');
            $name3 = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $newName = $name3;
            $path =  $file->move(public_path('assets/img/project'),$newName);          
        }        

        $this->validate($request, [
            'img4' => 'mimes:jpeg,png,jpg,doc,docx,ppt,xls,xlsx,pdf',
        ]);

           if ($request->hasFile('img4')) {
            $file = $request->file('img4');
            $name4 = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $newName = $name4;
            $path =  $file->move(public_path('assets/img/project'),$newName);          
        }        

        $this->validate($request, [
            'img5' => 'mimes:jpeg,png,jpg,doc,docx,ppt,xls,xlsx,pdf',
        ]);

           if ($request->hasFile('img5')) {
            $file = $request->file('img5');
            $name5 = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $newName = $name5;
            $path =  $file->move(public_path('assets/img/project'),$newName);          
        }        

            Project::create([
                'id_bahasa' => $request->get('id_bahasa'),
                'id_aplikasi' => $request->get('id_aplikasi'),
                'keterangan' => $request->get('keterangan'),
                'img' => $name, 
                'img2' => $name2,                              
                'img3' => $name3,
                'img4' => $name4,
                'img5' => $name5,
                
            ]);      

        return redirect()->route('project.index');
    }


}
