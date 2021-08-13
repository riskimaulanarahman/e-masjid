<?php

namespace App\Http\Controllers;

use App\Models\Masjid;
use Illuminate\Http\Request;

class DetailMasjidController extends Controller
{
    public function index()
    {
        $mas = Masjid::all();
        $masjid = Masjid::with('fasilitas');
        return view('detailmasjid',  compact('masjid', 'mas'));
    }
}
