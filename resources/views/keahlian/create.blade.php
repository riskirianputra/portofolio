@extends('layouts.user_type.auth')

@section('content')

<div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('Create Keahlian') }}</h6>
            </div>
            <div class="card-body pt-4 p-3">
                <form action="{{ route('keahlian.store') }}" method="POST" role="form text-left">
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
                            <label for="keterampilan" class="form-label">Keterampilan</label>                        
                                <div class="@error('keterampilan')border border-danger rounded-3 @enderror">                                    
                                    <input value="{{ old('keterampilan') }}" type="text" class="form-control" name="keterampilan" placeholder="keterampilan" id="keterampilan" required>                                    
                                        @error('keterampilan')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>      

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                            <label for="level" class="form-label">level</label>                        
                                <div class="@error('level')border border-danger rounded-3 @enderror">                                    
                                    <input value="{{ old('level') }}" type="text" class="form-control" name="level" placeholder="level" id="level" required>                                    
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





                            
                            

                        