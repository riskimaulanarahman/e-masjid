@extends('layouts.backend')
@section('content')

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card card-outline card-primary">
        <div class="card bg-primary text-white shadow">
            <div class="card-header bg-primary" > {{ $title }}</div>
        </div>

        <form action="/kategory/update/{{$kategory->id_kategory}}" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="card-body">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Kategori Masjid</label>
                                <input type="text" class="form-control" value="{{$kategory->kategori}}" id="kategori" name="kategori" placeholder="Kategori masjid" >
                                <div class="text-danger">
                                    @error('kategori')
                                        {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Ganti Icon</label><br>
                                <input type="file" id="icon" name="icon"  accept="image/png">
                                 <div class="text-danger">
                                    @error('icon')
                                        {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Icon</label><br>
                                <img src="{{ asset('iconkategori')}}/{{$kategory->icon}}" alt="" width="100px" height="100px">
                            </div>
                        </div>


                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-flat btn-primary btn-sm mt-4 "><i class="fa fa-save"></i> Simpan</button>
                    </div>


            </div>
        </form>
        </div>
    </div>
</div>

@endsection
