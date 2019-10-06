@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">本登録</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                           本登録用メールを送信しました。
                        </div>
                    @endif

                    仮登録のメールアドレス宛に、メールを送信しました。そちらのリンクから本登録を行ってください
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
		                メールが届かない場合は<button type="submit" class="btn btn-link p-0 m-0 align-baseline">こちらをクリック</button>
	                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
