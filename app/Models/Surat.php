<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;

    protected $table = "surat";

    protected $fillable = [
        "nomor_surat",
        "jenis_surat",
        "pengirim",
        "penerima",
        "tanggal_surat",
        "tanggal_terima",
        "perihal",
        "lampiran",
        "status",
        "detail_id",
    ];

    // Relasi ke tabel Detail
    public function details()
    {
        return $this->belongsTo(Detail::class); // Corrected from 'detail' to 'Detail'
    }

    // Relasi ke model Penulis
    public function penulis()
    {
        return $this->hasMany(Penulis::class); // Penulis memiliki banyak Surat
    }
}
