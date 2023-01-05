<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $guarded = ['id'];

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }
    public function movie()
    {
        return $this->belongsTo(Movie::class,'movie_id','id');
    }
}
