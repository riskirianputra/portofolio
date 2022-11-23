<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Aplikasi extends Model
{
    protected $table = 'aplikasi';

    protected $fillable = [
        'nama_aplikasi',     
        'slug',    
    ];

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value, '-');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function Project()
    {
    	return $this->hasMany(Project::class, 'id_aplikasi', 'id');
    }   
}