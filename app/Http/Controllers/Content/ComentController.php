<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComentController extends Controller
{
     public function add()
  {
      return view('content.coment.create');
  }
   public function create(Request $request)
  {
      
      return redirect('content/coment/create');
  }  
}
