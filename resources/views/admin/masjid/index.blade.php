@extends('layouts.backend')

@section('content')

<div class="row">
    
    <div class="btn">
        <a href="/masjid/tambah" type="button" class=" btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
     </div>
    <div class="col-lg-12 mb-4">
        <div class="card bg-primary text-white shadow">
            <div class="card-header bg-primary" > {{ $title }}
            
            </div> 
        </div>

        
        <div class="card-body">
            @if (session('pesan'))
                <div class="alert alert-success" role="alert">
                   {{session('pesan')}}
                </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead >
                            <tr >
                            <th width="30px" class="text-center">No</th>
                            <th class="text-center" width="50px">Nama Masjid</th>
                            <th width="50px" class="text-center">Kategory</th>
                            <th width="50px" class="text-center">Alamat</th>
                            <th width="100px" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        @foreach ($masjid as $data)
                        <tr>
                            <td class="text-center" >{{ $no++ }}</td>
                            <td >{{ $data ->nama_masjid}}</td>
                            <td >{{ $data ->kategori}}</td>
                            <td >{{ $data ->alamat}}</td>
                            <td class="text-center">
                              <a href="/masjid/detailmasjid/{{$data->id}}" class="btn btn-sm btn-flat btn-success"><i class="fas fa-eye"></i></a>
                              <a href="/masjid/edit/{{$data->id}}" class="btn btn-sm btn-flat btn-warning"><i class="fa fa-edit"></i></a>
                              <a  class="btn btn-sm btn-flat btn-danger" data-toggle="modal" data-target="#delete{{$data->id}}"><i class="fa fa-trash"></i></a> 
                          </td>


                          
                        </tr>
                            
                        @endforeach
                    </tbody>
                </table>
             </div>
        </div>
    </div>
</div>

@foreach ($masjid as $data)
    <div class="modal fade" id="delete{{$data->id}}">
        <div class="modal-dialog">
          <div class="modal-content bg-warning">
            <div class="modal-header">
              <h4 class="modal-title" style="color: red">{{$data->nama_masjid}}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" style="color: black">
              <p>Apakah anda ingin menghapus data {{$data->nama_masjid}} ??</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Keluar</button>
              <a href="/masjid/delete/{{$data->id}}" type="button" class="btn btn-outline-light">Ya</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
@endforeach


@endsection