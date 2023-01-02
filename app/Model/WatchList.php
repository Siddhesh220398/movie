<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Auth;

class WatchList extends Model
{
    protected $guarded = ['id'];

    public function movies()
    {
        return $this->belongsTo(Movie::class,'movie_id','id');
    }

}
