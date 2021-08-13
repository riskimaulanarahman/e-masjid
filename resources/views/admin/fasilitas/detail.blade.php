@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card bg-primary text-white shadow">
            <div class="card-header bg-primary" > Detail Data Fasilitas
            
            </div> 
        </div>
        <div class="tab-content" id="nav-tabContent">
                <table class="table table-borderless ">
                    <tr>
                        <td>Nama Masjid</td>
                        <td>:</td>
                        <td>{{ $fasilitas->masjid->nama_masjid}}</td>
                    </tr>

                    <tr>
                        <td>Jumlah Alquran</td>
                        <td>:</td>
                        <td>{{ $fasilitas->alquran}}</td>
                    </tr>

                    <tr>
                        <td>Jumlah Mukennah</td>
                        <td>:</td>
                        <td>{{ $fasilitas->mukenah}}</td>
                    </tr>

                    <tr>
                        <td>Jumlah Sajadah</td>
                        <td>:</td>
                        <td>{{ $fasilitas->sajadah}}</td>
                    </tr>

                    <tr>
                        <td>Tempat Wudhu</td>
                        <td>:</td>
                        <td>{{ $fasilitas->tempat_wudhu}}</td>
                    </tr>

                    <tr>
                        <td>Jumlah Keranda</td>
                        <td>:</td>
                        <td>{{ $fasilitas->keranda}}</td>
                    </tr>

                    <tr>
                        <td>Kain Kafan</td>
                        <td>:</td>
                        <td>{{ $fasilitas->kain_kafan}}</td>
                    </tr>

                    <tr>
                        <td>Jumlah Ambulans</td>
                        <td>:</td>
                        <td>{{ $fasilitas->ambulans}}</td>
                    </tr>

                    
            </table>
        </div>
    </div>     
</div>
@endsection