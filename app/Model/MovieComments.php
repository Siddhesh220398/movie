<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MovieComments extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function subComments()
    {
        return $this->hasMany(MovieComments::class,'comment_id','id');
    }
}
