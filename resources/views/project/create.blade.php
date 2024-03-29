
@extends('layouts.user_type.auth')
@section('content')


    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('Input Project') }}</h6>
            </div>
            <div class="card-body pt-4 p-3">
                <form action="{{ route ('project.store') }}" method="POST" role="form text-left">
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
                            <label for="nama_project" class="form-label">Keterangan</label>                        
                                <div class="@error('keterangan')border border-danger rounded-3 @enderror">
                                    <input value="{{ old('keterangan') }}" type="text" class="form-control" keterangan="keterangan" placeholder="keterangan" id="keterangan" required>                                    
                                        @error('nama_project')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                            <label for="bahasa" class="form-label">Bahasa</label>                        
                                <div class="@error('bahasa')border border-danger rounded-3 @enderror">
                                    <input value="{{ old('bahasa') }}" type="text" class="form-control" placeholder="Bahasa Pemograman" id="bahasa" required>                                    
                                        @error('bahasa')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                            <label for="bahasa" class="form-label">Aplikasi</label>                        
                                <div class="@error('nama_aplikasi')border border-danger rounded-3 @enderror">
                                    <input value="{{ old('nama_aplikasi') }}" type="text" class="form-control" placeholder="nama_aplikasi" id="nama_aplikasi" required>                                    
                                        @error('aplikasi')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="gambar_project" class="form-control-label">{{ __('gambar_project') }}</label>
                                <div class="@error('gambar_project')border border-danger rounded-3 @enderror">
                                    <input value="{{ old('gambar_project') }}" type="text" class="form-control" name="gambar_project" placeholder="gambar_project" required>                                   
                                        @error('gambar_project')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>                                       
                </form>

            </div>
        </div>
    </div>
@endsection


                            
                            

                        