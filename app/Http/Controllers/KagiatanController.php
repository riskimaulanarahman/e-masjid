<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Models\KegiatanModel;
use App\Models\Masjid;
use Illuminate\Support\Facades\DB;

class KagiatanController extends Controller
{

    public function __construct()
    {
        $this->Kegiatan = new Kegiatan();
        $this->Masjid       = new Masjid();
    }
    public function index()
    {
        $kegiatan = Kegiatan::all();
        return view('admin.kegiatan.index', compact(['kegiatan']));
    }

    public function insert()
    {
        $masjid = Masjid::all();
        return view('admin.kegiatan.insert', compact(['masjid']));
    }

    public function store(Request $request)
    {

        $pesan = [
            'required' => ':attribute wajib di isi'
        ];
        $this->validate($request, [
            'hari_mg' => 'required',
            'tgl_mg' => 'required',
            'tema_mg' => 'required',
            'penceramah_mg' => 'required',
            'hari_bln' => 'required',
            'tgl_bln' => 'required',
            'tema_bln' => 'required',
            'penceramah_bln' => 'required',
            'masjid_id' => 'required',
        ], $pesan);

        DB::table('kegiatan')->insert([
            'hari_mg' => $request->hari_mg,
            'jam_mg' => $request->jam_mg,
            'tgl_mg' => $request->tgl_mg,
            'tema_mg' => $request->tema_mg,
            'penceramah_mg' => $request->penceramah_mg,
            'hari_bln' => $request->hari_bln,
            'tgl_bln' => $request->tgl_bln,
            'jam_bln' => $request->jam_bln,
            'tema_bln' => $request->tema_bln,
            'penceramah_bln' => $request->penceramah_bln,
            'masjid_id' => $request->masjid_id,
        ]);

        return redirect('kegiatan')->with('pesan', 'Data fasilitas telah ditembahkan');
    }

    public function edit($id)
    {

        $kegiatan = Kegiatan::where('id', $id)->first();
        $masjid = Masjid::all();
        return view('admin.kegiatan.edit', compact('kegiatan', 'masjid'));
    }

    public function update(Request $request, $id)
    {
        $pesan = [
            'required' => ':attribute wajib di isi'
        ];
        $this->validate($request, [
            'hari_mg' => 'required',
            'tgl_mg' => 'required',
            'tema_mg' => 'required',
            'penceramah_mg' => 'required',
            'hari_bln' => 'required',
            'tgl_bln' => 'required',
            'tema_bln' => 'required',
            'penceramah_bln' => 'required',
        ], $pesan);
        $kegiatan = Kegiatan::find($id);
        $kegiatan->hari_mg = $request->hari_mg;
        $kegiatan->jam_mg = $request->jam_mg;
        $kegiatan->tgl_mg = $request->tgl_mg;
        $kegiatan->tema_mg = $request->tema_mg;
        $kegiatan->penceramah_mg = $request->penceramah_mg;
        $kegiatan->hari_bln = $request->hari_bln;
        $kegiatan->tgl_bln = $request->tgl_bln;
        $kegiatan->tema_bln = $request->tema_bln;
        $kegiatan->jam_bln = $request->jam_bln;
        $kegiatan->penceramah_bln = $request->penceramah_bln;
        $kegiatan->update();
        return redirect('kegiatan')->with('pesan', 'Data berhasil di ubah');
    }

    public function destroy($id)
    {
        $kegiatan = Kegiatan::find($id);
        $kegiatan->delete();
        return redirect('/kegiatan')->with('pesan', 'Data Berhasil Delete');
    }


    public function detailkegiatan($id)
    {
        $kegiatan = Kegiatan::find($id);

        return view('admin.kegiatan.detail', compact('kegiatan'));
    }
}
