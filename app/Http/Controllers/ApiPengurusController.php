<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengurus;


class ApiPengurusController extends Controller
{
    public function index()
    {

        $pengurus = Pengurus::all();
        return response()->json(['message' => 'Success', 'data' => $pengurus]);
    }

    public function show($id)
    {
        $pengurus = Pengurus::find($id);
        return response()->json(['Message' => 'Success', 'data' => $pengurus]);
    }
}
