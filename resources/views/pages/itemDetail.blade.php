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
    <img src="@if(empty($item->img)) /img/sample.jpg @else {{ $item->img }} @endif"><br/>
    生産者:<a href="/admin/{{ $item->admin->id }}">{{ $item->admin->name }}</a><br/>
    商品名:{{ $item->name }}<br/>
    料金:{{ $item->price }}円<br/>
    産地:{{ $item->area }}<br/>
    商品説明:<br/>
    {{ $item->text }}<br/>
    <form action="/charge/{{ $item->id }}/{{ $user->id }}" method="POST">
        @csrf
        <script
            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="{{ env('STRIPE_KEY') }}"
            data-amount="{{ $item->price }}"
            data-name="Stripe Demo"
            data-label="決済をする"
            data-description="Online course about integrating Stripe"
            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
            data-locale="auto"
            data-currency="JPY">
        </script>
        </form>
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
