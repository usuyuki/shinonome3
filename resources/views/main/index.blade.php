<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta
            name="description"
            content="しののめは朝に特化した朝限定のSNSです。"
        />
    </head>
    <body>
        @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">あいさつページへ行く</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">ログイン</a>
        
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Twitterで会員登録</a>
            @endif
        @endif
        
        
        @endsection

    </body>
</html>
