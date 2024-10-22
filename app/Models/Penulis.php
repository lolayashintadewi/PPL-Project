<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'buku_id', // Ini mengacu pada id buku (pastikan benar di database)
    ];

    // Relasi one-to-many, jika Penulis memiliki banyak Surat
    public function surat()
    {
        return $this->hasMany(Surat::class); // Gunakan hasMany jika 1 penulis bisa punya banyak surat
    }

}
