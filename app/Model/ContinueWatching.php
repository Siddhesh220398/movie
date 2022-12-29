<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ContinueWatching extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function movie()
    {
        return $this->belongsTo(Movie::class,'movie_id','id');
    }
}
