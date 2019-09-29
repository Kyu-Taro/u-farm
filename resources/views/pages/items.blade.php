@extends('templates.content')
@section('title','商品一覧')
@section('href','items.css')

@section('header')
    @component('components.header2')
        @slot('link')
            /mypage
        @endslot
        @slot('title')
            Mypage
        @endslot
        @slot('link2')
            /items
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

@section('top-title','商品一覧')

@section('content')
    @foreach ($items as $item)
        <div class="item">
            <a href="/items/{{ $item->id }}"><img src="@if(empty($item->img)) img/sample.jpg @else {{ $item->img }} @endif"></a><br/>
            商品名:{{ $item->name }}<br/>
            金額:{{ $item->price }}<br/>
            産地:{{ $item->area }}<br/>
            商品説明:<br/>{{ $item->text }}
        </div>
    @endforeach
@endsection


@section('footer')
    @component('components.footer2')
        @slot('link')
            /mypage
        @endslot
        @slot('title')
            Mypage
        @endslot
        @slot('link2')
            /items
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
