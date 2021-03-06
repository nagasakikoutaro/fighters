@extends('layouts.vote')
@section('title', '北海道日本ハムファイターズ投票')

@section('content')
    <div class="container">
        <div class="row">
            <h2>北海道日本ハムファイターズ投票</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('VotepageController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('VotepageController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="20%">ニックネーム</th>
                                <th width="20%">タイトル</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $votepage)
                                <tr>
                                    <th>{{ $votepage->id }}</th>
                                    <td>{{ \Str::limit($votepage->name, 100) }}</td>
                                    <td>{{ \Str::limit($votepage->title, 100) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('VotepageController@edit', ['id' => $votepage->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href="{{ action('VotepageController@delete', ['id' => $votepage->id]) }}">削除</a>
                                        </div>
                                         <div>
                                            <a href="{{ action('VotepageController@show', ['id' => $votepage->id]) }}">投票ページへ</a>
                                        </div>
                                        <div>
                                            <a href="{{ action('VoteController@result', ['id' => $votepage->id]) }}">投票結果</a>
                                        </div>
                                    </td>    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection