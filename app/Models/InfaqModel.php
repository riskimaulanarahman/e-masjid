<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class InfaqModel extends Model
{
    protected $table = 'infaq';
    protected $primaryKey = 'id_infaq';


    // foreign key

    protected $fillable = ['atasnama_rek', 'no_rek'];
    public function AllData()
    {
        return DB::table('infaq')->get();
    }
    // insert
    public function InsertData($data)
    {
        DB::table('infaq')->insert($data);
    }
}
