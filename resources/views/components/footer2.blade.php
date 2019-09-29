<footer>
        <span class="scroll">^</span>
        <nav>
            <ul class="footer-nav">
                <li><a href="{{ $link }}">{{ $title }}</a></li>
                <li><a href="{{ $link2 }}">{{ $title2 }}</a></li>
                <li><a href="{{ $link3 }}">{{ $title3 }}</a></li>
                <li><a href="{{ $link4 }}">{{ $title4 }}</a></li>
                <li><a href="{{ $link5 }}">{{ $title5 }}</a></li>
            </ul>
        </nav>
        <p class="footer-coment">Copyright © 2007-2012 Kytaro&Mochi All Rights Reserved.</p>
    </footer>
    <script src="/js/index.js"></script>

    <style>
        footer{
            height: 200px;
            background: #8b4513;
            z-index: 5;
        }
        ul.footer-nav{
            width: 30%;
            padding: 40px 0 60px 0;
            list-style: none;
            margin: auto;
            text-align: center;
        }
        .footer-nav li{
            float: left;
            margin-right: 42px;
            border-right: solid white 1px;
            padding-right: 30px;
            text-align: center;
            font-size: 0.9rem;
        }
        .footer-nav li:last-child{
            border: none;
        }
        .footer-nav li:first-child{
            margin-left: 120px;
        }
        .footer-nav li a{
            color: white;
            text-decoration: none;
        }
        .footer-nav li:hover{
            text-decoration: underline;
        }
        p.footer-coment{
            text-align: center;
            font-size: 1.12rem;
            color: white;
        }
        span.scroll{
            font-size: 2rem;
            color: white;
            padding: 5px 12px;
            background: #8b4513;
            border-radius: 50%;
            position: relative;
            left: 48.8%;
            top: -25px;
            cursor: pointer;
        }
    </style>
