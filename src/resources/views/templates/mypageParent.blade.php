<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="@yield('href')">
    <title>@yield('title')</title>
</head>
<body>
    @yield('header')

    <div class="my-contents">
        <div class="site-width">
            @yield('my-content')
        </div>
    </div>

    <div class="items-contents">
        <div class="site-width">
            @yield('items-content')
        </div>
    </div>

    @yield('footer')
</body>
</html>
