@extends('layouts.user_type.auth')

@section('content')

<div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('Create Pengalaman') }}</h6>
            </div>
            <div class="card-body pt-4 p-3">
                <form action="{{ route('pengalamankerja.store') }}" method="POST" role="form text-left">
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
                            <label for="nama_perusahaan" class="form-label">Nama Perusahaan</label>                        
                                <div class="@error('nama_perusahaan')border border-danger rounded-3 @enderror">                                    
                                    <input value="{{ old('nama_perusahaan') }}" type="text" class="form-control" name="nama_perusahaan" placeholder="nama_perusahaan" id="nama_perusahaan" required>                                    
                                        @error('nama_perusahaan')
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
                            <label for="jabatan" class="form-label">jabatan</label>                        
                                <div class="@error('jabatan')border border-danger rounded-3 @enderror">                                    
                                    <input value="{{ old('jabatan') }}" type="text" class="form-control" name="jabatan" placeholder="jabatan" id="jabatan" required>                                    
                                        @error('jabatan')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>      

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                            <label for="tanggal_mulai" class="form-label">tanggal mulai</label>                        
                                <div class="@error('tanggal_mulai')border border-danger rounded-3 @enderror">                                    
                                    <input value="{{ old('tanggal_mulai') }}" type="date" class="form-control" name="tanggal_mulai" placeholder="tanggal_mulai" id="tanggal_mulai" required>                                    
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
                            <label for="tanggal_berakhir" class="form-label">tanggal Berakhir</label>                        
                                <div class="@error('tanggal_berakhir')border border-danger rounded-3 @enderror">                                    
                                    <input value="{{ old('tanggal_berakhir') }}" type="date" class="form-control" name="tanggal_berakhir" placeholder="tanggal_berakhir" id="tanggal_berakhir" required>                                    
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





                            
                            

                        