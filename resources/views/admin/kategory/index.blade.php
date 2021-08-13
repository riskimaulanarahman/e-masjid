@extends('layouts.backend')

@section('content')

<div class="row">

    <div class="btn">
        <a href="/kategory/tambah" type="button" class=" btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
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
                            <th class="text-center">Kategory</th>
                            <th width="50px" class="text-center">Icon</th>
                            <th width="100px" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        @foreach ($kategori as $data)
                        <tr>
                            <td class="text-center" >{{ $no++ }}</td>
                            <td >{{ $data->kategori}}</td>
                            <td ><img src="{{ asset('iconkategori') }}/{{ $data->icon}}" alt="" width="40px" height="40px"></td>
                            <td class="text-center">
                                <a href="/kategory/edit/{{$data->id_kategory}}" class="btn btn-sm btn-flat btn-warning"><i class="fa fa-edit"></i></a>
                                <a  class="btn btn-sm btn-flat btn-danger" data-toggle="modal" data-target="#delete{{$data->id_kategory}}"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
             </div>
        </div>
    </div>
</div>

@foreach ($kategori as $data)
    <div class="modal fade" id="delete{{$data->id_kategory}}">
        <div class="modal-dialog">
          <div class="modal-content bg-warning">
            <div class="modal-header">
              <h4 class="modal-title" style="color: red">{{$data->kategori}}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" style="color: black">
              <p>Apakah anda ingin menghapus data {{$data->kategori}} ??</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Keluar</button>
              <a href="/kategory/delete/{{$data->id_kategory}}" type="button" class="btn btn-outline-light">Ya</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
@endforeach


@endsection
