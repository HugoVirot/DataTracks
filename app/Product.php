<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function campaigns(){
        return $this->belongsToMany(Campaign::class);
    }
}
