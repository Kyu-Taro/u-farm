@extends('templates.indexParent')

@section('header')
    @component('components.header')
        @slot('link')
            /
        @endslot
        @slot('title')
            Top
        @endslot
        @slot('link2')
            register
        @endslot
        @slot('title2')
            Register
        @endslot
        @slot('link3')
            login
        @endslot
        @slot('title3')
            Login
        @endslot
        @slot('link4')
            /detail
        @endslot
        @slot('title4')
            Detail
        @endslot
    @endcomponent
@endsection

@section('top-container')
    <h1 class="top-title">~U-farm~</h1>
    <p class="top-comment">Fresh vegetables for you.</p>
@endsection

@section('sub-container')
    <h1 class="sub-title">~U-farmとは~</h1>
    <p class="sub-coment">
        消費者と生産者を直接つなぐサービス<br/>
        農協などを通さず直接売買できるからこそ、<br/>
        安く新鮮な野菜を購入することができます。<br/>
        また、生産者もわかるから安心<br/>
    </p>
@endsection

@section('detail')
    <h1 class="detail-title">~買いたい方~</h1>
    <p class="detail-coment">
        まずは、会員登録！<br/>
        氏名や住所など1分で会員登録は完了<br/>
        その後出品の中から欲しい野菜を選んで購入<br/>
        発送後にメールが届き、後は待つだけの<br/>
        簡単クレジット決済<br/>
    </p>
    <a href="/register" class="register_link">会員登録はこちら</a>
@endsection

@section('buy')
    <h1 class="buy-title">~農家の方~</h1>
    <p class="buy-coment">
        農家の方は必要な情報を登録後、口座の登録で完了！<br/>
        出品したい商品の写真と共に<br/>
        商品の詳細を記入するだけで、簡単に出品<br/>
        商品が購入されたら登録先のEmailにメールが届き<br/>
        後は発送するだけ!<br/>
    </p>
    <a href="/register_second" class="register_link">会員登録はこちら</a>
@endsection


@section('footer')
    @component('components.footer')
        @slot('link')
            /
        @endslot
        @slot('title')
            TOP
        @endslot
        @slot('link2')
            /register
        @endslot
        @slot('title2')
            Register
        @endslot
        @slot('link3')
            /login
        @endslot
        @slot('title3')
            Login
        @endslot
        @slot('link4')
            /detail
        @endslot
        @slot('title4')
            Detail
        @endslot
    @endcomponent
@endsection
