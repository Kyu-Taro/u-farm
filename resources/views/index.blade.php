<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="css/common.css" type="text/css">
    <link rel="stylesheet" href="css/app.css" type="text/css">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    
    <title>U-farm | トップページ</title>
</head>
<body>
    <div id="app">
        <header-component></header-component>
        <example-component></example-component>
    </div>
    <script src='js/app.js'></script>
</body>