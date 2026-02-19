@extends('layouts.app')

@section('title', '書籍削除')

@section('content')
    <h1>書籍削除</h1>

    <br>
    <flux:card>
        <flux:table>
            <flux:table.columns>
                <flux:table.column>タイトル</flux:table.column>
                <flux:table.column>作者</flux:table.column>
                <flux:table.column>評価</flux:table.column>
            </flux:table.columns>

            <flux:table.rows>
                <flux:table.row>
                    <flux:table.cell>{{$book->title}}</flux:table.cell>
                    <flux:table.cell>{{$book->author}}</flux:table.cell>

                    <flux:table.cell>
                        <div class="flex item-center gap-1">
                            @for($i=1; $i<=5; $i++)
                                @if($i <= $book->star)
                                    <flux:icon.star class="size-12" variant="solid"/>
                                @else
                                    <flux:icon.star class="size-12"/>
                                @endif
                            @endfor
                        </div>
                    </flux:table.cell>
                    
                </flux:table.row>
        </flux:table.rows>
        </flux:table>
    </flux:card>

    <form method="POST" action="{{route('delete.book', ['book' => $book->id])}}">
        @csrf
        @method('DELETE')

        <flux:button type="submit" variant="danger" size="sm">削除</flux:button>
        <br>
        <flux:link href="{{route('book')}}">書籍一覧に戻る</flux:link>
    
@endsection