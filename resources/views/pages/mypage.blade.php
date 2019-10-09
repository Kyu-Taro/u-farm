@extends('templates.mypageParent')
@section('title','U-farm | マイページ')
@section('href','/css/mypage.css')

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

@section('my-content')
    <img src="@if(empty($user->img)) /img/sample.jpg @else {{ $user->img }} @endif">
    <dl>
        <dt>名前</dt>
        <dd>{{ $user->name }}</dd>
        <dt>農家紹介</dt>
        <dd>@if(empty($user->text)) 準備中です。しばらくお待ちください。@else {{ $user->text }} @endif</dd>
    </dl>
@endsection

@section('items-content')
    <h1 class="items-title">出品商品一覧</h1>
    <div class="item-contents">
        <div class="item-container">
            @foreach ($items as $item)
                <div class="item">
                    <img src="@if(empty($item->img)) img/sample.jpg @else {{ $item->img }} @endif"><br/>
                    <p>商品名: {{ $item->name }}</p>
                    <p>金額: {{ $item->price }}円</p>
                    <p>産地: {{ $item->area }}</p>
                    <p>発送: {{ $item->day }}日</p>
                    <p>
                        商品情報:<br/>
                        <div class="comment">
                            <p>{{ $item->text }}</p>
                        </div>
                    </P>
                    <a href="/delete/{{ $item->id }}" class="delete">削除</a><a href="/update/{{ $item->id }}" class="update">編集</a>
                </div>
            @endforeach
        </div>
    </div>
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
