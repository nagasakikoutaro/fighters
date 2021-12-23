@extends('layouts.vote')

@section('title', '投稿ページ')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>投票ページ</h2>
                    <div class="name">
                    名前->　{{ str_limit($votepage->name, 150) }}
                    </div>
                    <div class="title">
                    タイトル->  {{ str_limit($votepage->title,150) }}
                    </div>
                <form action="{{ action('VoteController@vote') }}" method="post" enctype="multipart/form-data">
                 @csrf
                   <input type="hidden" class="form-control" name="votepage_id" value="{{  $votepage->id }}">
                    <button type='submit' name='name' value='斎藤　佑樹'>斎藤　佑樹　選手</button>
                    <button type='submit' name='name' value='生田目　翼'>生田目　翼　選手</button>
                    <button type='submit' name='name' value='加藤 貴之'>加藤 貴之　選手</button>
                    <button type='submit' name='name' value='上沢 直之'>上沢 直之　選手</button>
                    <button type='submit' name='name' value='伊藤　大海'>伊藤　大海　選手</button>
                    <button type='submit' name='name' value='吉田　輝星'>吉田　輝星　選手</button>
                    <button type='submit' name='name' value='金子　弌大'>金子　弌大　選手</button>
                    <button type='submit' name='name' value='上原　健太'>上原　健太　選手</button>
                    <button type='submit' name='name' value='宮西　尚生'>宮西　尚生　選手</button>
                    <button type='submit' name='name' value='河野　竜生'>河野　竜生　選手</button>
                    <button type='submit' name='name' value='井口　和朋'>井口　和朋　選手</button>
                    <button type='submit' name='name' value='村田　透'>村田　透　選手</button>
                    <button type='submit' name='name' value='立野　和明'>立野　和明　選手</button>
                    <button type='submit' name='name' value='堀　瑞輝'>堀　瑞輝　選手</button>
                    <button type='submit' name='name' value='西村　天裕'>西村　天裕　選手</button>
                    <button type='submit' name='name' value='バーヘイゲン'>バーヘイゲン　選手</button>
                    <button type='submit' name='name' value='柿木　蓮'>柿木　蓮　選手</button>
                    <button type='submit' name='name' value='秋吉　亮'>秋吉　亮　選手</button>
                    <button type='submit' name='name' value='>福田　俊'>福田　俊　選手</button>
                    <button type='submit' name='name' value='B.ロドリゲス'>B.ロドリゲス　選手</button>
                    <button type='submit' name='name' value='長谷川　凌汰'>長谷川　凌汰　選手</button>
                    <button type='submit' name='name' value='アーリン'>アーリン　選手</button>
                    <button type='submit' name='name' value='田中　瑛斗'>田中　瑛斗　選手</button>
                    <button type='submit' name='name' value='鈴木　健矢'>鈴木　健矢　選手</button>
                    <button type='submit' name='name' value='石川　直也'>石川　直也　選手</button>
                    <button type='submit' name='name' value='池田　隆英'>池田　隆英　選手</button>
                    <button type='submit' name='name' value='玉井　大翔'>玉井　大翔　選手</button>
                    <button type='submit' name='name' value='杉浦　稔大'>杉浦　稔大　選手</button>
                    <button type='submit' name='name' value='谷川　昌希'>谷川　昌希　選手</button>
                    <button type='submit' name='name' value='根本　悠楓'>根本　悠楓　選手</button>
                    <button type='submit' name='name' value='望月　大希'>望月　大希　選手</button>
                    <button type='submit' name='name' value='北浦　竜次'>北浦　竜次　選手</button>
                    <button type='submit' name='name' value='松本　遼大'>松本　遼大　選手</button>
                    <button type='submit' name='name' value='齋藤　伸治'>齋藤　伸治　選手</button>
                    <button type='submit' name='name' value='高山　優希'>高山　優希　選手</button>
                    <button type='submit' name='name' value='鈴木　遼太郎'>鈴木　遼太郎　選手</button>
                    <button type='submit' name='name' value='姫野　優也'>姫野　優也　選手</button>
                    <button type='submit' name='name' value='杉谷　拳士'>杉谷　拳士　選手</button>
                    <button type='submit' name='name' value='王　柏融'>王　柏融　選手</button>
                    <button type='submit' name='name' value='谷口　雄也'>谷口　雄也　選手</button>
                    <button type='submit' name='name' value='大田　泰示'>大田　泰示　選手</button>
                    <button type='submit' name='name' value='西川　遥輝'>西川　遥輝　選手</button>
                    <button type='submit' name='name' value='近藤　健介'>近藤　健介　選手</button>
                    <button type='submit' name='name' value='中島　卓也'>中島　卓也　選手</button>
                    <button type='submit' name='name' value='清水　優心'>清水　優心　選手</button>
                    <button type='submit' name='name' value='松本　剛'>松本　剛　選手</button>
                    <button type='submit' name='name' value='清宮　幸太郎'>清宮　幸太郎　選手</button>
                    <button type='submit' name='name' value='鶴岡　慎也'>鶴岡　慎也　選手</button>
                    <button type='submit' name='name' value='渡邉　諒'>渡邉　諒　選手</button>
                    <button type='submit' name='name' value='野村　祐希'>野村　祐希　選手</button>
                    <button type='submit' name='name' value='淺間　大基'>淺間　大基　選手</button>
                    <button type='submit' name='name' value='淺間　大基'>古川　裕大　選手</button>
                    <button type='submit' name='name' value='宇佐見　真吾'>宇佐見　真吾　選手</button>
                    <button type='submit' name='name' value='谷内　亮太'>谷内　亮太　選手</button>
                    <button type='submit' name='name' value='石井　一成'>石井　一成　選手</button>
                    <button type='submit' name='name' value='木村　文紀'>木村　文紀　選手</button>
                    <button type='submit' name='name' value='上野　響平'>上野　響平　選手</button>
                    <button type='submit' name='name' value='佐藤　龍世'>佐藤　龍世　選手</button>
                    <button type='submit' name='name' value='五十幡　亮汰'>五十幡　亮汰　選手</button>
                    <button type='submit' name='name' value='R.ロドリゲス'>R.ロドリゲス　選手</button>
                    <button type='submit' name='name' value='難波　侑平'>難波　侑平　選手</button>
                    <button type='submit' name='name' value='細川　凌平'>細川　凌平　選手</button>
                    <button type='submit' name='name' value='郡　拓也'>郡　拓也　選手</button>
                    <button type='submit' name='name' value='今川　優馬'>今川　優馬　選手</button>
                    <button type='submit' name='name' value='田宮　裕涼'>田宮　裕涼　選手</button>
                    <button type='submit' name='name' value='梅林　優貴'>梅林　優貴　選手</button>
                    <button type='submit' name='name' value='万波　中正'>万波　中正　選手</button>
                    <button type='submit' name='name' value='片岡　奨人'>片岡　奨人　選手</button>
                    <button type='submit' name='name' value='石川　亮'>石川　亮　選手</button>
                    <button type='submit' name='name' value='宮田　輝星'>宮田　輝星　選手</button>
                    <button type='submit' name='name' value='今井　順之助'>今井　順之助　選手</button>
                    <button type='submit' name='name' value='髙濱　祐仁'>髙濱　祐仁　選手</button>
                    <button type='submit' name='name' value='樋口　龍之介'>樋口　龍之介　選手</button>
                    <button type='submit' name='name' value='海老原　一佳'>海老原　一佳　選手</button>
                    {{ csrf_field() }}
                 </form>
            </div>
        </div>
    </div>
@endsection