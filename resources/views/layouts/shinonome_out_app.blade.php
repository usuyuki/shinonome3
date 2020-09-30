<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="description" content="しののめは朝に特化した朝限定のSNSです。" />
    <!-- ファビコン -->
    <meta name="msapplication-square70x70logo" content="/img/favicons/site-tile-70x70.png">
    <meta name="msapplication-square150x150logo" content="/img/favicons/site-tile-150x150.png">
    <meta name="msapplication-wide310x150logo" content="/img/favicons/site-tile-310x150.png">
    <meta name="msapplication-square310x310logo" content="/img/favicons/site-tile-310x310.png">
    <meta name="msapplication-TileColor" content="#0078d7">
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="/img/favicons/favicon.ico">
    <link rel="icon" type="image/vnd.microsoft.icon" href="/img/favicons/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="/img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="36x36" href="/img/favicons/android-chrome-36x36.png">
    <link rel="icon" type="image/png" sizes="48x48" href="/img/favicons/android-chrome-48x48.png">
    <link rel="icon" type="image/png" sizes="72x72" href="/img/favicons/android-chrome-72x72.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/favicons/android-chrome-96x96.png">
    <link rel="icon" type="image/png" sizes="128x128" href="/img/favicons/android-chrome-128x128.png">
    <link rel="icon" type="image/png" sizes="144x144" href="/img/favicons/android-chrome-144x144.png">
    <link rel="icon" type="image/png" sizes="152x152" href="/img/favicons/android-chrome-152x152.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/img/favicons/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="256x256" href="/img/favicons/android-chrome-256x256.png">
    <link rel="icon" type="image/png" sizes="384x384" href="/img/favicons/android-chrome-384x384.png">
    <link rel="icon" type="image/png" sizes="512x512" href="/img/favicons/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="36x36" href="/img/favicons/icon-36x36.png">
    <link rel="icon" type="image/png" sizes="48x48" href="/img/favicons/icon-48x48.png">
    <link rel="icon" type="image/png" sizes="72x72" href="/img/favicons/icon-72x72.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/favicons/icon-96x96.png">
    <link rel="icon" type="image/png" sizes="128x128" href="/img/favicons/icon-128x128.png">
    <link rel="icon" type="image/png" sizes="144x144" href="/img/favicons/icon-144x144.png">
    <link rel="icon" type="image/png" sizes="152x152" href="/img/favicons/icon-152x152.png">
    <link rel="icon" type="image/png" sizes="160x160" href="/img/favicons/icon-160x160.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/img/favicons/icon-192x192.png">
    <link rel="icon" type="image/png" sizes="196x196" href="/img/favicons/icon-196x196.png">
    <link rel="icon" type="image/png" sizes="256x256" href="/img/favicons/icon-256x256.png">
    <link rel="icon" type="image/png" sizes="384x384" href="/img/favicons/icon-384x384.png">
    <link rel="icon" type="image/png" sizes="512x512" href="/img/favicons/icon-512x512.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/icon-16x16.png">
    <link rel="icon" type="image/png" sizes="24x24" href="/img/favicons/icon-24x24.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/icon-32x32.png">
    <link rel="manifest" href="/img/favicons/manifest.json">

    <link href="/css/shinonome_out_app.css" rel="stylesheet">
</head>

<body>
    <!-- ヘッダー -->
    <header>
        @if (Route::has('login'))
        <div class="header-wrapper">
            <div class="header-logo">
                <a href="/">
                    <img src="/img/logos/しののめロゴ20200924.png" width="150px" height="32px" alt="しののめのロゴです" />
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
                        @csrf
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
        <div class="footer-menu">
            <ul>
                <div class="footer-menu-content">
                    <li>
                        <a href="">

                        </a>
                    </li>
                </div>

                <div class="footer-menu-content">
                    <li>
                        <a href="">

                        </a>
                    </li>
                </div>

                <div class="footer-menu-content">
                    <li>
                        <a href="">

                        </a>
                    </li>
                </div>

                <div class="footer-menu-content">
                    <li>
                        <a href="">

                        </a>
                    </li>
                </div>

                <div class="footer-menu-content">
                    <li>
                        <a href="">

                        </a>
                    </li>
                </div>

            </ul>
        </div>
        <div class="copyright">
            <p>copyright 2020 usuyuki.</p>
        </div>
    </footer>

</body>

</html>