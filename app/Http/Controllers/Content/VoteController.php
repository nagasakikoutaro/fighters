<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Vote;

class VoteController extends Controller
{
     public function add()
    {
        return view('content.vote.vote');
    }
    public function create(Request $request){
        $this->validate($request, Vote::$rules);
        $player_id = new Vote;
        $form = $request->all();
        $player_id->fill($form);
        $player_id->save();
        
        return redirect('content/vote');
    }
    public function vote(Request $request){
        $user_id = Auth::user()->id;
        $player_id = $request->player_id;
        $this->validate($request, Vote::$rules);
        $player_id = new Vote;
        $form = $request->all();
        $player_id->fill($form);
        $player_id->save();
        return redirect('content/vote');
        
        
    }
}
