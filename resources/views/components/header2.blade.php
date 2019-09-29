<header>
        <h1 class="header-title"><a href="/">U-farm</a></h1>
        <ul class="header-nav">
            <li><a href="{{ $link }}">{{ $title }}</a></li>
            <li><a href="{{ $link2 }}">{{ $title2 }}</a></li>
            <li><a href="{{ $link3 }}">{{ $title3 }}</a></li>
            <li><a href="{{ $link4 }}">{{ $title4 }}</a></li>
            <li><a href="{{ $link5 }}">{{ $title5 }}</a></li>
        </ul>
    </header>

    <style>
        header{
            height: 80px;
            background: #8b4513;
            padding: 0;
            margin: 0;
            position: fixed;
            width: 100%;
            z-index: 5;
        }
        ul.header-nav{
            float: right;
            list-style: none;
        }
        .header-nav li{
            float: left;
            font-size: 1.6rem;
            line-height: 80px;
        }
        .header-nav li:hover{
            text-decoration: underline;
        }
        .header-nav li a{
            text-decoration: none;
            color: black;
            margin-right: 25px;
            font-weight: bold;
            color: white;
        }
        h1.header-title{
            line-height: 80px;
            display: inline-block;
            padding-left: 100px;
            font-size: 2.6rem;
            color: white;
        }
        .header-title a{
            color: white;
            text-decoration: none;
        }
    </style>
