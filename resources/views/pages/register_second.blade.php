@extends('templates.form')
@section('href','form.css')
@section('title','U-farm | 会員登録')

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

@section('form')
    <ul class="form-ul">
        <li><a href="/register">買いたい人</a></li>
        <li ><a href="/register_second">売りたい人</a></li>
    </ul>
    <form action="/register_second" method="POST">
        @csrf
        名前
        @error('name')
            <span class="error">{{ $message }}</span>
        @enderror
        <br/>
        <input type="text" name="name" value="{{ old('name') }}"><br/>
        Email
        @error('email')
            <span class="error">{{ $message }}</span>
        @enderror
        <br/>
        <input type="text" name="email" value="{{ old('email') }}"><br/>
        パスワード
        @error('password')
            <span class="error">{{ $message }}</span>
        @enderror
        <br/>
        <input type="password" name="password"><br/>
        再入力
        @error('password_confirmation')
            <span class="error">{{ $message }}</span>
        @enderror
        <br/>
        <input type="password" name="password_confirmation"><br/>
        郵便番号(ハイフンなし)
        @error('postNumber')
            <span class="error">{{ $message }}</span>
        @enderror
        <br/>
        <input type="tel" name="postNumber" value="{{ old('postNumber') }}"><br/>
        住所
        @error('area')
            <span class="error">{{ $message }}</span>
        @enderror
        <br/>
        <input type="text" name="area" value={{ old('area') }}><br/>
        電話番号
        @error('tell')
            <span class="error">{{ $message }}</span>
        @enderror
        <br/>
        <input type="tel" name="tell" value="{{ old('tell') }}"><br/>
        <input type="hidden" name="type" value="2">
        <input type="submit" value="登録">
    </form>
@endsection

@section('footer')
    @component('components.footer')
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
