<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExpectplayercomentController extends Controller
{
      public function add()
  {
      return view('content.expectcoment.create');
  }
   public function create(Request $request)
  {
     
      return redirect('content/expectcoment/create');
  }  
}
