<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RealtimeController extends Controller
{
    //
     public function add()
    {
        return view('content.realtime.create');
    }
    public function create()
    {
        return view('content/realtime/create');
    }
    public function edit()
    {
        return view('content.realtime.edit');
    }
    public function update()
    {
        return view('content/realtime/edit');
    }
}
