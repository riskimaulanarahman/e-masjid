<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;

class ApiKegiatanController extends Controller
{
    public function index()
    {

        $kategory = Kegiatan::all();
        return response()->json(['message' => 'Success', 'data' => $kategory]);
    }

    public function show($id)
    {
        $kategori = Kegiatan::find($id);
        return response()->json(['Message' => 'Success', 'data' => $kategori]);
    }
}
