<?php

namespace App\Modal;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded = ['id'];
    public function genre()
    {
        return $this->belongsTo(Genre::class,'genre_id','id');
    }
    public function country()
    {
        return $this->belongsTo(Country::class,'country_id','id');
    }
    public function type()
    {
        return $this->belongsTo(Type::class,'type_id','id');
    }
    public function year()
    {
        return $this->belongsTo(Year::class,'year_id','id');
    }
    public function seasons()
    {
        return $this->hasMany(Season::class);
    }
    public function posters()
    {
        return $this->hasMany(MovieImage::class);
    }


}
