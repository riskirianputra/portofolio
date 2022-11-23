@inject('project', 'App\models\Project')
@inject('bahasa', 'App\models\Bahasa')
@inject('pendidikan', 'App\models\Pendidikan')
@inject('informasi', 'App\models\Informasipribadi')
@inject('keahlian', 'App\models\Keahlian')
@inject('pengalaman', 'App\models\Pengalamankerja')

@extends('visitor-layout.main')

@section('content')
<br>
<br>
<br>
    @foreach ($informasi->all() as $all)
    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/istockphoto.jpeg'); background-position-y: 50%;">          
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="{{ asset('assets/img/informasi/'.$all->photo) }}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">                        
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                          {{$all->nama_depan}} {{$all->nama_belakang}}
                        </h5>
                        <p class="mb-0 text-sm">
                        {{$all->profesi}}
                        </p>
                    </div>
                </div>                
            </div>
        </div>
    </div>

    @endforeach
   
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">PENDIDIKAN</h6>
                    </div>
                    <div class="card-body p-3">                        
                        <ul class="list-group">
                            <li class="list-group-item border-0 px-0">
                                <div class="form-check form-switch ps-0">
                                    <table class="table table-info table-striped-columns">
                                        <thead class="text-center">
                                            <tr class="table-light">                                                                         
                                                <th>NAMA SEKOLAH</th>     
                                                <th>KOTA</th>                                                                                                          
                                                <th>JURUSAN</th>     
                                                <th>TANGGAL LULUS</th>     
                                            
                                            </tr>                                                                    
                                        </thead>
                                        <tbody class="text-center">
                                            @foreach($pendidikan->all() as $porto)
                                            <tr>                                         
                                                <td>{{ $porto->nama_sekolah }}</td>     
                                                <td>{{ $porto->kota }}</td>                                                                                                                                                                             
                                                <td>{{ $porto->jurusan }}</td> 
                                                <td>{{ $porto->tanggal_lulus }}</td>                                           
                                            @endforeach                                                                                                    
                                            </tr>                                                              
                                        </tbody>
                                    </table>
                                 
                                </div>
                            </li>              
                        </ul>
                    </div>
                </div>
            </div>
                      
            <div class="col-12 col-xl-6">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-0">KEAHLIAN</h6>
                            </div>
                            <div class="col-md-4 text-end">
                                <a href="javascript:;">                 
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">                       
                        <ul class="list-group">
                            <li class="list-group-item border-0 px-0">
                                <div class="form-check form-switch ps-0">
                                    <table class="table table-danger table-striped-columns">
                                        <thead class="text-center">
                                            <tr class="table-light">                                                                    
                                                <th>KETERAMPILAN</th>      
                                                <th>LEVEL</th>                                                                                                                                      
                                            </tr>                                                                    
                                        </thead>
                                        <tbody class="text-center">
                                            @foreach($keahlian->all() as $porto)
                                            <tr>                                    
                                                <td>{{ $porto->keterampilan }}</td>   
                                                <td> 
                                                    <div class="container">
                                                        <div class="skills css">{{ $porto->level }}</div>
                                                    </div> 
                                                </td>                                                                                                                                                                                                                                                              
                                            @endforeach                                                                                                    
                                            </tr>                                                              
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
           
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-0">Pengalaman Kerja</h6>
                            </div>
                            <div class="col-md-4 text-end">
                                <a href="javascript:;">                   
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">                       
                        <ul class="list-group">
                            <li class="list-group-item border-0 px-0">
                                <div class="form-check form-switch ps-0">
                                @foreach ( $pengalaman->all() as $all )
                                    <p><b> {{ $all->jabatan }} at {{ $all->nama_perusahaan }}, {{ $all->kota }} </b> <br> {{ $all->tanggal_mulai}} - {{ $all->tanggal_berakhir}}</p>
                                    @endforeach
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
         
            <div class="col-12 col-xl-6">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-0">Project</h6>
                            </div>                           
                        </div>
                    </div>
                    <div class="card-body p-2">    
                        <div class="col-xl-12 col-md-6 mb-xl-0 mb-6">                   
                            <ul class="list-group">
                                    <table class="table table-borderless">
                                        <thead class="text-center">
                                            <tr >                                                                    
                                                <th> PPKIJK </th>      
                                                <th> KEPSEK </th>    
                                                <th> KULINER </th>     
                                                <th> SPP </th>                                                                                                                             
                                            </tr>                                                                    
                                        </thead>
                                        <tbody class="text-center">                                       
                                            <tr>                                    
                                                <td> <img src="../assets/img/screnshot/PPKIJK/Home.PNG" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl" > </td>   
                                                <td> <img src="../assets/img/screnshot/Kepsek/2. Halaman Dashboard.PNG" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" > </td>  
                                                <td> <img src="../assets/img/screnshot/kuliner/Home.png" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl"> </td>                                                                                                                                                                                                                                                            
                                                <td> <img src="../assets/img/screnshot/SPP/1.halaman login.png" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl"> </td>                                                                                          
                                            </tr>                                                              
                                        </tbody>
                                    </table>                                                                                                                                  
                            </ul>                         
                        </div>                       
                    </div>
                </div>
            </div>            
        </div>    

@endsection
<style>
    .tp-bullet {
        width: 15px;
        height: 15px;
        position: absolute;
        background: rgba(255,255,255,.3);
        cursor: pointer;
    }

    .image_frame, .wp-caption {
        display: block;
        margin: 0;
        border-width: 20px;
        border-style: solid;
        max-width: 100%;
        line-height: 0;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        text-align: center;
        color: white;
    }

    .image_frame .image_wrapper, .wp-caption img {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    .photo .post-desc-wrapper {
        width: 100%;
        float: none;
        text-align: center;
    }

    .bahasa {
    font-family: "Lucida Console";
    color: #DAA520;
    font-size:25px;
    }

    * {box-sizing: border-box}

.container {
  width: 100%;

}

.skills {
  text-align: right;
  padding-top: 10px;
  padding-bottom: 10px;
  color: white;
}

.html {width: 90%; background-color: #A52A2A;}
.css {width: 80%; background-color: #6495ED;}
.js {width: 65%; background-color: #FFD700;}
.php {width: 70%; background-color: #9400D3;}

</style>