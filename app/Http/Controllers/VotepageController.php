<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Votepage;

class VotepageController extends Controller
{
    public function add()
  {
      return view('votepage.create');
  }
  
  public function create(Request $request)
    {
      $this->validate($request, Votepage::$rules);
      $votepage = new Votepage;
      $form = $request->all();
      unset($form['_token']);
      unset($form['image']);
      $votepage->fill($form);
      $votepage->save();
        return redirect('/');
    }

    public function edit(Request $request)
    {
        $votepage = Votepage::find($request->id);
      if (empty($votepage)) {
        abort(404);    
      }
      return view('votepage.edit', ['votepage_form' => $votepage]);
    }

    public function update(Request $request)
    {
      $this->validate($request, Votepage::$rules);
      $votepage = Votepage::find($request->id);
      $votepage_form = $request->all();
      unset($votepage_form['_token']);
      $votepage->fill($votepage_form)->save();
        return redirect('/');
    }
    public function index(Request $request)
  {
      //投稿一覧を作成する
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          
          $posts = Vote::where('title', $cond_title)->get();
      } else {
          
          $posts = Votepage::all();
      }
      return view('votepage.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
  public function delete(Request $request)
  {
      $votepage = Votepage::find($request->id);
      $votepage->delete();
      return redirect('/');
  }  
  public function show(Request $request)
  {
     //個別のページを作成する
      $id = $request->id;
      $votepage = Votepage::findOrFail($id);
     
      return view('votepage.show', [ 'votepage' => $votepage]);
  }
    
}
