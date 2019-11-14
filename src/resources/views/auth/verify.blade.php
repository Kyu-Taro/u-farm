<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/css/verify.css">
    <title>本登録</title>
</head>
<body>
    @if (Auth::guard('admin')->check())
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
    @else
        @component('components.header')
            @slot('link')
                /
            @endslot
            @slot('title')
                Top
            @endslot
            @slot('link2')
                /item
            @endslot
            @slot('title2')
                Items
            @endslot
            @slot('link3')
                /setting_second
            @endslot
            @slot('title3')
                Setting
            @endslot
            @slot('link4')
                /logout
            @endslot
            @slot('title4')
                logout
            @endslot
        @endcomponent
    @endif

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">【本登録】</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                            本登録用メールを送信しました。
                            </div>
                        @endif

                        仮登録のメールアドレス宛に、メールを送信しました。<br/>そちらのリンクから本登録を行ってください<br/>
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            メールが届かない場合は下記をクリック<br/>
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">こちらをクリック</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

        @if (Auth::guard('admin')->check())
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
    @else
        @component('components.footer')
            @slot('link')
                /
            @endslot
            @slot('title')
                Top
            @endslot
            @slot('link2')
                /item
            @endslot
            @slot('title2')
                Items
            @endslot
            @slot('link3')
                /setting_second
            @endslot
            @slot('title3')
                Setting
            @endslot
            @slot('link4')
                /logout
            @endslot
            @slot('title4')
                logout
            @endslot
        @endcomponent
    @endif
</body>
</html>
