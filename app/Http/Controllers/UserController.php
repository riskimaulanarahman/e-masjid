<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request  $request)
    {
        $keyword = $request->keyword;
        $user = User::where('name', 'LIKE', '%' . $keyword . '%')
            ->orWhere('email', 'LIKE', '%' . $keyword . '%')
            ->simplePaginate(5);

        return view('admin.user.index', compact('user', ['user' => $user], 'keyword'));
    }

    public function add()
    {
        return view('admin.user.add');
    }

    public function insert(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'password' => 'required|confirmed|min:8',
            'email' => 'required|email|unique:users'
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('/user')->with('pesan', 'Data user berhasil di simpan');
    }

    public function  edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if ($request->input('password')) {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
        } else {
            $user->name  = $request->name;
            $user->email = $request->email;
        }
        $user->update();
        return redirect('/user')->with('pesan', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user');
    }
}
