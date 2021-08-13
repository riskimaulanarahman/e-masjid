@extends('layouts.backend')
@section('content')

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card card-outline card-primary">
        <div class="card bg-primary text-white shadow">
            <div class="card-header bg-primary" > Edit Data Fasilitas</div>
        </div>
            <form action="{{ route('fasilitas.update', $fasilitas->id) }}" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="">Alquran</label>
                        <input type="number" class="form-control" id="alquran" name="alquran" value="{{$fasilitas->alquran}}" placeholder="Jumlah Alquran" >
                        <div class="text-danger">
                            @error('alquran')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="">Mukenah</label>
                        <input type="number" class="form-control" id="mukenah" name="mukenah" value="{{$fasilitas->mukenah}}" placeholder="Jumlah Mukenah" >
                        <div class="text-danger">
                            @error('mukenah')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="">Jumlah Sajadah</label>
                        <input type="number" class="form-control" id="sajadah" name="sajadah" value="{{$fasilitas->sajadah}}" placeholder="Jumlah Sajadah" >
                        <div class="text-danger">
                            @error('sajadah')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="">Jumlah Tempat Wudhu</label>
                        <input type="number" class="form-control" id="tempat_wudhu" name="tempat_wudhu" value="{{$fasilitas->tempat_wudhu}}" placeholder="Jumlah Tempat Wudhu" >
                        <div class="text-danger">
                            @error('tempat_wudhu')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="">Jumlah Keranda</label>
                        <input type="number" class="form-control" id="keranda" name="keranda" value="{{$fasilitas->keranda}}" placeholder="Jumlah Keranda" >
                        <div class="text-danger">
                            @error('keranda')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="">Jumlah Kain Kafan</label>
                        <input type="number" class="form-control" id="kain_kafan" name="kain_kafan" value="{{$fasilitas->kain_kafan}}" placeholder="Jumlah Kain Kafan" >
                        <div class="text-danger">
                            @error('kain_kafan')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="">Jumlah Ambulans</label>
                        <input type="number" class="form-control" id="ambulans" name="ambulans" value="{{$fasilitas->ambulans}}" placeholder="Jumlah Ambulans" >
                        <div class="text-danger">
                            @error('ambulans')
                                {{$message}}
                            @enderror
                        </div>
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
