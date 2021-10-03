<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public function favorites(){
    return $this->hasMany('App\Favorite');
}
    //
}
