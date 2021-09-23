<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Kitahirosima;
class KitahirosimaController extends Controller
{
    //
     public function add()
    {
        return view('content.kitahirosima.create');
    }
    public function create(Request $request)
    {
        //validationを行う
        $this->validate($request, Kitahirosima::$rules);
        $kitahirosima = new Kitahirosima();
        $form = $request->all();
        
        //formに画像があれば保存する
        if(isset($form['image'])){
            $path = $request->file('image')->store('public/image');
            $kitahirosima->image_path = basename($path);
        } else {
            $kitahirosima->image_path = null;
        }
        
        unset($form['_token']);
        unset($form['image']);
        //データベースに保存
        $kitahirosima->fill($form);
        $kitahirosima->save();
        return redirect('content/kitahirosima/create');
    }
    
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            //検索されたら検索結果を習得する
            $posts = Kitahirosima::where('title', $cond_title)->get();
        }else{
            //それ以外はすべての情報を習得する
            $posts = Kitahirosima::all();
        }
        return view('content.kitahirosima.index',['posts' => $posts, 'cond_title' => $cond_title]);
    }
    public function edit()
    {
        // Kitahirosima Modelからデータを取得する
      $news = Kitahirosima::find($request->id);
      if (empty($kitahirosima)) {
        abort(404);    
      }
        return view('content.kitahirosima.edit',['kitahirosima_form' => $kitahirosima]);
    }
    public function update()
    {
        // Validationをかける
      $this->validate($request, Kitahirosima::$rules);
      // kitahirosima Modelからデータを取得する
      $news = Kitahirosima::find($request->id);
      // 送信されてきたフォームデータを格納する
        $kitahirosima_form = $request->all();
      if ($request->remove == 'true') {
          $kitahirosima_form['image_path'] = null;
      } elseif ($request->file('image')) {
          $path = $request->file('image')->store('public/image');
          $kitahirosima_form['image_path'] = basename($path);
      } else {
          $kitahirosima_form['image_path'] = $kitahirosima->image_path;
      }

      unset($kitahirosima_form['image']);
      unset($kitahirosima_form['remove']);
      unset($kitahirosima_form['_token']);
      // 該当するデータを上書きして保存する
      $kitahirosima->fill($kitahirosima_form)->save();
        return redirect('content/kitahirosima/');
    }
}
