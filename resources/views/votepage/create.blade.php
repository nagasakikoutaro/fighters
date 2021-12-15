{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.favorite')


{{-- history.blade.phpの@yield('title')に'思い出'を埋め込む --}}
@section('title', '投稿ページ作成')

{{-- history.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>投票ページ作成</h2>
                 <form action="/votepage/create" method="post" enctype="multipart/form-data">
                     @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                      <label class="col-md-2">ニックネーム</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                      </div>
                    </div>
                    <div class="form-group row">
                       <label class="col-md-2">タイトル</label>
                          <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                          </div>
                    </div>
                    <button type='submit' name='player_id' value='1'>斎藤　佑樹　選手</button>
                    <button type='submit' name='player_id' value='2'>生田目　翼　選手</button>
                    <button type='submit' name='player_id' value='3'>加藤 貴之　選手</button>
                    <button type='submit' name='player_id' value='4'>上沢 直之　選手</button>
                    <button type='submit' name='player_id' value='5'>伊藤　大海　選手</button>
                    <button type='submit' name='player_id' value='6'>吉田　輝星　選手</button>
                    <button type='submit' name='player_id' value='7'>金子　弌大　選手</button>
                    <button type='submit' name='player_id' value='8'>上原　健太　選手</button>
                    <button type='submit' name='player_id' value='9'>宮西　尚生　選手</button>
                    <button type='submit' name='player_id' value='10'>河野　竜生　選手</button>
                    <button type='submit' name='player_id' value='11'>井口　和朋　選手</button>
                    <button type='submit' name='player_id' value='12'>村田　透　選手</button>
                    <button type='submit' name='player_id' value='13'>立野　和明　選手</button>
                    <button type='submit' name='player_id' value='14'>堀　瑞輝　選手</button>
                    <button type='submit' name='player_id' value='15'>西村　天裕　選手</button>
                    <button type='submit' name='player_id' value='16'>バーヘイゲン　選手</button>
                    <button type='submit' name='player_id' value='17'>柿木　蓮　選手</button>
                    <button type='submit' name='player_id' value='18'>秋吉　亮　選手</button>
                    <button type='submit' name='player_id' value='19'>福田　俊　選手</button>
                    <button type='submit' name='player_id' value='20'>B.ロドリゲス　選手</button>
                    <button type='submit' name='player_id' value='21'>長谷川　凌汰　選手</button>
                    <button type='submit' name='player_id' value='22'>アーリン　選手</button>
                    <button type='submit' name='player_id' value='23'>田中　瑛斗　選手</button>
                    <button type='submit' name='player_id' value='24'>鈴木　健矢　選手</button>
                    <button type='submit' name='player_id' value='25'>石川　直也　選手</button>
                    <button type='submit' name='player_id' value='26'>池田　隆英　選手</button>
                    <button type='submit' name='player_id' value='27'>玉井　大翔　選手</button>
                    <button type='submit' name='player_id' value='28'>杉浦　稔大　選手</button>
                    <button type='submit' name='player_id' value='29'>谷川　昌希　選手</button>
                    <button type='submit' name='player_id' value='30'>根本　悠楓　選手</button>
                    <button type='submit' name='player_id' value='31'>望月　大希　選手</button>
                    <button type='submit' name='player_id' value='32'>北浦　竜次　選手</button>
                    <button type='submit' name='player_id' value='33'>松本　遼大　選手</button>
                    <button type='submit' name='player_id' value='34'>齋藤　伸治　選手</button>
                    <button type='submit' name='player_id' value='35'>高山　優希　選手</button>
                    <button type='submit' name='player_id' value='36'>鈴木　遼太郎　選手</button>
                    <button type='submit' name='player_id' value='37'>姫野　優也　選手</button>
                    <button type='submit' name='player_id' value='38'>杉谷　拳士　選手</button>
                    <button type='submit' name='player_id' value='39'>王　柏融　選手</button>
                    <button type='submit' name='player_id' value='40'>谷口　雄也　選手</button>
                    <button type='submit' name='player_id' value='41'>大田　泰示　選手</button>
                    <button type='submit' name='player_id' value='42'>西川　遥輝　選手</button>
                    <button type='submit' name='player_id' value='43'>近藤　健介　選手</button>
                    <button type='submit' name='player_id' value='44'>中島　卓也　選手</button>
                    <button type='submit' name='player_id' value='45'>清水　優心　選手</button>
                    <button type='submit' name='player_id' value='46'>松本　剛　選手</button>
                    <button type='submit' name='player_id' value='47'>清宮　幸太郎　選手</button>
                    <button type='submit' name='player_id' value='48'>鶴岡　慎也　選手</button>
                    <button type='submit' name='player_id' value='49'>渡邉　諒　選手</button>
                    <button type='submit' name='player_id' value='50'>野村　祐希　選手</button>
                    <button type='submit' name='player_id' value='51'>淺間　大基　選手</button>
                    <button type='submit' name='player_id' value='52'>古川　裕大　選手</button>
                    <button type='submit' name='player_id' value='53'>宇佐見　真吾　選手</button>
                    <button type='submit' name='player_id' value='54'>谷内　亮太　選手</button>
                    <button type='submit' name='player_id' value='55'>石井　一成　選手</button>
                    <button type='submit' name='player_id' value='56'>木村　文紀　選手</button>
                    <button type='submit' name='player_id' value='57'>上野　響平　選手</button>
                    <button type='submit' name='player_id' value='58'>佐藤　龍世　選手</button>
                    <button type='submit' name='player_id' value='59'>五十幡　亮汰　選手</button>
                    <button type='submit' name='player_id' value='60'>R.ロドリゲス　選手</button>
                    <button type='submit' name='player_id' value='61'>難波　侑平　選手</button>
                    <button type='submit' name='player_id' value='62'>細川　凌平　選手</button>
                    <button type='submit' name='player_id' value='63'>郡　拓也　選手</button>
                    <button type='submit' name='player_id' value='64'>今川　優馬　選手</button>
                    <button type='submit' name='player_id' value='65'>田宮　裕涼　選手</button>
                    <button type='submit' name='player_id' value='66'>梅林　優貴　選手</button>
                    <button type='submit' name='player_id' value='67'>万波　中正　選手</button>
                    <button type='submit' name='player_id' value='68'>片岡　奨人　選手</button>
                    <button type='submit' name='player_id' value='69'>石川　亮　選手</button>
                    <button type='submit' name='player_id' value='70'>宮田　輝星　選手</button>
                    <button type='submit' name='player_id' value='71'>今井　順之助　選手</button>
                    <button type='submit' name='player_id' value='72'>髙濱　祐仁　選手</button>
                    <button type='submit' name='player_id' value='73'>樋口　龍之介　選手</button>
                    <button type='submit' name='player_id' value='74'>海老原　一佳　選手</button>
                      {{ csrf_field() }}
                     <input type="submit" class="btn btn-primary" value="投稿">
                </form>
            </div>
        </div>
    </div>
@endsection