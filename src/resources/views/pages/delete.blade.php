@extends('templates.form')
@section('title','商品削除')
@section('href','form.css')

@section('header')
    @component('components.header2')
        @slot('link')
            /setting
        @endslot
        @slot('title')
            Setting
        @endslot
        @slot('link2')
            /item
        @endslot
        @slot('title2')
            Items
        @endslot
        @slot('link3')
            /create
        @endslot
        @slot('title3')
            Create
        @endslot
        @slot('link4')
            /news
        @endslot
        @slot('title4')
            News
        @endslot
        @slot('link5')
            /logout
        @endslot
        @slot('title5')
            Lotout
        @endslot
    @endcomponent
@endsection

@section('form')
    <img src="@if(empty($item->img)) /img/sample.jpg @else {{ $item->img }} @endif"><br/>
    商品名:{{ $item->name }}<br/>
    料金:{{ $item->price }}<br/>
    産地:{{ $item->area }}<br/>
    説明:{{ $item->text }}<br/>
    <form action="/items/{{ $item->id }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="削除">
    </form>

@endsection

@section('footer')
    @component('components.footer2')
        @slot('link')
            /setting
        @endslot
        @slot('title')
            Setting
        @endslot
        @slot('link2')
            /item
        @endslot
        @slot('title2')
            Items
        @endslot
        @slot('link3')
            /create
        @endslot
        @slot('title3')
            Create
        @endslot
        @slot('link4')
            /news
        @endslot
        @slot('title4')
            News
        @endslot
        @slot('link5')
            /logout
        @endslot
        @slot('title5')
            Lotout
        @endslot
    @endcomponent
@endsection
