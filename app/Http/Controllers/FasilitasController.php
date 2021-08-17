<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use App\Models\Masjid;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\DB;

class FasilitasController extends Controller
{
    public function __construct()
    {
        $this->Masjid           = new Masjid();
        $this->Fasilitas        = new Fasilitas();
    }
    public function index()
    {
        $fasilitas = Fasilitas::all();
        return view('admin.fasilitas.index', compact('fasilitas'));
    }

    public function insert()
    {
        $masjid     = Masjid::all();
        $fasilitas = Fasilitas::all();
        return view('admin.fasilitas.insert', compact('fasilitas', 'masjid'));
    }

    public function store(Request $request)
    {
        $pesan = [
            'numeric'   => 'Hanya bisa diisi dengan angka',
            'required' => ':attribute wajib di isi'
        ];
        $this->validate($request, [
            'alquran'       => 'required|numeric',
            'mukenah'       => 'required|numeric',
            'sajadah'       => 'required|numeric',
            'tempat_wudhu'  => 'required|numeric',
            'keranda'       => 'required|numeric',
            'kain_kafan'    => 'required|numeric',
            'keranda'       => 'required|numeric',
            'ambulans'      => 'required|numeric',
        ], $pesan);

        DB::table('fasilitas')->insert([
            'alquran' => $request->alquran,
            'mukenah' => $request->mukenah,
            'sajadah' => $request->sajadah,
            'tempat_wudhu' => $request->tempat_wudhu,
            'kain_kafan' => $request->kain_kafan,
            'keranda' => $request->keranda,
            'ambulans' => $request->ambulans,
            'masjid_id' => $request->masjid_id,
        ]);

        return redirect('fasilitas')->with('pesan', 'Data fasilitas telah ditembahkan');
    }


    public function edit($id)
    {
        $fasilitas = Fasilitas::find($id);
        $masjid = Masjid::all();
        return view('admin.fasilitas.edit', compact('fasilitas', 'masjid'));
    }

    public function update(Request $request, $id_fasilitas)
    {
        $pesan = [
            'required' => ':attribute wajib di isi'
        ];
        $this->validate($request, [
            'alquran'       => 'required',
            'mukenah'       => 'required',
            'sajadah'       => 'required',
            'tempat_wudhu'  => 'required',
            'keranda'       => 'required',
            'kain_kafan'    => 'required',
            'keranda'       => 'required',
            'ambulans'      => 'required',
        ], $pesan);


        $fasilitas = Fasilitas::find($id_fasilitas);
        $fasilitas->alquran = $request->alquran;
        $fasilitas->mukenah = $request->mukenah;
        $fasilitas->sajadah = $request->sajadah;
        $fasilitas->tempat_wudhu = $request->tempat_wudhu;
        $fasilitas->kain_kafan = $request->kain_kafan;
        $fasilitas->keranda = $request->keranda;
        $fasilitas->ambulans = $request->ambulans;
        $fasilitas->update();

        return redirect('/fasilitas')->with('pesan', 'Data Fasilitas Telah Diupdate');
    }



    public function destroy($id)
    {
        $fasilitas = Fasilitas::find($id);
        $fasilitas->delete();
        return redirect('/fasilitas')->with('pesan', 'Data Berhasil Delete');
    }


    public function detailfasilitas($id)
    {
        $fasilitas = Fasilitas::find($id);

        return view('admin.fasilitas.detail', compact('fasilitas'));
    }
}
