@extends('layouts.user_type.auth')

@section('content')

<div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('Create Pendidikan') }}</h6>
            </div>
            <div class="card-body pt-4 p-3">
                <form action="{{ route('pendidikan.store') }}" method="POST" role="form text-left">
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
                            <label for="nama_sekolah" class="form-label">Nama Sekolah</label>                        
                                <div class="@error('nama_sekolah')border border-danger rounded-3 @enderror">                                    
                                    <input value="{{ old('nama_sekolah') }}" type="text" class="form-control" name="nama_sekolah" placeholder="nama_sekolah" id="nama_sekolah" required>                                    
                                        @error('nama_sekolah')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>      

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                            <label for="kota" class="form-label">kota</label>                        
                                <div class="@error('kota')border border-danger rounded-3 @enderror">                                    
                                    <input value="{{ old('kota') }}" type="text" class="form-control" name="kota" placeholder="kota" id="kota" required>                                    
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
                            <label for="jurusan" class="form-label">jurusan</label>                        
                                <div class="@error('jurusan')border border-danger rounded-3 @enderror">                                    
                                    <input value="{{ old('jurusan') }}" type="text" class="form-control" name="jurusan" placeholder="jurusan" id="jurusan" required>                                    
                                        @error('jurusan')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>      

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                            <label for="tanggal_lulus" class="form-label">tanggal_lulus</label>                        
                                <div class="@error('tanggal_lulus')border border-danger rounded-3 @enderror">                                    
                                    <input value="{{ old('tanggal_lulus') }}" type="text" class="form-control" name="tanggal_lulus" placeholder="tanggal_lulus" id="tanggal_lulus" required>                                    
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





                            
                            

                        