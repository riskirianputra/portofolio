<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    protected $table = 'pendidikan';

    protected $fillable = [
        'nama_sekolah',
        'jurusan',
        'kota',
        'tanggal_lulus',               
    ];
}
