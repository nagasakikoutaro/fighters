<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Votepage extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'title' => 'required',
    );
    public function vote(){
        return $this->belongsTo('App\Vote');
    }
}
