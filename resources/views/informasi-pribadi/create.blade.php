@extends('layouts.user_type.auth')

@section('content')

<div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('Create informasipribadi') }}</h6>
            </div>
            <div class="card-body pt-4 p-3">
                <form action="{{ route('informasipribadi.store') }}" method="POST" role="form text-left">
                    @csrf
                    @if($errors->any())
                        <div class="mt-3  alert alert-primary alert-dismissible fade show" role="alert">
                            <span class="alert-text text-white">
                            {{$errors->first()}}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <i class="fa fa-close" aria-hidden="true"></i>
                            </button>
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="m-3  alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
                            <span class="alert-text text-white">
                            {{ session('success') }}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <i class="fa fa-close" aria-hidden="true"></i>
                            </button>
                        </div>
                    @endif
                    @csrf
                    
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

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                            <label for="photo" class="form-label">Photo</label>                        
                                <div class="@error('photo')border border-danger rounded-3 @enderror">                                    
                                    <input value="{{ old('photo') }}" type="text" class="form-control" name="photo" placeholder="photo" id="photo" required>                                    
                                        @error('slug')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>      
                    
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Save Changes' }}</button>
                    </div>                                                 
                </form>
               
            </div>
        </div>
    </div>

@endsection





                            
                            

                        