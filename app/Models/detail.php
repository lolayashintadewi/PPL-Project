<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
    ];

    // One to one relationship
    public function surat()
    {
        return $this->hasOne(Surat::class);
    }

    // Uncomment if you need a one-to-many relationship
    // public function surats()
    // {
    //     return $this->hasMany(Surat::class);
    // }
}
