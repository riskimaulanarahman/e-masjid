<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengurus;
use App\Models\Masjid;
use Illuminate\Support\Facades\DB;

class PengurusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        $pengurus = Pengurus::all();
        return view('admin.pengurus.index', compact('pengurus'));
    }
    public function insert()
    {
        $masjid     = Masjid::all();
        $pengurus = Pengurus::all();
        return view('admin.pengurus.insert', compact('pengurus', 'masjid'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'thn_kepengurusan'       => 'required',
            'dewan_pembina'       => 'required',
            'ketua'       => 'required',
            'sekertaris'  => 'required',
            'bendahara'       => 'required',
            'seksi_ibadah'    => 'required',
            'seksi_sarana'       => 'required',
            'seksi_pembinawanita'      => 'required',
            'seksi_pemuda'      => 'required',
            'seksi_fadhukifayah'      => 'required',
            'seksi_zakat'      => 'required',
            'seksi_qurban'      => 'required',
        ]);

        DB::table('pengurus')->insert([
            'thn_kepengurusan' => $request->thn_kepengurusan,
            'dewan_pembina' => $request->dewan_pembina,
            'ketua' => $request->ketua,
            'sekertaris' => $request->sekertaris,
            'bendahara' => $request->bendahara,
            'seksi_ibadah' => $request->seksi_ibadah,
            'seksi_sarana' => $request->seksi_sarana,
            'seksi_pembinawanita' => $request->seksi_pembinawanita,
            'seksi_pemuda' => $request->seksi_pemuda,
            'seksi_fadhukifayah' => $request->seksi_fadhukifayah,
            'seksi_zakat' => $request->seksi_zakat,
            'seksi_qurban' => $request->seksi_qurban,
            'masjid_id' => $request->masjid_id,
        ]);

        return redirect('pengurus')->with('pesan', 'Data Pengurus telah ditembahkan');
    }


    public function edit($id)
    {
        $pengurus = Pengurus::find($id);
        $masjid = Masjid::all();
        return view('admin.pengurus.edit', compact('pengurus', 'masjid'));
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'thn_kepengurusan'       => 'required',
            'dewan_pembina'       => 'required',
            'ketua'       => 'required',
            'sekertaris'  => 'required',
            'bendahara'       => 'required',
            'seksi_ibadah'    => 'required',
            'seksi_sarana'       => 'required',
            'seksi_pembinawanita'      => 'required',
            'seksi_pemuda'      => 'required',
            'seksi_fadhukifayah'      => 'required',
            'seksi_zakat'      => 'required',
            'seksi_qurban'      => 'required',
        ]);


        $pengurus = Pengurus::find($id);
        $pengurus->thn_kepengurusan = $request->thn_kepengurusan;
        $pengurus->dewan_pembina = $request->dewan_pembina;
        $pengurus->ketua = $request->ketua;
        $pengurus->sekertaris = $request->sekertaris;
        $pengurus->bendahara = $request->bendahara;
        $pengurus->seksi_ibadah = $request->seksi_ibadah;
        $pengurus->seksi_sarana = $request->seksi_sarana;
        $pengurus->seksi_pembinawanita = $request->seksi_pembinawanita;
        $pengurus->seksi_pemuda = $request->seksi_pemuda;
        $pengurus->seksi_fadhukifayah = $request->seksi_fadhukifayah;
        $pengurus->seksi_zakat = $request->seksi_zakat;
        $pengurus->seksi_qurban = $request->seksi_qurban;
        $pengurus->update();

        return redirect('/pengurus')->with('pesan', 'Data Pengurus Telah Diupdate');
    }



    public function destroy($id)
    {
        $pengurus = Pengurus::find($id);
        $pengurus->delete();
        return redirect('/pengurus')->with('pesan', 'Data Berhasil Delete');
    }


    public function detailpengurus($id)
    {
        $pengurus = Pengurus::find($id);

        return view('admin.pengurus.detail', compact('pengurus'));
    }
}
