<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'player_id'=> 'required',
    );
    public function players()
    {
        return $this->hasMany('App\Player');
    }
}
