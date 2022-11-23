@extends('layouts.user_type.auth')
@section('content')


                       
<div>
    <div class="alert alert-secondary mx-4" role="alert">
        <span class="text-white">
            <strong>Add, Edit, Delete Pengalaman Kerja!</strong>             
        </span>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0"> ALL Pengalaman Kerja</h5>
                        </div>
                        <a href="{{ route('pengalamankerja.create') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New Pengalaman</a>                                           
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>                                
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Sekolah</th>     
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kota</th>                                                                                                          
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jurusan</th>     
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Mulai</th>     
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Berkahir</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="10%" colspan="3">Action</th>   
                                </tr>                                                                    
                            </thead>
                            <tbody>
                                @foreach($pengalaman->all() as $porto)
                                <tr>
                                    <td>{{ $porto->id }}</td>
                                    <td>{{ $porto->nama_perusahaan }}</td>     
                                    <td>{{ $porto->kota }}</td>                                                                                                                                                                             
                                    <td>{{ $porto->jabatan }}</td> 
                                    <td>{{ $porto->tanggal_mulai }}</td> 
                                    <td>{{ $porto->tanggal_berakhir }}</td> 

                                    <td><a href="{{ route('pendidikan.show', $porto->id) }}" ><i class="fas fa-eye text-secondary"></a></td>
                                    <td><a href="{{ route('pendidikan.edit', $porto->id) }}" ><i class="fas fa-user-edit text-secondary"></i></a></td>
                                    <td><a href="{{ route('pendidikan.destroy', $porto->id) }}" ><i class="cursor-pointer fas fa-trash text-secondary"></i></a></td>
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


                            
                            
 