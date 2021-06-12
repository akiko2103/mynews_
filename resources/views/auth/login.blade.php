@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="login-box card">
                    <div class="login-header card-header mx-auto">{{ __('messages.Login') }}</div>

                    <div class="login-body card-body">
                        <form method="POST" action="{{ route('login') }}">
                            <!--route関数は、URLを生成したりリダイレクトしたりするための関数です。-->
                            <!--今回であれば、”/login”というURLを生成しています。-->
                            @csrf
                            <!--▼CSRFトークンについて-->
                            <!--次に@csrfは何をしているかを見てみます。-->
                            <!--これは、認証済みのユーザーがリクエストを送信しているのかを確認するために利用します。-->
                            <!--アプリケーションでHTMLフォームを定義する場合は常に、CSRF保護ミドルウェアがリクエストを検証できるように、-->
                            <!--隠しCSRFトークンフィールドをそのフォームへ含める必要があります。このトークンを生成するのが@csrf になります。-->

                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('messages.E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                    <!--▼三項演算子について-->
                                    <!--{{ $errors->has('email') ? ' is-invalid' : '' }}が三項演算子-->
                                    <!--<条件式> ? <真式> : <偽式>-->
                                    <!--▼$errors->has('email')とは-->
                                    <!--エラーメッセージが格納されている変数 -> emailフィールド（のこと）で発生したエラー内容-->
                                    <!--emailでエラーが起きているとその内容を取得することができる、の意-->

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('messages.Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('messages.Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('messages.Login') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection