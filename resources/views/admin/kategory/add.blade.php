@extends('layouts.backend')
@section('content')

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card card-outline card-primary">
        <div class="card bg-primary text-white shadow">
            <div class="card-header bg-primary" > {{ $title }}</div> 
        </div>

        <form action="/kategory/insert" method="POST" enctype="multipart/form-data">
            
            @csrf
            <div class="card-body">
                
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Kategori Masjid</label>
                                <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori masjid" >
                                <div class="text-danger">
                                    @error('kategori')
                                        {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Icon</label><br>
                                <input type="file" id="icon" name="icon"  accept="image/png">
                                 <div class="text-danger">
                                    @error('icon')
                                        {{$message}}
                                    @enderror
                                </div>
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