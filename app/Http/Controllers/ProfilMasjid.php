<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masjid;
use App\Models\Fasilitas;
use App\Models\KategoryModel;
use App\Models\InfaqModel;
use App\Models\KegiatanModel;
use App\Models\BankModel;
use App\Models\PengurusModel;

use Illuminate\Support\Facades\DB;


class ProfilMasjid extends Controller
{
    public function index()
    {

        $masjids = Masjid::all();
        return view('profilmasjid', compact('masjids'));
    }
}
