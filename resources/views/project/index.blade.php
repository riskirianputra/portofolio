
@extends('layouts.user_type.auth')
@section('content')

<div class="row">  
    <div class="col-xl-12 col-lg-12 col-md-12 grid-margin stretch-card">    
      <div class="card-body">                  
        <div class="modal fade bd-example-modal-lg" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document" class="col-lg-12">
            <form method="post" action="{{ route('project.store') }}" enctype="multipart/form-data">
              <div class="modal-content" style="background: #fff;">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">UPLOAD GAMBAR</h5>
                </div>
                <div class="modal-body">
                {{ csrf_field() }}                                                            
                        <div class="form-row">                                                                                             
                            <div class="form-group col-md-12 {{ $errors->has('img') ? ' has-error' : '' }}">                                                    
                                <input id="img" type="file" class="form-control" name="img" value="" placeholder="PILIH GAMBAR">
                                @if ($errors->has('img'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('img') }}</strong>
                                    </span>
                                @endif
                            </div>      
                        </div> 
                        <div class="form-row">                                                                                             
                            <div class="form-group col-md-12 {{ $errors->has('img2') ? ' has-error' : '' }}">                                                    
                                <input id="img2" type="file" class="form-control" name="img2" value="" placeholder="PILIH GAMBAR">
                                @if ($errors->has('img2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('img2') }}</strong>
                                    </span>
                                @endif
                            </div>      
                        </div> 
                        <div class="form-row">                                                                                             
                            <div class="form-group col-md-12 {{ $errors->has('img3') ? ' has-error' : '' }}">                                                    
                                <input id="img3" type="file" class="form-control" name="img3" value="" placeholder="PILIH GAMBAR">
                                @if ($errors->has('img3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('img3') }}</strong>
                                    </span>
                                @endif
                            </div>      
                        </div> 
                        <div class="form-row">                                                                                             
                            <div class="form-group col-md-12 {{ $errors->has('img4') ? ' has-error' : '' }}">                                                    
                                <input id="img4" type="file" class="form-control" name="img4" value="" placeholder="PILIH GAMBAR">
                                @if ($errors->has('img4'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('img4') }}</strong>
                                    </span>
                                @endif
                            </div>      
                        </div> 
                        <div class="form-row">                                                                                             
                            <div class="form-group col-md-12 {{ $errors->has('img5') ? ' has-error' : '' }}">                                                    
                                <input id="img5" type="file" class="form-control" name="img5" value="" placeholder="PILIH GAMBAR">
                                @if ($errors->has('img5'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('img5') }}</strong>
                                    </span>
                                @endif
                            </div>      
                        </div> 

                        <div class="form-row">
                            <div class="form-group col-md-12 {{ $errors->has('nama_aplikasi') ? ' has-error' : '' }}">  
                                <select class="form-control" name="id_aplikasi">
                                    <option value="">PILIH NAMA APLIKASI</option>
                                    @foreach($aplikasi as $apk)
                                        <option value="{{$apk->id}}">{{$apk->nama_aplikasi}}</option>
                                    @endforeach  
                                </select>
                            </div>                                      
                        </div>   

                        <div class="form-row">
                            <div class="form-group col-md-12 {{ $errors->has('bahasa_program') ? ' has-error' : '' }}">  
                                <select class="form-control" name="id_bahasa">
                                    <option value="">PILIH BAHASA PROGRAM</option>
                                    @foreach($bahasa as $porto)
                                        <option value="{{$porto->id}}">{{$porto->bahasa_program}}</option>
                                    @endforeach  
                                </select>
                            </div>                                      
                        </div>                                     
                    
                        <div class="form-row">
                            <div class="form-group col-md-12 {{ $errors->has('keterangan') ? ' has-error' : '' }}">  
                                <input id="keterangan" type="text" class="form-control" name="keterangan" value="" placeholder="Nama Project">
                                @if ($errors->has('keterangan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('keterangan') }}</strong>
                                    </span>
                                @endif
                            </div>                                      
                        </div> 

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Close </button>
                  <button type="submit" class="btn btn-info"> UPLOAD </button>
                </div>
              </div>
            </form>
          </div>
        </div>                                               
      </div>
    </div>
</div>
                       
<div>
    <div class="alert alert-secondary mx-4" role="alert">
        <span class="text-white">
            <strong>Add, Edit, Delete Project!</strong>             
        </span>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">ALL PROJECTS</h5>
                        </div>
                        
                        <button type="button" class="btn btn-light mr-5" data-bs-toggle="modal" data-bs-target="#importExcel"><i class="fa fa-upload"> UPLOAD</i>
                      </button>     
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>                                
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Project</th>                                  
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Bahasa</th>    
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aplikasi</th> 
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gambar</th>                                                                     
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="10%" colspan="3">Action</th>   
                                </tr>                                                                    
                            </thead>
                            <tbody>
                                @foreach($project as $projects)
                                <tr>
                                    <td>{{ $projects->id }}</td>          
                                    <td>{{ $projects->keterangan}}</td>                        
                                    <td>{{ $projects->bahasa->bahasa_program }}</td>   
                                    <td>{{ $projects->aplikasi->nama_aplikasi }}</td>                                                                
                                    <td><img src="{{asset('assets/img/project/'.$projects  ->img)}}" alt="" style="width: 150px"></td>                                                                                                                                                               
                                    <td><a href="{{ route('user.show', $projects->id) }}" ><i class="fas fa-eye text-secondary"></a></td>
                                    <td><a href="{{ route('user.edit', $projects->id) }}" ><i class="fas fa-user-edit text-secondary"></i></a></td>
                                    <td><a href="{{ route('user.destroy', $projects->id) }}" ><i class="cursor-pointer fas fa-trash text-secondary"></i></a></td>
                                @endforeach                                                                                                    
                                </tr>                                                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->

@endsection


                            
                            
 