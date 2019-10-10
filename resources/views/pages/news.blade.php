<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/css/news.css">
    <title>購入者一覧</title>
</head>
<body>

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

    <div class="container">
        <div class="site-width">
            <div class="contents">
                <p>発送リスト</p>
                @foreach ($clients as $item)
                    <div class="content">
                        商品名:{{ $item->item->name }}<br/>
                        料金:{{ $item->item->price }}<br/>
                        購入者:{{ $item->user->name }}<br/>
                        〒{{ $item->user->postNumber }}
                        {{ $item->user->area }}<br/>
                        購入者電話番号:{{ $item->user->tell }}<br/>
                        <form action="/client/{{ $item->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="発送完了">
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

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
</body>
</html>
