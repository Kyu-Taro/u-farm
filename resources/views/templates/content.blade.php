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

    <main class="main-container">
        <div class="site-width">
            @yield('form')
             <h1 class="top-title">@yield('top-title')</h1>
             <div class="content-container">
                 @yield('content')
             </div>
        </div>
    </main>

    @yield('footer')
</body>
</html>
