 @extends('layouts.vote')
@section('title', '投票結果')
@section('content')
 <div class="col-md-4">
    <a href="{{ action('VotepageController@index') }}" role="button" class="btn btn-primary">トップページ</a>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>投票結果！</h2>
                @foreach ($votes as $vote)
                <div>
                <p>{{ $vote->name }}選手</p><p>{{ $vote->count }}票</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection