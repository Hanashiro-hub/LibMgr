@extends('layouts.app')

@section('title', '書籍TOP')

@section('content')
    <h1>書籍TOP</h1>

    <livewire:book-index />

    <flux:link href="{{route('return.book-register')}}">書籍登録</flux:link>
    <br>
    <flux:link href="{{route('mypage')}}">マイページ</flux:link>
@endsection