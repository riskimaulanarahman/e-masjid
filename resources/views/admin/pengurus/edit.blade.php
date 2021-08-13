@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card card-outline card-primary">
        <div class="card bg-primary text-white shadow">
            <div class="card-header bg-primary" > Edit Data Pengurus</div> 
        </div>
            <form action="{{ route('pengurus.update', $pengurus->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-sm-12">
                    <label for="">Tahun Kepengerusan</label>
                    <input type="text" class="form-control" id="thn_kepengurusan" name="thn_kepengurusan" value="{{ $pengurus->thn_kepengurusan}}" placeholder="Tahun Kepengurusan">
                    <div class="text-danger">
                        @error('thn_kepengurusan')
                            {{$message}}
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12">
                    <label for="">Dewan Pembina</label>
                    <input type="text" class="form-control" id="dewan_pembina" name="dewan_pembina" value="{{$pengurus->dewan_pembina}}" placeholder="Dewan Pembina">
                    <div class="text-danger">
                        @error('dewan_pembina')
                            {{$message}}
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12">
                    <label for="">Ketua</label>
                    <input type="text" class="form-control" id="ketua" name="ketua" value="{{$pengurus->ketua}}" placeholder="Ketua">
                    <div class="text-danger">
                        @error('ketua')
                            {{$message}}
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12">
                    <label for="">Sekertaris</label>
                    <input type="text" class="form-control" id="sekertaris" name="sekertaris" value="{{$pengurus->sekertaris}}" placeholder="Sekertaris">
                    <div class="text-danger">
                        @error('sekertaris')
                            {{$message}}
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12">
                    <label for="">Bendahara</label>
                    <input type="text" class="form-control" id="bendahara" name="bendahara" value="{{$pengurus->bendahara}}" placeholder="Bendahara">
                    <div class="text-danger">
                        @error('bendahara')
                            {{$message}}
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12">
                    <label for="">Seksi Ibadah</label>
                    <input type="text" class="form-control" id="seksi_ibadah" name="seksi_ibadah" value="{{$pengurus->seksi_ibadah}}" placeholder="Seksi Ibadah">
                    <div class="text-danger">
                        @error('seksi_ibadah')
                            {{$message}}
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12">
                    <label for="">Seksi Sarana</label>
                    <input type="text" class="form-control" id="seksi_sarana" name="seksi_sarana" value="{{$pengurus->seksi_sarana}}" placeholder="Seksi Sarana">
                    <div class="text-danger">
                        @error('seksi_sarana')
                            {{$message}}
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12">
                    <label for="">Seksi Pembinaan Wanita dan Anak</label>
                    <input type="text" class="form-control" id="seksi_pembinawanita" name="seksi_pembinawanita" value="{{$pengurus->seksi_pembinawanita}}" placeholder="Seksi Pembinaan Wanita dan Anak">
                    <div class="text-danger">
                        @error('seksi_pembinawanita')
                            {{$message}}
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12">
                    <label for="">Seksi Pemuda</label>
                    <input type="text" class="form-control" id="seksi_pemuda" name="seksi_pemuda" value="{{$pengurus->seksi_pemuda}}" placeholder="Seksi Pemuda">
                    <div class="text-danger">
                        @error('seksi_pemuda')
                            {{$message}}
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12">
                    <label for="">Seksi Fardhu Kifayah</label>
                    <input type="text" class="form-control" id="seksi_fadhukifayah" name="seksi_fadhukifayah" value="{{$pengurus->seksi_fadhukifayah}}" placeholder="Seksi Fardhu Kifayah">
                    <div class="text-danger">
                        @error('seksi_fadhukifayah')
                            {{$message}}
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12">
                    <label for="">Seksi Zakat</label>
                    <input type="text" class="form-control" id="seksi_zakat" name="seksi_zakat"  value="{{$pengurus->seksi_zakat}}" placeholder="Seksi Zakat">
                    <div class="text-danger">
                        @error('seksi_zakat')
                            {{$message}}
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12">
                    <label for="">Seksi Qurban</label>
                    <input type="text" class="form-control" id="seksi_qurban" name="seksi_qurban" value="{{$pengurus->seksi_qurban}}" placeholder="Seksi Qurban">
                    <div class="text-danger">
                        @error('seksi_qurban')
                            {{$message}}
                        @enderror
                    </div>
                </div>
                </div>
                <!--Akhir Pengurus-->
                <div class="card-footer">
                    <button type="submit" class="btn btn-flat btn-primary btn-sm mt-4 "><i class="fa fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
                @endsection
