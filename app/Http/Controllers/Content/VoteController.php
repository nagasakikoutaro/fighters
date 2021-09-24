<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{
    public function vote(Request $request){
        $user_id = Auth::user()->id;
        $player_id = $request->player_id;
    }
}
