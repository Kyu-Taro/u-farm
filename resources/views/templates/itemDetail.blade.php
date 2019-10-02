<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/css/@yield('href')">
    <title>@yield('title')</title>
</head>
<body>
    @yield('header')

    <div class="itemContainer">
        <div class="site-width">
            <div class="itemDetail">
                @yield('content')
            </div>
        </div>
    </div>

    @yield('footer')
</body>
</html>
