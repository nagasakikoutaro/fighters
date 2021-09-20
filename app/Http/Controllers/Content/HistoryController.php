<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HistoryController extends Controller
{
    //
    public function add()
    {
        return view('content.history.create');
    }
    public function create(Request $request)
    {
        return redirect('content/history/create');
    }
    public function edit()
    {
        return view('content.history.edit');
    }
    public function update()
    {
        return view('content/history/edit');
    }
}
