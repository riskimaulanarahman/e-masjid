@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card bg-primary text-white shadow">
            <div class="card-header bg-primary" > {{ $title }}
            
            </div> 
        </div>
        <div class="tab-content" id="nav-tabContent">
            <img src="{{ asset('foto') }}/{{ $masjid->foto }}" width="100%" height="400px">
                <table class="table table-borderless ">
                    <tr>
                        <td>Nama Masjid</td>
                        <td>:</td>
                        <td>{{ $masjid->nama_masjid}}</td>
                    </tr>

                    <tr>
                        <td>Kategory</td>
                        <td>:</td>
                        <td>{{ $masjid->kategori}}</td>
                    </tr>

                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{ $masjid->alamat}}</td>
                    </tr>
                    <tr>
                        <td>Luas</td>
                        <td>:</td>
                        <td>{{ $masjid->luas}}</td>
                    </tr>
                    <tr>
                        <td>Kapasitas</td>
                        <td>:</td>
                        <td>{{ $masjid->kapasitas}}</td>
                    </tr> 

                  
                    <tr>
                        <td>Kode Bank</td>
                        <td>:</td>
                        <td>{{ $masjid->kode_bank}}</td>
                    </tr> 

                    <tr>
                        <td>Nama Bank</td>
                        <td>:</td>
                        <td>{{ $masjid->nama_bank}}</td>
                    </tr>
                    
                    <tr>
                        <td>Atas Nama</td>
                        <td>:</td>
                        <td>{{ $masjid->atasnama_rek}}</td>
                    </tr>
                    
                    <tr>
                        <td>Nomor Rekening</td>
                        <td>:</td>
                        <td>{{ $masjid->no_rek}}</td>
                    </tr> 
            </table> 
            <div class="bank mb-5 text-center bg-dark text-white " >
                <img  src="{{ asset('iconbank') }}/{{ $masjid->icons }}" width="80px" height="60px">
                
                <td> a/n</td>
                <td>{{ $masjid->atasnama_rek}}</td>
                <td>{{ $masjid->no_rek}}</td>
            </div> 
           

        </div>
    </div>     
</div>
@endsection