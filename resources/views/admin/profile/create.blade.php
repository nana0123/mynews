{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'Ｍｙ プロフィール'を埋め込む --}}
@section('title', 'Ｍｙ プロフィール')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Ｍｙ プロフィール</h2>
            </div>
        </div>
    </div>
@endsection