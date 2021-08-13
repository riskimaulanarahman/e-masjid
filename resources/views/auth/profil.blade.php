@extends('layouts.backend')
@section('content')
@foreach ($user as $data)
{{ $data->name}}
@endforeach
@endsection