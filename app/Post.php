<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $guarded = [];

    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }
}
