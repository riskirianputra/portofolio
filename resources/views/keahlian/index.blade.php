@extends('layouts.user_type.auth')
@section('content')


                       
<div>
    <div class="alert alert-secondary mx-4" role="alert">
        <span class="text-white">
            <strong>Add, Edit, Delete Keahlian!</strong>             
        </span>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">ALL Keahlian</h5>
                        </div>
                        <a href="{{ route('keahlian.create') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New Keahlian</a>
                       
                    
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>                                
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Keterampilan</th>      
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Level</th>                                                                                                    
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="10%" colspan="3">Action</th>   
                                </tr>                                                                    
                            </thead>
                            <tbody>
                                @foreach($keahlian->all() as $porto)
                                <tr>
                                    <td>{{ $porto->id }}</td>
                                    <td>{{ $porto->keterampilan }}</td>   
                                    <td>{{ $porto->level }}</td>                                                                                                                                                                              
                                    <td><a href="{{ route('keahlian.show', $porto->id) }}" ><i class="fas fa-eye text-secondary"></a></td>
                                    <td><a href="{{ route('keahlian.edit', $porto->id) }}" ><i class="fas fa-user-edit text-secondary"></i></a></td>
                                    <td><a href="{{ route('keahlian.destroy', $porto->id) }}" ><i class="cursor-pointer fas fa-trash text-secondary"></i></a></td>
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


                            
                            
 