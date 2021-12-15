<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $table = 'players';
  
     public function vote(){
        return $this->belongsTo('App\Vote');
    }
}
