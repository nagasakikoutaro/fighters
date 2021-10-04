<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Favorite;
use App\Player;

class FavoriteController extends Controller
{
    public function add()
  {
      return view('content.favorite.vote');
  }
  
  public function create()
    {
        return redirect();
    }

    public function edit()
    {
        return view('content.favorite.edit');
    }

    public function update()
    {
        return redirect('content/favorite/edit');
    }
    public function vote (Request $request){
        $user_id = Auth::user()->id;
        $player_id = $request->player_id;

        $favorite = new Favorite;
        $form = $request->all();
        $favorite->fill($form);
        $favorite->save();
        
        return redirect('content/favorite/vote');
     }
     
    public function result (Request $request){
        
        $favorites = Player::find(1);
        $player= $favorites-> players();
    
    

        $voteCounts = $favorites->countBy(function ($favorite) {
            return $favorite->players()->name;
       });

        dd($voteCounts);
        return view('content/favorite/result');
    }
}
