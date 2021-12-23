<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'votepage_id' => 'required'
    );
     public function votepage(){
        return $this->belongsTo('App\Votepage');
    }
}
