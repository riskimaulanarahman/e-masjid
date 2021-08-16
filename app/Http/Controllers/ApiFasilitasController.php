<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;


class ApiFasilitasController extends Controller
{
    public function index()
    {

        $fasilitas = Fasilitas::all();
        return response()->json(['message' => 'Success', 'data' => $fasilitas]);
    }

    public function show($id)
    {
        $fasilitas = Fasilitas::find($id);
        return response()->json(['Message' => 'Success', 'data' => $fasilitas]);
    }
}
