<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class MapsModel extends Model
{

    public function DataKategory()
    {
        return DB::table('kategori')->get();
    }



    // menampilkan data masjid
    public function AllDataMasjid()
    {
        return DB::table('masjids')
            ->join('kategori', 'kategori.id', '=', 'masjids.id_kategory')
            ->join('bank', 'bank.id', '=', 'masjids.id_bank')
            ->join('infaq', 'infaq.id', '=', 'masjids.id_infaq')
            ->get();
    }

    public function DetailDataMasjid($id_masjid)
    {
        return DB::table('tbl_masjid')
            ->join('tbl_kategory', 'tbl_kategory.id_kategory', '=', 'tbl_masjid.id_kategory')
            ->join('tbl_kelurahan', 'tbl_kelurahan.id_kelurahan', '=', 'tbl_masjid.id_kelurahan')
            ->where('id_masjid', $id_masjid)
            ->first();
    }
}
