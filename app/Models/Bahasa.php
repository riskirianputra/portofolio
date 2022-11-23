<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Bahasa extends Model
{
    protected $table = 'bahasa';

    protected $fillable = [
        'bahasa_program',     
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
    	return $this->hasMany(Project::class, 'id_bahasa', 'id');
    }   
}
