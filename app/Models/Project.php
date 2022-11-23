<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';

    protected $fillable = [
        'id_bahasa',
        'id_aplikasi',
        'img',    
        'img2', 
        'img3', 
        'img4',  
        'img5',          
        'keterangan',    
    ];

    public function bahasa()
    {
    	return $this->belongsTo( 'App\Models\bahasa', 'id_bahasa','id');
    }     

    public function aplikasi()
    {
    	return $this->belongsTo( 'App\Models\aplikasi', 'id_aplikasi','id');
    }     

    public function getRouteKeyName()
    {
        return 'keterangan';
    }
}
