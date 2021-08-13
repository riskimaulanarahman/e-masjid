@extends('layouts.backend')
@section('content')

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card card-outline card-primary">
        <div class="card bg-primary text-white shadow">
            <div class="card-header bg-primary" > Tambah data kegiatan </div>
        </div>

        <form action="/kegiatan/store" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="card-body">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="masjid_id">Nama Masjid</label>
                                <select name="masjid_id" class="form-control" >
                                    <option value="">-- Pilih Nama Masjid --</option>
                                    @foreach ($masjid as $data)
                                        <option value="{{$data->id}}">{{$data->nama_masjid}}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                    @error('id')
                                        {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="">Jam</label>
                            <input type="time" class="form-control" id="jam_mg" name="jam_mg" placeholder="Hari">
                            <div class="text-danger">
                                @error('jam_mg')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="">Hari</label>
                            {{-- <input type="text" class="form-control" id="hari_mg" name="hari_mg" placeholder="Hari"> --}}
                            <select class="form-control" name="hari_mg" id="hari_mg" required>
                                <option value="">- pilih hari -</option>
                                <option value="senin">senin</option>
                                <option value="selasa">selasa</option>
                                <option value="rabu">rabu</option>
                                <option value="kamis">kamis</option>
                                <option value="jumat">jumat</option>
                                <option value="sabtu">sabtu</option>
                                <option value="minggu">minggu</option>
                            </select>
                            <div class="text-danger">
                                @error('hari_mg')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="">Tanggal Kajian</label>
                            <input type="date" class="form-control" id="tgl_mg" name="tgl_mg" placeholder="Tanggal Kajian">
                            <div class="text-danger">
                                @error('tgl_mg')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="">Tema Mingguan</label>
                            <input type="text" class="form-control" id="tema_mg" name="tema_mg" placeholder="Tema Mingguan">
                            <div class="text-danger">
                                @error('tema_mg')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="">Nama Penceramah</label>
                            <input type="text" class="form-control" id="penceramah_mg" name="penceramah_mg" placeholder="Nama Penceramah">
                            <div class="text-danger">
                                @error('penceramah_mg')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>

                        <!--Bulanan-->

                        <div class="col-sm-12">
                            <label for="">Jam</label>
                            <input type="time" class="form-control" id="jam_bln" name="jam_bln" placeholder="Hari">
                            <div class="text-danger">
                                @error('jam_bln')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="">Hari kajian bulanan</label>
                            {{-- <input type="text" class="form-control" id="hari_bln" name="hari_bln" placeholder="Hari kajian bulanan"> --}}
                            <select class="form-control" name="hari_bln" id="hari_bln" required>
                                <option value="">- pilih hari -</option>
                                <option value="senin">senin</option>
                                <option value="selasa">selasa</option>
                                <option value="rabu">rabu</option>
                                <option value="kamis">kamis</option>
                                <option value="jumat">jumat</option>
                                <option value="sabtu">sabtu</option>
                                <option value="minggu">minggu</option>
                            </select>
                            <div class="text-danger">
                                @error('hari_bln')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="">Tanggal Kajian</label>
                            <input type="date" class="form-control" id="tgl_bln" name="tgl_bln" placeholder="Tanggal Kajian">
                            <div class="text-danger">
                                @error('tgl_bln')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="">Tema</label>
                            <input type="text" class="form-control" id="tema_bln" name="tema_bln" placeholder="Tema">
                            <div class="text-danger">
                                @error('tema_bln')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="">Penceramah Bulanan</label>
                            <input type="text" class="form-control" id="penceramah_bln" name="penceramah_bln" placeholder="Penceramah Bulanan">
                            <div class="text-danger">
                                @error('penceramah_bln')
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
