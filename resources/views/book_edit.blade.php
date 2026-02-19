@extends('layouts.app')

@section('title', '書籍編集')

@section('content')
    <h1>書籍編集</h1>

    <br>
    <form method="POST" action="{{route('edit.book', ['book' => $book->id])}}">
        @csrf
        @method('PUT')

        <flux:input name="title" type="text" label="タイトル" value="{{$book->title}}"/>
        <flux:input name="author" type="text" label="作者" value="{{$book->author}}"/>
        <flux:input name="star" type="number" min="1" max="5" label="評価" value="{{$book->star}}"/>
        <br>
        <flux:button type="submit" variant="primary" size="sm">更新</flux:button>
    </form>
    <br>
    <flux:link href="{{route('book')}}">書籍一覧に戻る</flux:link>

    @if(session('error'))
        <div class="mt-4 text-red-500">
            {{ session('error') }}
        </div>
    @endif
    
@endsection