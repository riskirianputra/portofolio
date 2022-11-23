@extends('layouts.user_type.auth')

@section('content')


<div>
    <div class="alert alert-secondary mx-4" role="alert">
        <span class="text-white">
            <strong>Add, Edit, Delete ABOUT!</strong>             
        </span>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All About</h5>
                        </div>
                        <a href="{{ route('about.create') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New Role</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" >id</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><b>Keterangan 1</b></th>                                  
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><b>Keterangan 3</b></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><b>Keterangan 4</b></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><b>Keterangan 5</b></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="10%" colspan="3">Action</th>
                                </tr>                                                                                                 
                            </thead>
                            <tbody>
                            @foreach ($about->all() as $abut)
                                <tr>
                                    <td>{{ $abut->id }}</td>
                                    <td>{{ $abut->nama }}</td>
                                    <td>{{ $abut->keterangan1 }}</td>
                                
                                    <td>{{ $abut->keterangan3 }}</td>
                                    <td>{{ $abut->keterangan4 }}</td>
                                    <td>{{ $abut->keterangan5 }}</td>
                                    <td><a href="{{ route('about.show', $abut->id) }}" ><i class="fas fa-eye text-secondary"></a></td>                                    
                                    <td><a href="{{ route('about.edit', $abut->id) }}" data-toggle="modal" data-target="#edit{{$abut->id}}" ><i class="fas fa-user-edit text-secondary"></i></a></td>
                                    <td><a href="{{ route('about.destroy', $abut->id) }}" ><i class="cursor-pointer fas fa-trash text-secondary"></i></a></td>
                                </tr>
                            @endforeach                                                    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

