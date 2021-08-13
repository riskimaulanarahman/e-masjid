@extends('layouts.backend')
@section('content')

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card card-outline card-primary">
        <div class="card bg-primary text-white shadow">
            <div class="card-header bg-primary" > Tambah data Fasilitas </div>
        </div>

        <form action="/fasilitas/store" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="card-body">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Nama Masjid</label>
                                <select name="masjid_id" class="form-control" >
                                    <option value="">-- Pilih Nama Masjid --</option>
                                    @foreach ($masjid as $data)
                                        <option value="{{$data->id}}">{{$data->nama_masjid}}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                    @error('id_masjid')
                                        {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>


                    <div class="col-sm-12">
                    <div class="form-group">
                        <label for="">Jumlah Al-Quran</label>
                        <input type="number" class="form-control" id="alquran" name="alquran" placeholder="Jumlah Al-Quran" >
                        <div class="text-danger">
                            @error('alquran')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="">Jumlah Mukennah</label>
                            <input type="number" class="form-control" id="mukenah" name="mukenah" placeholder="Jumlah Mukennah" >
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
                            <input type="number" class="form-control" id="sajadah" name="sajadah" placeholder="Jumlah Sajadah" >
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
                            <input type="number" class="form-control" id="tempat_wudhu" name="tempat_wudhu" placeholder="Jumlah Tempat Wudhu" >
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
                            <input type="number" class="form-control" id="keranda" name="keranda" placeholder="Jumlah Keranda" >
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
                            <input type="number" class="form-control" id="kain_kafan" name="kain_kafan" placeholder="Jumlah Kain Kafan" >
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
                            <input type="number" class="form-control" id="ambulans" name="ambulans" placeholder="Jumlah Ambulans" >
                            <div class="text-danger">
                                @error('ambulans')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <!--Akhir Fasilitas-->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-flat btn-primary btn-sm mt-4 "><i class="fa fa-save"></i> Simpan</button>
                    </div>


            </div>
        </form>
        </div>
    </div>
</div>
@endsection
