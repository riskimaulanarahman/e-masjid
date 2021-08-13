<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    protected $table = 'pengurus';

    protected $fillable = ['id', 'thn_kepengurusan', 'dewan_pembina', 'ketua', 'sekertaris', 'bendahara', 'seksi_ibadah', 'seksi_sarana', 'seksi_pembinawanita', 'seksi_pemuda', 'seksi_fadhukifayah', 'seksi_zakat', 'seksi_qurban', 'masjid_id',];

    public  function Masjid()
    {
        return $this->belongsTo(Masjid::class);
    }
}
