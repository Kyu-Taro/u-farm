@extends('templates.form')
@section('href','login.css')
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
        <li><a href="/login">利用者ログイン</a></li>
        <li ><a href="/login_second">農家ログイン</a></li>
    </ul>
    <span class="error">{{ session('error') }}</span>
    <form action="/login" method="POST">
        @csrf
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
        <input type="checkbox" value="1" name="check">ログイン状態を維持する<br/>
        <input type="submit" value="ログイン">
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
