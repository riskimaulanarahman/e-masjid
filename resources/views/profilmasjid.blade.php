@extends('layouts.frontend')
@section('content')



<div class="profilmasjid">
    <div class="container mt-5">

        <div class="row">
                <div class="col-md-12">
                    <thead >
                    <table>
                            @foreach ($masjids as $data)

                            <tr>
                                <td rowspan="4"><img src="{{ asset('foto') }}/{{ $data->foto}}" width = "150px" height="150px" class="mb-4"></td>
                            </tr>
                            <tr><td colspan="2">{{ $data ->nama_masjid}}</td></tr>
                            <tr><td colspan="2">{{ $data ->alamat}}</td></tr>
                            <tr>
                            <td colspan="2">
                                <a href="/detailmasjid/{{ $data->id }}" class="petunjuk btn btn-success"><i class="fas fa-info-circle"> Detail</i></a>
                                <a href="{{ $data ->petunjuk_arah}}" target="_blank" class="petunjuk btn btn-primary"> <i class="fas fa-road"> Petunjuk arah</i> </a>
                            </td>
                            </tr>
                            @endforeach
                        </thead>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
