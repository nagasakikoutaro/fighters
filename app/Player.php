<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
  
    public function favorite(){
    return $this->belongsTo('App\Favorite');
}
    //
}
