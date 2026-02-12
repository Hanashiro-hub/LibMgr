@extends('layouts.app')

@section('title', 'ログアウト')

@section('content')
    <a href="{{ route('mypage') }}">マイページに戻る</a>
    <br>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <flux:button variant="subtle" type="submit">ログアウト</flux:button>
    </form>
@endsection