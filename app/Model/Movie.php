<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Auth;

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
    public function watchListByUser()
    {
        return $this->hasMany(WatchList::class,'movie_id','id');
    }
    public function seasons()
    {
        return $this->hasMany(Season::class);
    }
    public function posters()
    {
        return $this->hasMany(MovieImage::class);
    }

    public function movieGenre()
    {
        return $this->hasMany(MovieGenre::class,'movie_id','id');
    }
    public function movieComments()
    {
        return $this->hasMany(MovieComments::class,'movie_id','id')->where('comment_id',Null)->orderBy('id','desc');
    }
    public function movieRates()
    {
        return $this->hasMany(MovieRates::class,'movie_id','id')->where('like',1);
    }
    public function movieRateDisLikes()
    {
        return $this->hasMany(MovieRates::class,'movie_id','id')->where('like',0);
    }
    public static function boot() {
        parent::boot();
        self::deleting(function($movie) { // before delete() method call this
            $movie->movieGenre()->each(function($genre) {
                $genre->delete();
            });
            $movie->watchListByUser()->each(function($watchList) {
                $watchList->delete();
            });
           $movie->seasons()->each(function($season) {
                $season->delete();
            });
           $movie->posters()->each(function($poster) {
                $poster->delete();
            });
           $movie->movieComments()->each(function($comment) {
                $comment->delete();
            });
           $movie->movieRates()->each(function($rate) {
                $rate->delete();
            });
            $movie->movieRateDisLikes()->each(function ($rate) {
                $rate->delete();
            });

        });
    }
}
