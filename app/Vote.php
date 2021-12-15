<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'player_id' => 'required',
    );
     public function player(){
        return $this->belongsTo('App\Player');
    }
}
