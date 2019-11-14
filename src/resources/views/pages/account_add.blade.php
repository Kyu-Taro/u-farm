@extends('templates.form')
@section('href','account.css')
@section('title','U-farm | 会員登録')

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
    <form action="/account" method="POST">
        @csrf
        銀行名:
        @error('bank')
            <span class="error">{{ $message }}</span>
        @enderror
        <br/>
        <input type="text" name="bank" value="{{ old('bank') }}"><br/>
        支店名:
        @error('branch')
            <span class="error">{{ $message }}</span>
        @enderror
        <br/>
        <input type="text" name="branch" value="{{ old('branch') }}"><br/>
        種別:
        @error('type')
            <span class="error">{{ $message }}</span>
        @enderror
        <br/>
        <input type="radio" name="type" value="普通">普通
        <input type="radio" name="type" value="当座">当座<br/>
        口座名義人:
        @error('name')
            <span class="error">{{ $message }}</span>
        @enderror
        <br/>
        <input type="text" name="name" value="{{ old('name') }}"><br/>
        口座番号:
        @error('number')
            <span class="error">{{ $message }}</span>
        @enderror
        <br/>
        <input type="tel" name="number" value="{{ old('number') }}"><br/>
        <input type="hidden" name="admin_id" value="{{ $user->id }}">
        <input type="submit" value="登録">
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
