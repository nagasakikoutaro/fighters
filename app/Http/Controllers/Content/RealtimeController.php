<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RealtimeController extends Controller
{
    //
     public function add()
    {
        return view('admin.realtime.create');
    }
    public function create()
    {
        return view('admin/realtime/create');
    }
    public function edit()
    {
        return view('admin.realtime.edit');
    }
    public function update()
    {
        return view('admin/realtime/edit');
    }
}
