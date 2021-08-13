@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card bg-primary text-white shadow">
            <div class="card-header bg-primary" > Detail Data Kegiatan
            
            </div> 
        </div>
        <div class="tab-content" id="nav-tabContent">
                <table class="table table-borderless ">
                    <tr>
                        <td>Nama Masjid</td>
                        <td>:</td>
                        <td>{{ $kegiatan->masjid->nama_masjid}}</td>
                    </tr>


                    <tr>
                        <td>Hari</td>
                        <td>:</td>
                        <td>{{ $kegiatan->hari_mg}} , {{ $kegiatan->tgl_mg}}</td>
                    </tr>

                    <tr>
                        <td>Jam</td>
                        <td>:</td>
                        <td>{{ $kegiatan->jam_mg}}</td>
                    </tr>

                    <tr>
                        <td>Tema </td>
                        <td>:</td>
                        <td>{{ $kegiatan->tema_mg}}</td>
                    </tr>

                    <tr>
                        <td>Penceramah</td>
                        <td>:</td>
                        <td>{{ $kegiatan->penceramah_mg}}</td>
                    </tr>

                    <tr>
                        <td>Hari / Tanggal</td>
                        <td>:</td>
                        <td>{{ $kegiatan->hari_bln}} , {{ $kegiatan->tgl_bln}}</td>
                    </tr>

                    <tr>
                        <td>Jam</td>
                        <td>:</td>
                        <td>{{ $kegiatan->jam_bln}}</td>
                    </tr>

                    <tr>
                        <td>Tema</td>
                        <td>:</td>
                        <td>{{ $kegiatan->tema_bln}}</td>
                    </tr>
                    <tr>
                        <td>Penceramah</td>
                        <td>:</td>
                        <td>{{ $kegiatan->penceramah_bln}}</td>
                    </tr>

                    
            </table>
        </div>
    </div>     
</div>
@endsection