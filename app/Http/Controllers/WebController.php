<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;
use App\Models\Masjid;
use App\Models\KategoryModel;
use App\Models\InfaqModel;
use App\Models\Kegiatan;
use App\Models\BankModel;
use App\Models\Pengurus;
use App\Models\MapsModel;

use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function __construct()
    {
        $this->Masjid           = new Masjid();
        $this->Fasilitas        = new Fasilitas();
        $this->KategoryModel    = new KategoryModel();
        $this->InfaqModel       = new InfaqModel();
        $this->BankModel        = new BankModel();
        $this->KegiatanModel    = new Kegiatan();
        $this->Pengurus    = new Pengurus();
        $this->MapsModel        = new MapsModel();
    }
    public function index(Request $request)
    {

        $masjid = [
            'kategori' => $this->KategoryModel->AllData(),
            'masjid' => $this->Masjid->AllData(),
        ];

        $input = $request->all();
        if (isset($input['id'])) {
            $data = Masjid::where('id', $input['id'])->get();
        } else {

            $data = Masjid::all();
        }

        $grafik = $this->chart_kategory();
        // dd($grafik);
        $kategoryCount = $this->getKategoriCount();
        $kat = KategoryModel::pluck('kategori', 'id_kategory');

        return view('web', $masjid, compact('data', 'kat', 'grafik', 'kategoryCount'));
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
            $data = $data->where('masjid.id_kategory', $kat_id);
        }


        return $data->get();
    }


    public function detailmasjid($id)
    {
        // $fas = Fasilitas::find($id);
        // $masjid = $this->Masjid->DetailData($id);
        // $data = [
        //     'title' => 'Detail Masjid' . $masjid->nama_masjid,
        //     'bank' => $this->BankModel->AllData(),
        //     'ketegory' => $this->KategoryModel->AllData(),
        //     'fasilitas' => $this->Fasilitas->AllData(),
        //     'masjid'    => $masjid,
        //     'fas'   => $fas
        // ];
        $data = Masjid::where('id',$id)
        ->with(['kategory','fasilitas','kegiatan','pengurus','bank','infaq'])->first();

        // return $data;

        // return view('detailmasjid',$data);
        return view('detailmasjid', ['data' => $data]);
    }
}
