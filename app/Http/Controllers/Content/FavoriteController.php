<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return redirect('content/favorite/vote');
    }
}
