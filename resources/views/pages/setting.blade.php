@extends('templates.form')
@section('title','U-farm | 情報変更')
@section('href','setting.css')

@section('header')
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
@endsection

@section('form')
    <form action="/admin/{{ $user->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="area-drop">
            写真を選択
            <img src="@if(!empty($user->img)) {{ $user->img }} @endif" class="prev-img" style="@if(!empty($user->img)) display: block @else display: none @endif">
            <input type="file" name="img" class="input-file"><br/>
        </div>
        名前:
        @error('name')
            <span class="error">{{ $message }}</span>
        @enderror
        <br/>
        <input type="text" name="name" value="{{ $user->name }}"><br/>
        Email:
        @error('email')
            <span class="error">{{ $message }}</span>
        @enderror
        <br/>
        <input type="text" name="email" value="{{ $user->email }}"><br/>
        郵便番号:
        @error('postNumber')
            <span class="error">{{ $message }}</span>
        @enderror
        <br/>
        <input type="tel" name="postNumber" value="{{ $user->postNumber }}"><br/>
        住所:
        @error('area')
            <span class="error">{{ $message }}</span>
        @enderror
        <br/>
        <input type="text" name="area" value="{{ $user->area }}"><br/>
        電話番号:
        @error('tell')
            <span class="error">{{ $message }}</span>
        @enderror
        <br/>
        <input type="tel" name="tell" value="{{ $user->tell }}"><br/>
        紹介文:
        @error('text')
            <span class="error">{{ $message }}</span>
        @enderror
        <br/>
        <textarea name="text" cols="67" rows="10">{{ $user->text }}</textarea><br/>
        <a href="/account_add">口座登録はこちら</a><br/><a href="/account_update">口座情報変更はこちら</a>
        <input type="submit" value="更新">
    </form>
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
