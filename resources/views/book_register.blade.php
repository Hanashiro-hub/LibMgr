@extends('layouts.app')

@section('title', '書籍登録')

@section('content')
    <h1>書籍登録</h1>

    <br>
    <form method="POST" action="{{route('register.book')}}">
        @csrf

        <flux:input name="title" type="text" label="タイトル" value="{{ old('title') }}"/>
        <flux:input name="author" type="text" label="作者" value="{{ old('author') }}"/>
        <flux:input name="star" type="number" label="評価" min="1" max="5" value="{{ old('star') }}"/>
        <br>
        <flux:button type="submit" variant="primary" size="sm">登録</flux:button>
    </form>
    
    @if(session('error'))
        <div class="mt-4 text-red-500">
            {{ session('error') }}
        </div>
    @endif
@endsection