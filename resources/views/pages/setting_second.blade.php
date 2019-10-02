@extends('templates.form')
@section('title','U-farm | 情報変更')
@section('href','setting_second.css')

@section('header')
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
@endsection

@section('form')
    <form action="/user/{{ $user->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
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
        郵便番号(ハイフンなし):
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
        電話番号(ハイフンなし):
        @error('tell')
            <span class="error">{{ $message }}</span>
        @enderror
        <br/>
        <input type="tel" name="tell" value="{{ $user->tell }}"><br/>
        <input type="submit" value="更新">
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
@endsection
