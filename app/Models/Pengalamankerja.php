<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengalamankerja extends Model
{
    protected $table = 'pengalaman_kerja';

    protected $fillable = [  
        'nama_perusahaan',
        'jabatan',
        'kota',
        'tanggal_mulai',
        'tanggal_berakhir',
       
    ];
}
