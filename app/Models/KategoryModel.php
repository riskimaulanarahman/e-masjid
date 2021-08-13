<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KategoryModel extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategory';

    protected $fillable = ['kategori', 'icon'];
    // menampilkan data
    public function AllData()
    {
        return DB::table('kategori')->get();
    }

    // insert data
    public function InsertData($data)
    {
        DB::table('kategori')->insert($data);
    }

    // Update Data
    // Detail Data
    public function DetailData($id)
    {
        return DB::table('kategori')
            ->where('id_kategory', $id)->first();
    }

    // update database
    public function UpdateData($id, $data)
    {
        DB::table('kategori')
            ->where('id_kategory', $id)
            ->update($data);
    }

    // delete data
    public function DeleteData($id)
    {
        DB::table('kategori')
            ->where('id_kategory', $id)
            ->delete();
    }

    public function Masjid()
    {
        return $this->hasMany('App\Model\Masjid', 'id_kategory', 'id');
    }
}
