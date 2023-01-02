<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MovieGenre extends Model
{
    protected $guarded =['id'];

    public function genre()
    {
        return $this->belongsTo(Genre::class,'genre_id','id');
    }
}
