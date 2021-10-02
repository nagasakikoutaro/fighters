{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.favorite')


{{-- history.blade.phpの@yield('title')に'思い出'を埋め込む --}}
@section('title', '投票結果')

{{-- history.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>投票結果！</h2>
                 <form action="/favorite/result" method="post" enctype="multipart/form-data">
                    <ul>
                    <li>斎藤　佑樹　選手 ""票 </li>
                    <li>生田目　翼　選手　""票</li>
                    <li>加藤　貴之　選手　""票</li>
                    <li>上沢　直之　選手　""票</li>
                    <li>伊藤　大海　選手　""票</li>
                    <li>吉田　輝星　選手　""票</li>
                    <li>金子　弌大　選手　""票</li>
                    <li>上原　健太　選手　""票</li>
                　　<li>宮西　尚生　選手　""票</li>
                　　<li>河野　竜生　選手　""票</li>
                　　<li>井口　和朋　選手　""票</li>
                　　<li>村田　透　選手　""票</li>
                    <li>立野　和明　選手　""票</li>
                    <li>堀　瑞輝　選手　""票</li>
                    <li>西村　天裕　選手　""票</li>
                    <li>バーヘイゲン　選手　""票</li>
                    <li>柿木　蓮　選手　""票</li>
                    <li>秋吉　亮　選手　""票</li>
                    <li>福田　俊　選手　""票</li>
                    <li>B.ロドリゲス　選手　""票</li>
                    <li>長谷川　凌汰　選手　""票</li>
                    <li>アーリン　選手　""票</li>
                    <li>田中　瑛斗　選手　""票</li>
                    <li>鈴木　健矢　選手　""票</li>
                    <li>石川　直也　選手　""票</li>
                    <li>池田　隆英　選手　""票</li>
                    <li>玉井　大翔　選手　""票</li>
                    <li>杉浦　稔大　選手　""票</li>
                    <li>谷川　昌希　選手　""票</li>
                    <li>根本　悠楓　選手　""票</li>
                    <li>望月　大希　選手　""票</li>
                    <li>北浦　竜次　選手　""票</li>
                    <li>松本　遼大　選手　""票</li>
                    <li>齋藤　伸治　選手　""票</li>
                    <li>高山　優希　選手　""票</li>
                    <li>鈴木　遼太郎　選手　""票</li>
                    <li>姫野　優也　選手　""票</li>
                    <li>杉谷　拳士　選手　""票</li>
                    <li>王　柏融　選手　""票</li>
                    <li>谷口　雄也　選手　""票</li>
                　　<li>大田　泰示　選手　""票</li>
                    <li>西川　遥輝　選手　""票</li>
                    <li>近藤　健介　選手　""票</li>
                    <li>中島　卓也　選手　""票</li>
                    <li>清水　優心　選手　""票</li>
                    <li>松本　剛　選手　""票</li>
                    <li>清宮　幸太郎　選手　""票</li>
                    <li>鶴岡　慎也　選手　""票</li>
                    <li>渡邉　諒　選手　""票</li>
                    <li>野村　祐希　選手　""票</li>
                　　<li>淺間　大基　選手　""票</li>
                    <li>古川　裕大　選手　""票</li>
                    <li>宇佐見　真吾　選手　""票</li>
                    <li>谷内　亮太　選手　""票</li>
                    <li>石井　一成　選手　""票</li>
                    <li>木村　文紀　選手　""票</li>
                    <li>上野　響平　選手　""票</li>
                    <li>佐藤　龍世　選手　""票</li> 
                    <li>五十幡　亮汰　選手　""票</li>
                    <li>R.ロドリゲス　選手　""票</li>
                    <li>難波　侑平　選手　""票</li> 
                    <li>細川　凌平　選手　""票</li>
                    <li>郡　拓也　選手　""票</li>
                    <li>今川　優馬　選手　""票</li> 
                    <li>田宮　裕涼　選手　""票</li> 
                    <li>梅林　優貴　選手　""票</li> 
                    <li>万波　中正　選手　""票</li> 
                    <li>片岡　奨人　選手　""票</li>
                    <li>石川　亮　選手　""票</li>
                    <li>宮田　輝星　選手　""票</li>
                    <li>今井　順之助　選手　""票</li>
                    <li>髙濱　祐仁　選手　""票</li>
                    <li>樋口　龍之介　選手　""票</li>
                    <li>海老原　一佳　選手　""票</li>
                    </ul>
                      {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
@endsection