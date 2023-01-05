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
    public static function boot() {
        parent::boot();
        self::deleting(function($movie) { // before delete() method call this
            $movie->episodes()->each(function($episode) {
                $episode->delete();
            });

        });
    }

}
