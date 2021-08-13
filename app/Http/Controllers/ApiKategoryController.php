<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoryModel;

class ApiKategoryController extends Controller
{
    public function index()
    {

        $kategory = KategoryModel::all();
        return response()->json(['message' => 'Success', 'data' => $kategory]);
    }

    public function show($id)
    {
        $kategori = KategoryModel::find($id);
        return response()->json(['Message' => 'Success', 'data' => $kategori]);
    }
}
