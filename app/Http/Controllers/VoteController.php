<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vote;

class VoteController extends Controller
{
    public function vote (Request $request){
        $player_id = $request->player_id;

        $vote = new Vote;
        $form = $request->all();
        $vote->fill($form);
        $vote->save();
        
        return redirect('/');
     }
     
    public function result (Request $request){
        //選手ごとの投票数を表示できるようにしたい
      $favorites = Favorite::all();
    
    
       $voteCounts = $favorites->countBy(function ($favorite) {
            return $favorite->player->name;
       });
        return view('content/favorite/result',compact('voteCounts'));
    }
}
