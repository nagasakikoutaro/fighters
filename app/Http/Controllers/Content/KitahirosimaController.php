<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KitahirosimaController extends Controller
{
    //
     public function add()
    {
        return view('content.kitahirosima.create');
    }
    public function create()
    {
        return view('content/kitahirosima/create');
    }
    public function edit()
    {
        return view('content.kitahirosima.edit');
    }
    public function update()
    {
        return view('content/kitahirosima/edit');
    }
}
