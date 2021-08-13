<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BankModel;
use App\Models\InfaqModel;
use App\Models\Fasilitas;
use App\Models\KategoryModel;
use App\Models\KegiatanModel;
use App\Models\Masjid;
use App\Models\PengurusModel;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $input = $request->all();
        if (isset($input['id'])) {
            $data = Masjid::where('id_kategory', $input['id'])->get();
        } else {

            $data = Masjid::all();
        }

        $grafik = $this->chart_kategory();
        // dd($grafik);
        $kategoryCount = $this->getKategoriCount();
        $kat = KategoryModel::pluck('kategori', 'id_kategory');
        return view('home', compact('data', 'kat', 'grafik', 'kategoryCount'));
    }

    public function chart_kategory($value = '')
    {
        $grafik = [];
        $data = DB::table('kategori')
            ->select('kategori.id_kategory', 'kategori.kategori', DB::raw("count(masjid.id) as jml"))
            ->join('masjid', 'masjid.id_kategory', '=', 'kategori.id_kategory')
            ->groupBy('kategori.id_kategory', 'kategori.kategori')
            ->get();

        foreach ($data as $key => $value) {
            $grafik['labels'][] = $value->kategori;
            $grafik['data'][] = $value->jml;
            $r = rand(0, 255);
            $g = rand(0, 255);
            $b = rand(0, 255);
            $grafik['backgroundColor'][] = "rgba($r,$g,$b,1)";
        }
        if (count($data) == 0) {
            return [];
        } else {
            return [
                'labels' => json_encode($grafik['labels'], true),
                'data' => json_encode($grafik['data']),
                'backgroundColor' => json_encode($grafik['backgroundColor'], true),
                'borderColor' => json_encode($grafik['backgroundColor'], true)
            ];
        }
        return view('home', $data);
    }
    public function getKategoriCount($kat_id = '')
    {
        $data = DB::table('kategori')
            ->select('kategori.id_kategory', 'kategori.kategori', DB::raw("count(masjid.id) as jml"))
            ->join('masjid', 'masjid.id_kategory', '=', 'kategori.id_kategory')
            ->groupBy('kategori.id_kategory', 'kategori.kategori');

        if ($kat_id) {
            $data = $data->where('masjids.id_kategory', $kat_id);
        }


        return $data->get();
    }
}
