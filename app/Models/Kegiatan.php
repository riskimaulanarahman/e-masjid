<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';
    protected $fillable = ['id', 'masjid_id', 'jam_mg', 'hari_mg', 'tgl_mg', 'tema_mg', 'penceramah_mg', 'jam_bln', 'hari_bln', 'tgl_bln', 'tema_bln', 'penceramah_bln'];

    public  function Masjid()
    {
        return $this->belongsTo(Masjid::class);
    }
}
