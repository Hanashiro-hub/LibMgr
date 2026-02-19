@extends('layouts.app')

@section('title', 'ログアウト')

@section('content')
    <flux:link href="{{ route('mypage') }}">マイページに戻る</flux:link>
    <br>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <flux:button variant="subtle" type="submit">ログアウト</flux:button>
    </form>
@endsection