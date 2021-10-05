<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TodayplayercomentController extends Controller
{
      public function add()
  {
      return view('content.todaycoment.create');
  }
}
