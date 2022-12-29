<?php

namespace App\Modal;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $guarded = ['id'];

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }
}
