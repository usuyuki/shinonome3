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

    <!-- CSS読み込み -->
    <link href="/css/shinonome_in_app.css" rel="stylesheet">
    <!-- JS読み込み -->
    <script type="text/javascript" src="/js/shinonomeapp.js"></script>
    <!-- 時計表示用 -->
</head>

<body>



    <div class="container">
        <!-- 中央 -->
        <main class="main">
            <!-- メインコンテンツ -->
            @yield('content')
        </main>

        <!-- 左サイドバー-->
        <div class="left_sidebar">
            <div class="left_sidebar__item">
                <!-- 中身 -->
                <div class="logo">
                    <a href="{{ url('/greet') }}">
                        <img src="/img/logos/しののめロゴ20200924.png" width="200px" height="80px" class="logo" alt="しののめのロゴです" />
                    </a>
                </div>
                <div class="left-menu">
                    <ul>
                        <li>
                            <div class="left-menu-content">

                                <a href="/home">
                                    <div class="menu-icon">
                                        <img src="/img/icons/home-24px.svg" alt="ホームアイコン">

                                    </div>
                                    <div class="menu-letter">
                                        <p>ホーム</p>

                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="left-menu-content">

                                <a href="/greet">
                                    <div class="menu-icon">
                                        <img src="/img/icons/wb_sunny-24px.svg" alt="あいさつアイコン">

                                    </div>
                                    <div class="menu-letter">
                                        <p>あいさつ</p>

                                    </div>
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="left-menu-content">

                                <a href="/directmessage">
                                    <div class="menu-icon">
                                        <img src="/img/icons/chat_bubble-24px.svg" alt="コチャアイコン">

                                    </div>
                                    <div class="menu-letter">
                                        <p>コチャ</p>

                                    </div>
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="left-menu-content">

                                <a href="/setting">
                                    <div class="menu-icon">
                                        <img src="/img/icons/person_pin-24px.svg" alt="設定アイコン">

                                    </div>
                                    <div class="menu-letter">
                                        <p>プロフィールと設定</p>

                                    </div>
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="left-menu-content">

                                <a href="/history">
                                    <div class="menu-icon">
                                        <img src="/img/icons/history_edu-24px.svg" alt="ヒストリーアイコン">

                                    </div>
                                    <div class="menu-letter">
                                        <p>ヒストリーと起床時間</p>

                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                @if (Route::has('login'))
                @auth
                <img class="profile_photo" src="{{ Auth::user()->profile_photo_path }}" />
                {{ Auth::user()->name }}
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __("Logout") }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @endif
                @endif
                @yield('left')
            </div>
        </div>

        <!-- 右サイドバー-->
        <div class="right_sidebar">
            <div class="right_sidebar__item">
                <!-- 中身 -->
                <div class="time">

                    <div class="watch">
                        <p id="RealtimeClockArea2">※読込中</p>
                    </div>
                    <div class="countdown">
                        <p>この下に終了時刻までのカウントダウンが入る予定です。<br>α,β版では時間制限を行いません。</p>
                    </div>
                </div>
                <div class="right-menu">
                    <ul>


                        <div class="right-menu-content">
                            <li>
                                <a href="/privacypolicy">プライバイシーポリシー</a>
                            </li>
                        </div>

                        <div class="right-menu-content">
                            <li>
                                <a href="/explain">ご利用にあたって</a>
                            </li>
                        </div>

                        <div class="right-menu-content">
                            <li>
                                <a href="/">しののめの使い方</a>
                            </li>
                        </div>

                        <div class="right-menu-content">
                            <li>
                                <a href="/contact">お問い合わせ</a>
                            </li>
                        </div>

                        <div class="right-menu-content">
                            <li>
                                <a href="/release">リリースノート</a>
                            </li>
                        </div>
                        <div class="right-menu-content">
                            <li>
                                <p>copyright 2020 usuyuki.</p>
                            </li>
                        </div>
                    </ul>
                </div>



                @yield('right')
            </div>
        </div>
    </div>

</body>

</html>