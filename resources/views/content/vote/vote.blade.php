{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.vote')


{{-- history.blade.phpの@yield('title')に'思い出'を埋め込む --}}
@section('title', 'お気に入りの選手は誰ですか？')

{{-- history.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>投票</h2>
                 <form action="content/vote" method="post" enctype="multipart/form-data">
                     {{ csrf_field() }}
                    <button type='submit' name='player_id' value='1'>斎藤　佑樹　選手に投票</button>
                    <button type='submit' name='player_id' value='2'>生田目　翼　選手に投票</button>
                    <button type='submit' name='player_id' value='3'>加藤 貴之　選手に投票</button>
                    <button type='submit' name='player_id' value='4'>上沢 直之　選手に投票</button>
                    <button type='submit' name='player_id' value='5'>伊藤　大海　選手に投票</button>
                    <button type='submit' name='player_id' value='6'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='7'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='8'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='9'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='10'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='11'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='12'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='13'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='14'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='15'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='16'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='17'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='18'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='19'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='20'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='21'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='22'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='23'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='24'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='25'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='26'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='27'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='28'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='29'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='30'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='31'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='32'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='33'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='34'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='35'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='36'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='37'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='38'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='39'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='40'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='41'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='42'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='43'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='44'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='45'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='46'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='47'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='48'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='49'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='50'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='51'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='52'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='53'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='54'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='55'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='56'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='57'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='58'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='59'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='60'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='61'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='62'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='63'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='64'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='65'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='66'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='67'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='68'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='69'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='70'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='71'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='72'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='73'>佐藤選手に投票</button>
                    <button type='submit' name='player_id' value='74'>佐藤選手に投票</button>
                </form>
            </div>
        </div>
    </div>
@endsection