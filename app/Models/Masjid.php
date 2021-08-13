<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Masjid extends Model
{
    protected $table = 'masjid';
    // foreign key

    protected $fillable = ['id',  'id_infaq', 'id_bank', 'id_kategory', 'nama_masjid', 'alamat', 'posisi', 'petunjuk_arah', 'peta', 'kapasitas', 'luas'];

    public function DataMasjid()
    {
        return DB::table('masjid')->get();
    }

    public function GetMasjid()
    {
        return DB::table('kategori')
            ->select('kategori.id', 'kategori.kategori', DB::raw("count(tbl_masjid.id_masjid) as jml"))
            ->join('tbl_masjid', 'tbl_masjid.id_kategory', '=', 'kategori.id_kategory')
            ->groupBy('kategori.id_kategory', 'kategori.kategori')
            ->get();
    }

    // * Detail data
    public function AllData()
    {
        return DB::table('masjid')
            ->join('kategori', 'kategori.id_kategory', '=', 'masjid.id_kategory')
            ->join('bank', 'bank.id_bank', '=', 'masjid.id_bank')
            ->join('infaq', 'infaq.id_infaq', '=', 'masjid.id_infaq')

            ->get();
    }


    // Detail Data
    public function DetailData($id)
    {
        return DB::table('masjid')
            ->join('kategori', 'kategori.id_kategory', '=', 'masjid.id_kategory')
            ->join('bank', 'bank.id_bank', '=', 'masjid.id_bank')
            ->join('infaq', 'infaq.id_infaq', '=', 'masjid.id_infaq')
            ->where('id', $id)->first();
    }

    // update database
    public function UpdateData($id, $data)
    {
        DB::table('masjid')
            ->join('kategori', 'kategori.id_kategory', '=', 'masjid.id_kategory')
            ->join('fasilitas', 'fasilitas.id', '=', 'masjid.id_fasilitas')
            ->join('bank', 'bank.id_bank', '=', 'masjid.id_bank')
            ->join('pengurus', 'pengurus.id', '=', 'masjid.id_pengurus')
            ->join('infaq', 'infaq.id_infaq', '=', 'masjid.id_infaq')
            ->where('id', $id)
            ->update($data);
    }

    // * insert data
    public function InsertData($data)
    {
        DB::table('masjid')->insert($data);
    }

    public function DeleteData($id)
    {
        DB::table('masjid')
            ->where('id', $id)
            ->delete();
    }


    // ! relasi tabel

    public function fasilitas()
    {
        return $this->hasMany(Fasilitas::class);
    }

    public function kegiatan()
    {
        return $this->hasMany(Kegiatan::class);
    }
    public function pengurus()
    {
        return $this->hasMany(Pengurus::class);
    }
    public function infaq()
    {
        return $this->belongsTo(InfaqModel::class,'id_infaq');
    }

    public function bank()
    {
        return $this->belongsTo(BankModel::class,'id_bank');
    }

    public function kategory()
    {
        return $this->belongsTo(KategoryModel::class,'id_kategory');
    }
}
