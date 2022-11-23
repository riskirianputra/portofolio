@extends('layouts.user_type.auth')
@section('content')

<div class="row">  
    <div class="col-xl-12 col-lg-12 col-md-12 grid-margin stretch-card">    
      <div class="card-body">                  
        <div class="modal fade bd-example-modal-lg" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document" class="col-lg-12">
            <form method="post" action="{{ route('informasipribadi.store') }}" enctype="multipart/form-data">
              <div class="modal-content" style="background: #fff;">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Upload data diri</h5>
                </div>
                <div class="modal-body">
                {{ csrf_field() }}                                                            
                        <div class="form-row">                                                                                             
                            <div class="form-group col-md-12 {{ $errors->has('img') ? ' has-error' : '' }}">                                                    
                                <input id="photo" type="file" class="form-control" name="photo" value="" placeholder="PILIH GAMBAR">
                                @if ($errors->has('photo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
                                @endif
                            </div>      
                        </div> 
                       
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                <label for="profesi" class="form-label">Profesi</label>                        
                                    <div class="@error('profesi')border border-danger rounded-3 @enderror">                                    
                                        <input value="{{ old('profesi') }}" type="text" class="form-control" name="profesi" placeholder="profesi" id="profesi" required>                                    
                                            @error('profesi')
                                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                    </div>
                                </div>
                            </div>
                        </div>      

                        <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                            <label for="nama_depan" class="form-label">Nama Depan</label>                        
                                <div class="@error('nama_depan')border border-danger rounded-3 @enderror">                                    
                                    <input value="{{ old('nama_depan') }}" type="text" class="form-control" name="nama_depan" placeholder="nama_depan" id="nama_depan" required>                                    
                                        @error('slug')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>          

                    <div class="row">
                        <div class="col-md-8"> 
                            <div class="form-group">
                            <label for="nama_belakang" class="form-label">Nama Belakang</label>                        
                                <div class="@error('nama_belakang')border border-danger rounded-3 @enderror">                                    
                                    <input value="{{ old('nama_belakang') }}" type="text" class="form-control" name="nama_belakang" placeholder="nama_belakang" id="nama_belakang" required>                                    
                                        @error('slug')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>      

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                            <label for="email" class="form-label">Email</label>                        
                                <div class="@error('email')border border-danger rounded-3 @enderror">                                    
                                    <input value="{{ old('email') }}" type="text" class="form-control" name="email" placeholder="email" id="email" required>                                    
                                        @error('email')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>      

                    <div class="row">
                        <div class="col-md-8"> 
                            <div class="form-group">
                            <label for="alamat" class="form-label">Alamat</label>                        
                                <div class="@error('alamat')border border-danger rounded-3 @enderror">                                    
                                    <input value="{{ old('alamat') }}" type="text" class="form-control" name="alamat" placeholder="alamat" id="alamat" required>                                    
                                        @error('slug')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>      


                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                            <label for="no_hp" class="form-label">No Hp</label>                        
                                <div class="@error('no_hp')border border-danger rounded-3 @enderror">                                    
                                    <input value="{{ old('no_hp') }}" type="text" class="form-control" name="no_hp" placeholder="no_hp" id="no_hp" required>                                    
                                        @error('slug')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
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
            <strong>Add, Edit, Delete Informasi Pribadi!</strong>             
        </span>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">ALL Informasi Pribadi</h5>
                        </div>
                        <button type="button" class="btn btn-light mr-5" data-bs-toggle="modal" data-bs-target="#importExcel"><i class="fa fa-upload"> UPLOAD</i>
                                                              
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>                                
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Profesi</th>   
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Depan</th>     
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Belakang</th>                                                                                                        
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>       
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Photo</th>                                 
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="10%" colspan="3">Action</th>   
                                </tr>                                                                    
                            </thead>
                            <tbody>
                                @foreach($informasipribadi->all() as $porto)
                                <tr>
                                    <td>{{ $porto->id }}</td>
                                    <td>{{ $porto->profesi }}</td>     
                                    <td>{{ $porto->nama_depan }}</td>                                                                                                                                                                            
                                    <td>{{ $porto->nama_belakang }}</td>
                                    <td>{{ $porto->alamat }}</td>
                                    <td><img src="{{asset('assets/img/informasi/'.$porto  ->photo)}}" alt="" style="width: 150px"></td>
                                    <td><a href="{{ route('informasipribadi.show', $porto->id) }}" ><i class="fas fa-eye text-secondary"></a></td>
                                    <td><a href="{{ route('informasipribadi.edit', $porto->id) }}" ><i class="fas fa-user-edit text-secondary"></i></a></td>
                                    <td><a href="{{ route('informasipribadi.destroy', $porto->id) }}" ><i class="cursor-pointer fas fa-trash text-secondary"></i></a></td>
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


                            
                            
 