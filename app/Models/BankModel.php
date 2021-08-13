<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BankModel extends Model
{
    protected $table = 'bank';

    // foreign key
    protected $primaryKey = 'id_bank';

    protected $fillable = ['kode_bank', 'nama_bank', 'icon'];


    public function AllData()
    {
        return DB::table('bank')->get();
    }

    // insert data
    public function InsertData($data)
    {
        DB::table('bank')->insert($data);
    }

    // Update Data
    // Detail Data
    public function DetailData($id)
    {
        return DB::table('bank')
            ->where('id', $id)->first();
    }

    // update database
    public function UpdateData($id, $data)
    {
        DB::table('bank')
            ->where('id', $id)
            ->update($data);
    }

    // delete data
    public function DeleteData($id)
    {
        DB::table('bank')
            ->where('id', $id)
            ->delete();
    }
}
