@extends('layouts.backend')
@section('content')
    <table class="table table-borderless">
        <tr>
            <td>Name</td>
            <td>email</td>
            <td>Password</td>
        </tr>
        <tbody>
            @foreach ($user as $data)
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->password}}</td>
            @endforeach
        </tbody>
    </table>
@endsection