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
    <h1>~U-farmとは~</h1>
    <p>ここに内容をかく</p>
@endsection

@section('detail')
    <h1>~使い方~</h1>
    <p>簡単な使い方をここにかく</p>
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
