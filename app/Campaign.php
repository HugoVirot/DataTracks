<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    //

    public static function find(Campaign $campaign)
    {
    }

    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
