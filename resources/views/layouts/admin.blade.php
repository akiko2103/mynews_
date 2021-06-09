<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  {{-- config/app.phpの中のlocaleで指定されている言語で表示するで
  つまりデフォルトはen --}}
   {{-- まず全体として、{{}}で囲まれたコードは、PHPで書かれた内容を表示するという意味になります。より簡単にいえば、{{}}の中身を文字列に置換し、HTMLの中に記載するということです。 --}}

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        {{-- windowsの基本ブラウザであるedgeに対応するという記載。 --}}

        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- 画面幅を小さくしたとき、たとえばスマートフォンで見たときなどに文字や画像の大きさを調整してくれるタグです。 --}}

        <!-- CSRF Token -->
         {{-- 後の章で説明します --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- まず全体として、{{}}で囲まれたコードは、PHPで書かれた内容を表示するという意味になります。より簡単にいえば、{{}}の中身を文字列に置換し、HTMLの中に記載するということです。 --}}
        {{--CSRF攻撃を防ぐ手法はワンタイムトークン、というわけでcsrf_token --}}

        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
        {{-- 「@◯◯」という記載のところは、メソッドを読み込んでいます。 
          @yieldは指定したセッションの内容を表示するために使用します。
          今回であれば、titleというセッションの内容を表示します。
          コメントに書いてある通り、各ページごとにタイトルを変更できるようにするためです。--}}
        <title>@yield('title')</title>

        <!-- Scripts -->
         {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
         {{-- まず全体として、{{}}で囲まれたコードは、PHPで書かれた内容を表示するという意味になります。より簡単にいえば、{{}}の中身を文字列に置換し、HTMLの中に記載するということです。 --}}
         {{-- secure_asset(‘ファイルパス’)は、publicディレクトリのパスを返す関数。「/js/app.js」というパスを生成します。 --}}

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
         {{-- まず全体として、{{}}で囲まれたコードは、PHPで書かれた内容を表示するという意味になります。より簡単にいえば、{{}}の中身を文字列に置換し、HTMLの中に記載するということです。 --}}

        {{-- この章の後半で作成するCSSを読み込みます --}}
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
         {{-- まず全体として、{{}}で囲まれたコードは、PHPで書かれた内容を表示するという意味になります。より簡単にいえば、{{}}の中身を文字列に置換し、HTMLの中に記載するということです。 --}}
    </head>
    <body>
        <div id="app">
            {{-- 画面上部に表示するナビゲーションバーです。 --}}
            <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                       {{-- まず全体として、{{}}で囲まれたコードは、PHPで書かれた内容を表示するという意味になります。より簡単にいえば、{{}}の中身を文字列に置換し、HTMLの中に記載するということです。 --}}
                       {{-- {{ url('/') }}　url(“パス”)は、そのままURLを返すメソッドです。 --}}
                        {{ config('app.name', 'Laravel') }}
                         {{-- まず全体として、{{}}で囲まれたコードは、PHPで書かれた内容を表示するという意味になります。より簡単にいえば、{{}}の中身を文字列に置換し、HTMLの中に記載するということです。 --}}
                         {{-- {{ config('app.name', 'Laravel') }}の意味について
                         これもsecure_assetと似たような関数で、configフォルダのapp.phpの中にあるnameにアクセスをします。
                         基本的にはアプリケーションの名前「Laravel」が格納されています。 --}}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                        </ul>
                    </div>
                </div>
            </nav>
            {{-- ここまでナビゲーションバー --}}

            <main class="py-4">
                {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
                 {{-- 「@◯◯」という記載のところは、メソッドを読み込んでいます。
                  @yieldは指定したセッションの内容を表示するために使用します。
                  今回であれば、contentというセッションの内容を表示します。
                  各ページごとにタイトルを変更できるようにするためです。--}}
                @yield('content')
            </main>
        </div>
    </body>
</html>