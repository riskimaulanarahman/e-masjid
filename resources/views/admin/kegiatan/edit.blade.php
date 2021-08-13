@extends('layouts.backend')
@section('content')

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card card-outline card-primary">
        <div class="card bg-primary text-white shadow">
            <div class="card-header bg-primary" > Edit Data Kegiatan</div> 
        </div>
            <form action="/kegiatan/update/{{$kegiatan->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                


                <div class="col-sm-12">
                    <label for="">Jam</label>
                    <input type="time" class="form-control" id="jam_mg" name="jam_mg" value="{{$kegiatan->jam_mg}}" placeholder="Hari">
                    <div class="text-danger">
                        @error('jam_mg')
                            {{$message}}
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12">
                    <label for="">Hari</label>
                    <input type="text" class="form-control" id="hari_mg" name="hari_mg" value="{{$kegiatan->hari_mg}}" placeholder="Hari">
                    <div class="text-danger">
                        @error('hari_mg')
                            {{$message}}
                        @enderror
                    </div>
                </div>
        
                <div class="col-sm-12">
                    <label for="">Tanggal Kajian</label>
                    <input type="date" class="form-control" id="tgl_mg" name="tgl_mg" value="{{$kegiatan->tgl_mg}}" placeholder="Tanggal Kajian">
                    <div class="text-danger">
                        @error('tgl_mg')
                            {{$message}}
                        @enderror
                    </div>
                </div>
                
                <div class="col-sm-12">
                    <label for="">Tema Mingguan</label>
                    <input type="text" class="form-control" id="tema_mg" name="tema_mg" value="{{$kegiatan->tema_mg}}" placeholder="Tema Mingguan">
                    <div class="text-danger">
                        @error('tema_mg')
                            {{$message}}
                        @enderror
                    </div>
                </div>
        
                <div class="col-sm-12">
                    <label for="">Nama Penceramah</label>
                    <input type="text" class="form-control" id="penceramah_mg" name="penceramah_mg" value="{{$kegiatan->penceramah_mg}}" placeholder="Nama Penceramah">
                    <div class="text-danger">
                        @error('penceramah_mg')
                            {{$message}}
                        @enderror
                    </div>
                </div>
        
                <!--Bulanan-->

                <div class="col-sm-12">
                    <label for="">Jam</label>
                    <input type="time" class="form-control" id="jam_bln" name="jam_bln" value="{{$kegiatan->jam_bln}}" placeholder="Hari">
                    <div class="text-danger">
                        @error('jam_bln')
                            {{$message}}
                        @enderror
                    </div>
                </div>
        
                <div class="col-sm-12">
                    <label for="">Hari kajian bulanan</label>
                    <input type="text" class="form-control" id="hari_bln" name="hari_bln" value="{{$kegiatan->hari_bln}}" placeholder="Hari kajian bulanan">
                    <div class="text-danger">
                        @error('hari_bln')
                            {{$message}}
                        @enderror
                    </div>
                </div>
        
                <div class="col-sm-12">
                    <label for="">Tanggal Kajian</label>
                    <input type="date" class="form-control" id="tgl_bln" name="tgl_bln" value="{{$kegiatan->tgl_bln}}" placeholder="Tanggal Kajian">
                    <div class="text-danger">
                        @error('tgl_bln')
                            {{$message}}
                        @enderror
                    </div>
                </div>
        
                <div class="col-sm-12">
                    <label for="">Tema</label>
                    <input type="text" class="form-control" id="tema_bln" name="tema_bln" value="{{$kegiatan->tema_bln}}" placeholder="Tema">
                    <div class="text-danger">
                        @error('tema_bln')
                            {{$message}}
                        @enderror
                    </div>
                </div>
        
                <div class="col-sm-12">
                    <label for="">Penceramah Bulanan</label>
                    <input type="text" class="form-control" id="penceramah_bln" name="penceramah_bln" value="{{$kegiatan->penceramah_bln}}" placeholder="Penceramah Bulanan">
                    <div class="text-danger">
                        @error('penceramah_bln')
                            {{$message}}
                        @enderror
                    </div>
                </div>
            </div>  

                <div class="card-footer">
                    <button type="submit" class="btn btn-flat btn-primary btn-sm mt-4 "><i class="fa fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection