<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Fasilitas;
use App\Models\Masjid;
use App\Models\KategoryModel;
use App\Models\InfaqModel;
use App\Models\BankModel;
use App\Models\Kegiatan;
use App\Models\PengurusModel;

class MasjidController extends Controller
{
    public function __construct()
    {
        $this->Masjid           = new Masjid();
        $this->KategoryModel    = new KategoryModel();
        $this->InfaqModel       = new InfaqModel();
        $this->BankModel        = new BankModel();
    }
    public function index()
    {
        $data = [
            'title'         => 'Tambah Data Masjid',
            'masjid'        => $this->Masjid->AllData(),
        ];
        return view('admin.masjid.index', $data);
    }

    // add masjid
    public function add()
    {
        $data = [
            'title'         => 'Tambah Data Masjid',
            'masjid'        => $this->Masjid->AllData(),
            'kategori'      => $this->KategoryModel->AllData(),
            'bank'          => $this->BankModel->AllData(),
        ];
        return view('admin.masjid.add', $data);
    }

    public function insert(Request $request)
    {
        $data = $request->all();

        $infaq = new InfaqModel();
        $infaq->atasnama_rek    = $data['atasnama_rek'];
        $infaq->no_rek          = $data['no_rek'];
        $infaq->save();
        $masjid = new Masjid;
        // jika validasi lengkap, maka lakukan simpan data ke database
        $file = Request()->foto;
        $filename = $file->getClientOriginalName();
        $file->move(public_path('foto'), $filename);

        $masjid->id_infaq       = $infaq->id_infaq;
        $masjid->id_bank        = $data['id_bank'];
        $masjid->nama_masjid    = $data['nama_masjid'];
        $masjid->id_kategory    = $data['id_kategory'];
        $masjid->alamat         = $data['alamat'];
        $masjid->kapasitas      = $data['kapasitas'];
        $masjid->luas           = $data['luas'];
        $masjid->posisi         = $data['posisi'];
        $masjid->petunjuk_arah  = $data['petunjuk_arah'];
        $masjid->peta           = $data['peta'];
        $masjid->foto           = $filename;
        $masjid->save();

        return redirect()->route('masjid')->with('pesan', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {

        $data = [
            'title'         => 'Edit Data Masjid',
            'bank'          => $this->BankModel->AllData(),
            'kategori'      => $this->KategoryModel->AllData(),
            'infaq'         => $this->InfaqModel->AllData(),
            'masjid'        => $this->Masjid->DetailData($id),

        ];
        // return $data;
        return view('admin.masjid.edit', $data);
    }

    public function update(Request $request, $id)
    {

        $masjid = Masjid::find($id)->update($request->all());
        return redirect()->route('masjid', compact('masjid'));
    }
    public function delete($id)
    {
        $masjid = $this->Masjid->DetailData($id);

        // simpan ke model
        $this->Masjid->DeleteData($id);

        // redirect
        return redirect()->route('masjid')->with('pesan', 'Data Berhasil Delete');
    }

    public function detailmasjid($id)
    {

        $masjid = $this->Masjid->DetailData($id);
        $bank = BankModel::all();
        $data = [
            'title' => 'Detail ' . $masjid->nama_masjid,
            'bank' => $this->BankModel->AllData(),
            'ketegory' => $this->KategoryModel->AllData(),
            'masjid'    => $masjid,
            'bankdetail' => $bank
        ];

        return view('admin.masjid.detail', $data);
    }
}
