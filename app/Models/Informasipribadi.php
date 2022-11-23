<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasipribadi extends Model
{
    protected $table = 'informasi_pribadi';

    protected $fillable = [
        'profesi',
        'nama_depan',
        'nama_belakang',
        'email',
        'no_hp',
        'alamat',
        'photo',
       
    ];
}
