@extends('layouts.backend')

@section('content')

<div class="row">
    
    <div class="btn">
        <a href="/bank/add" type="button" class=" btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
    </div>
    <div class="col-lg-12 mb-4">
        <div class="card bg-primary text-white shadow">
            <div class="card-header bg-primary" > {{ $title }}
            
            </div> 
        </div>

        <form class="form-inline my-4 my-lg-0" method="get" action="{{ url('bank') }}">
          <input class="form-control ml-auto mr-2" type="text" value="{{ $keyword}}" placeholder="Search" aria-label="Search" name="keyword">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>

        
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
                            <th width ="100px" class="text-center">Kode Bank</th>
                            <th class="text-center">Nama Bank</th>
                            <th width="100px" class="text-center">Icon</th>
                            <th width="100px" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        @foreach ($bank as $key=> $data)
                        <tr>
                            <td class="text-center" >{{ $bank->firstItem() + $key }}</td>
                            <td>{{ $data->kode_bank}}</td>
                            <td>{{ $data->nama_bank}}</td>
                            <td ><img src="{{ asset('iconbank') }}/{{ $data->icons}}" alt="" width="40px" height="40px"></td>
                            <td class="text-center">
                                <a href="/bank/edit/{{$data->id}}" class="btn btn-sm btn-flat btn-warning"><i class="fa fa-edit"></i></a>
                                <a  class="btn btn-sm btn-flat btn-danger" data-toggle="modal" data-target="#delete{{$data->id}}"><i class="fa fa-trash"></i></a> 
                            </td>
                        </tr>
                            
                        @endforeach
                    </tbody>
                </table>

             
            
              </div>
              {{$bank->links()}}
             </div>
             </div>
        </div>
    </div>
</div>

@foreach ($bank as $data)
    <div class="modal fade" id="delete{{$data->id}}">
        <div class="modal-dialog">
          <div class="modal-content bg-warning">
            <div class="modal-header">
              <h4 class="modal-title" style="color: red">{{$data->nama_bank}}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" style="color: black">
              <p>Apakah anda ingin menghapus data {{$data->nama_bank}} ??</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Keluar</button>
              <a href="/bank/delete/{{$data->id}}" type="button" class="btn btn-outline-light">Ya</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
@endforeach


@endsection