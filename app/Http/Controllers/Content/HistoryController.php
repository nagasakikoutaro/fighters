<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\History;
class HistoryController extends Controller
{
    //
    public function add()
    {
        return view('content.history.create');
    }
    public function create(Request $request)
    {
        //validationを行う
        $this->validate($request, History::$rules);
        $history = new History();
        $form = $request->all();
        
        //formに画像があれば、保存する
        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $history->image_path = basename($path);
        } else {
            $history->image_path = null;
        }    
        
        unset($form['_token']);
        unset($form['image']);
        //データベースに保存
        $history->fill($form);
        $history->save();
        
        return redirect('content/history/create');
    }
    
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            //検索されたら検索結果を取得する
            $posts = History::where('title', $cond_title)->get();
        } else {
            //それ以外はすべてのヒストリーを取得する
            $posts = History::all();
        }
        return view('content.history.index',['posts' => $posts, 'cond_title' => $cond_title]);
    }
    public function edit(Request $request)
    {
        $history = History::find($request->id);
      if (empty($history)) {
        abort(404);    
      }
      return view('content.history.edit', ['history_form' => $history]);
    }
    public function update(Request $request)
    {
        // Validationをかける
      $this->validate($request, History::$rules);
      // kitahirosima Modelからデータを取得する
      $history = History::find($request->id);
      // 送信されてきたフォームデータを格納する
        $history_form = $request->all();
      if ($request->remove == 'true') {
          $history_form['image_path'] = null;
      } elseif ($request->file('image')) {
          $path = $request->file('image')->store('public/image');
          $history_form['image_path'] = basename($path);
      } else {
          $history_form['image_path'] = $history->image_path;
      }

      unset($history_form['image']);
      unset($history_form['remove']);
      unset($history_form['_token']);
      // 該当するデータを上書きして保存する
      $history->fill($history_form)->save();

        return view('content/history');
    }
}
