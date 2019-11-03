@extends('templates.form')
@section('title','商品編集')
@section('href','create.css')

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

@section('form')
    <form action="/items/{{ $item->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="area-drop">
            写真を選択
            <img src="@if(!empty($item->img)) {{ $item->img }} @endif" class="prev-img" style="@if(!empty($item->img)) display: block @else display: none @endif">
            <input type="file" name="img" class="input-file"><br/>
        </div>
        商品名:
        @error('name')
            <span class="error">{{ $message }}</span>
        @enderror
        <br/>
        <input type="text" name="name" value="{{ $item->name }}">
        料金:
        @error('price')
            <span class="error">{{ $message }}</span>
        @enderror
        <br/>
        <input type="text" name="price" value="{{ $item->price }}"><br/>
        産地:
        @error('area')
            <span class="error">{{ $message }}</span>
        @enderror
        <br/>
        <input type="text" name="area" value="{{ $item->area }}"><br/>
        商品説明:
        @error('text')
            <span class="error">{{ $message }}</span>
        @enderror
        <br/>
        <textarea name="text" cols="68" rows="10">{{ $item->text }}</textarea><br/>
        <input type="submit" value="更新">
    </form>
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
