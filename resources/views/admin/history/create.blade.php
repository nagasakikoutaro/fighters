{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.history')


{{-- admin.blade.phpの@yield('title')に'思い出'を埋め込む --}}
@section('title', '思い出')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>思い出</h2>
            </div>
        </div>
    </div>
@endsection