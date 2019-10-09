<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/index.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <title>U-farm | トップページ</title>
</head>
<body>
    @yield('header')

    <div class="top-container">
        <div class="top">
            <div class="site-width">
                @yield('top-container')
            </div>
        </div>
    </div>

    <div class="sub-container">
        <div class="site-width">
            @yield('sub-container')
        </div>
    </div>

    <div class="detail">
        <div class="site-width">
            @yield('detail')
        </div>
    </div>

    <div class="buy">
        <div class="site-width">
            @yield('buy')
        </div>
    </div>


    @yield('footer')
</body>
</html>
