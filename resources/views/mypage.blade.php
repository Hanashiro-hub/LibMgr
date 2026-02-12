@extends('layouts.app')

@section('title', 'マイページ')

@section('content')
    <h1>マイページ</h1>
    <p>ID : {{ Auth::user()->id }}</p>
    <p>NAME : {{ Auth::user()->name }}</p>
    <p>MAIL : {{ Auth::user()->email }}</p>

    <flux:button variant="subtle"><a href="{{route('mypage.logout')}}">ログアウト</a></flux:button>
@endsection