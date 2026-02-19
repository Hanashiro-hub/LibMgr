@extends('layouts.app')

@section('title', 'マイページ')

@section('content')
    <flux:heading size="xl">マイページ</flux:heading>

    <flux:text>ユーザー情報</flux:text>
    <br>

    <flux:table>
        <flux:table.columns>
            <flux:table.column>ID</flux:table.column>
            <flux:table.column>NAME</flux:table.column>
            <flux:table.column>MAIL</flux:table.column>
        </flux:table.columns>

        <flux:table.rows>
            <flux:table.row>
                <flux:table.cell>{{ Auth::user()->id }}</flux:table.cell>
                <flux:table.cell>{{ Auth::user()->name }}</flux:table.cell>
                <flux:table.cell>{{ Auth::user()->email }}</flux:table.cell>
            </flux:table.row>
        </flux:table.rows>
    </flux:table>

    <flux:button variant="subtle"><a href="{{route('mypage.logout')}}">ログアウト</a></flux:button>
@endsection