<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Fasilitas extends Model
{
    protected $table = 'fasilitas';

    protected $fillable = ['id', 'masjid_id', 'alquran', 'mukenah', 'sajadah', 'tempat_wudhu', 'keranda', 'kain_kafan', 'ambulans'];

    public function AllData()
    {
        return DB::table('fasilitas')->get();
    }

    public  function Masjid()
    {
        return $this->belongsTo(Masjid::class);
    }
}
