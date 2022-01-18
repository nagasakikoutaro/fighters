<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Vote;
use App\Player;
use App\Votepage;

class VoteController extends Controller
{
    public function vote (Request $request){
    //投票内容を保存する
        $vote = new Vote;
        $form = $request->all();
        $vote->fill($form);
        $vote->save();
        return redirect('/');
     }
     
    public function result (Request $request){
        //選手ごとの投票数を表示できるようにしたい
      $votepage_id= $request->input('id');
      $votes = DB::table('votes')
      ->select('votepage_id', 'name', DB::raw("count(name) as count"))
      ->groupBy('votepage_id','name')->having('votepage_id','=', $votepage_id)
      ->get();
      return view('vote/result',['votes'=>$votes]);
    }
}