<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HistoryController extends Controller
{
    //
    public function add()
    {
        return view('admin.history.create');
    }
    public function create()
    {
        return view('admin/history/create');
    }
    public function edit()
    {
        return view('admin.history.edit');
    }
    public function update()
    {
        return view('admin/history/edit');
    }
}
