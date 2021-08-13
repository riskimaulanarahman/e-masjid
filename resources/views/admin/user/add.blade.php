@extends('layouts.backend')
@section('content')

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card card-outline card-primary">
        <div class="card bg-primary text-white shadow">
            <div class="card-header bg-primary" >Tambah Data</div> 
        </div>

        <form action="/user/insert" method="POST">
            
            @csrf
            <div class="card-body">
                
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Nama User</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nama User" >
                                <div class="text-danger">
                                    @error('name')
                                        {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email" >
                                 <div class="text-danger">
                                    @error('email')
                                        {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
                                 <div class="text-danger">
                                    @error('password')
                                        {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi Password" >
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