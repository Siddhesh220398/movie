<?php

namespace App\Modal;

use Illuminate\Database\Eloquent\Model;

class MovieImage extends Model
{
    protected $guarded = ['id'];
    public function movie()
    {
        return $this->belongsTo(Movie::class,'movie_id','id');
    }
}
