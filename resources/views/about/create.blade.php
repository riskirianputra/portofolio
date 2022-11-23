@extends('layouts.user_type.auth')
@section('content')

<form action="{{ route('about.store') }}" method="post">
    {{ csrf_field() }}
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('Profile Information') }}</h6>
            </div>
            <div class="card-body pt-4 p-3">
                                           
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                            <label for="nama" class="form-label">Nama</label>                        
                                <div class="@error('nama')border border-danger rounded-3 @enderror">
                                    <input value="{{ old('nama') }}" type="text" class="form-control" name="nama" placeholder="nama" id="nama" required>                                    
                                        @error('nama')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="keterangan1" class="form-label">Keterangan 1</label>
                                <textarea class="form-control" id="keterangan1" rows="3" name="keterangan1"></textarea>
                                @if ($errors->has('keterangan1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('keterangan1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="keterangan2" class="form-label">Keterangan 2</label>
                                <textarea class="form-control" id="keterangan2" rows="3" name="keterangan2"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="keterangan3" class="form-label">Keterangan 3</label>
                                <textarea class="form-control" id="keterangan3" rows="3" name="keterangan3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="keterangan4" class="form-label">Keterangan 4</label>
                                <textarea class="form-control" id="keterangan4" rows="3" name="keterangan4"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="keterangan5" class="form-label">Keterangan 5</label>
                                <textarea class="form-control" id="keterangan5" rows="3" name="keterangan5"></textarea>
                            </div>
                        </div>
                    </div>
                
                                                                        
                    </div>
                    <div class="card-header bg-light">       
        
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Save Changes' }}</button>
                                                         
                    </div> 
                  </div>
                </div>
              </div>
            </div>

    </div>
</form>
@endsection