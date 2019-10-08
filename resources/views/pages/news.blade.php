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
    <div class="container">
        <div class="site-width">
            <div class="contens">
                @foreach ($clients as $item)
                    <div class="content">
                        {{ $item->item->name }}
                        {{ $item->item->price }}
                        {{ $item->user->name }}
                        {{ $item->user->postNumber }}
                        {{ $item->user->area }}
                        {{ $item->user->tell }}
                        <form action="/client" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="発送完了">
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
