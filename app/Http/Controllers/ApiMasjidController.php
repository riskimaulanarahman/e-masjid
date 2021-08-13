<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masjid;

use App\Models\BankModel;

class ApiMasjidController extends Controller
{
    public function index()
    {

        $masjid = Masjid::all();
        return response()->json(['message' => 'Success', 'data' => $masjid]);
    }

    public function show($id)
    {
        $masjids = Masjid::find($id);
        return response()->json(['Message' => 'Success', 'data' => $masjids]);
    }
}
