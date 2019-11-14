@extends('templates.itemDetail')
@section('title','商品詳細')
@section('href','itemDetail.css')

    @section('header')
    @if (Auth::guard('admin')->check())
        @component('components.header2')
            @slot('link')
                /mypage
            @endslot
            @slot('title')
                Mypage
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
    @else
        @component('components.header')
            @slot('link')
                /
            @endslot
            @slot('title')
                Top
            @endslot
            @slot('link2')
                /item
            @endslot
            @slot('title2')
                Items
            @endslot
            @slot('link3')
                /setting_second
            @endslot
            @slot('title3')
                Setting
            @endslot
            @slot('link4')
                /logout
            @endslot
            @slot('title4')
                logout
            @endslot
        @endcomponent
    @endif
    @endsection

@section('content')
    <h1 class="detail-title">商品詳細</h1>
    <div class="items-img">
        <img src="@if(empty($item->img)) /img/sample.jpg @else {{ $item->img }} @endif"><br/>
    </div>
    <div class="item">
        <p>生産者:<a href="/admin/{{ $item->admin->id }}">{{ $item->admin->name }}</a></p>
        <p>商品名:{{ $item->name }}</p>
        <p>料金:{{ $item->price }}円</p>
        <p>産地:{{ $item->area }}</p>
        <p>発送までの日数:{{ $item->day }}日</p>
        商品説明:<br/>
        <div class="item-text">
        {{ $item->text }}
        </div>
            <form action="/charge" method="POST">
                @csrf
                個数:<input type="tel" name="number"><br/>
                <input type="hidden" value="{{ $item->id }}" name="item">
                <input type="hidden" value="{{ $user->id }}" name="user">
                <input type="submit" value="購入する">
            </form>
        </div>
@endsection

@section('footer')
@if (Auth::guard('admin')->check())
    @component('components.footer2')
        @slot('link')
            /mypage
        @endslot
        @slot('title')
            Mypage
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
@else
    @component('components.footer')
        @slot('link')
            /
        @endslot
        @slot('title')
            Top
        @endslot
        @slot('link2')
            /item
        @endslot
        @slot('title2')
            Items
        @endslot
        @slot('link3')
            /setting_second
        @endslot
        @slot('title3')
            Setting
        @endslot
        @slot('link4')
            /logout
        @endslot
        @slot('title4')
            logout
        @endslot
    @endcomponent
@endif
@endsection
