<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta
            name="description"
            content="しののめは朝に特化した朝限定のSNSです。"
        />
        <style>
        header{
            width:100%;
            height:80px;
            background-color:#C7EEDB;
        }
        .header
        .greet{
            
        }
        
        
        </style>
    </head>
    <body>
    <!-- ヘッダー -->
    <header>
    @if (Route::has('login'))
        <div class="header-wrapper">
            <div class="header-logo">
                <img  src="/img/logos/しののめロゴ20200924.png" width="150px" height="60px" alt="しののめのロゴです" />
            </div>
            @auth
            <div class="greet">
            <ul>
                <li>
                    <a href="{{ url('/greet') }}" >あいさつページへ</a>
                </li>
                <li>
                <!-- ログアウト処理 -->
                <a
                        class="dropdown-item"
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                    >
                        {{ __("Logout") }}
                    </a>
                    <form
                        id="logout-form"
                        action="{{ route('logout') }}"
                        method="POST"
                        style="display: none;"
                    >
                        @csrf
                    </form>
                </li>
            </div>
            @else
            <div class="login">
            <ul>
                <li>
                    <a href="{{ route('login') }}" >ログイン</a>
                </li>
                <li>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" >新規登録</a>
                </li>
            </ul>
            </div>
                    @endif
            @endif
        </div>
    @endif
    </header>

    <!-- メインコンテンツ -->
    <div class="main">
    @yield('content')
    </div>


    <!-- フッター -->
    <footer>
    
    </footer>

    </body>
</html>
