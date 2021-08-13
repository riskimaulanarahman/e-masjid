@extends('layouts.backend')
@section('content')

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card card-outline card-primary">
        <div class="card bg-primary text-white shadow">
            <div class="card-header bg-primary" ></div> 
        </div>

        <form action="/user/update/{{$user->id}}" method="POST" enctype="multipart/form-data">
            
            @csrf
            <div class="card-body">
                
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Nama User</label>
                                <input type="text" class="form-control" value="{{$user->name}}" id="name" name="name" placeholder="Nama User" >
                                <div class="text-danger">
                                    @error('name')
                                        {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" value="{{$user->email}}" id="email" name="email" placeholder="Email" >
                                <div class="text-danger">
                                    @error('email')
                                        {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
                                <label for="">*) Jika password tidak diganti kosongkan saja</label>
                                <div class="text-danger">
                                    @error('password')
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