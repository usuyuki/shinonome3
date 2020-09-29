<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="description" content="しののめは朝に特化した朝限定のSNSです。" />

    <link href="/css/shinonome_out_app.css" rel="stylesheet">
</head>

<body>
    <!-- ヘッダー -->
    <header>
        @if (Route::has('login'))
        <div class="header-wrapper">
            <div class="header-logo">
                <a href="/">
                    <img src="/img/logos/しののめロゴ20200924.png" width="150px" height="60px" alt="しののめのロゴです" />
                </a>
            </div>
            @auth
            <div class="greet">
                <ul>
                    <li>
                        <a href="{{ url('/greet') }}">あいさつページへ</a>
                    </li>
                    <li>
                        <!-- ログアウト処理 -->
                    <li class="nav-item dropdown">
                        <!-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a> -->
                        @guest
                        @else
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                ログアウト
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
            @else
            <div class="login">
                <ul>
                    <li>
                        <a href="{{ route('login') }}">ログイン</a>
                    </li>
                    <li>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}">新規登録</a>
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