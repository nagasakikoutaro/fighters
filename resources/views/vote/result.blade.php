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
                    @foreach ($voteCounts as $playerName => $voteCount)
                    
                    <div>
                    <h1>{{ $playerName }}選手</h1>
                    <h1>{{ $voteCount }}票</h1>
                    </div>
                    @endforeach

                      {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
@endsection