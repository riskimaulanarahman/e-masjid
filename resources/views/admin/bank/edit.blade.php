@extends('layouts.backend')
@section('content')

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card card-outline card-primary">
        <div class="card bg-primary text-white shadow">
            <div class="card-header bg-primary" > {{ $title }}</div> 
        </div>

        <form action="/bank/update/{{$bank->id}}" method="POST" enctype="multipart/form-data">
            
            @csrf
            <div class="card-body">
                
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Kode Bank</label>
                                <input type="text" class="form-control" value="{{$bank->kode_bank}}" id="kode_bank" name="kode_bank" placeholder="Kode Bank" >
                                <div class="text-danger">
                                    @error('kode_bank')
                                        {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Nama Bank</label>
                                <input type="text" class="form-control" value="{{$bank->nama_bank}}" id="nama_bank" name="nama_bank" placeholder="Nama Bank" >
                                <div class="text-danger">
                                    @error('nama_bank')
                                        {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Ganti Icon</label><br>
                                <input type="file" id="icons" name="icons"  accept="image/png">
                                 <div class="text-danger">
                                    @error('icons')
                                        {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Icon</label><br>
                                <img src="{{ asset('iconbank')}}/{{$bank->icons}}" alt="" width="100px" height="100px">
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