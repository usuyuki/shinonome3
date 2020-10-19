<!DOCTYPE html>
<html>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-179296536-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-179296536-1');

    </script>

    <meta charset="utf-8">

    <title>@yield('title')</title>
    <meta name="description" content="しののめは朝に特化した朝限定のSNSです。" />

    <!-- レスポンシブデザインのためのビューポート -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> --}}
    <!-- Bootstrap読み込み -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <!-- JS読み込み -->
    <script type="text/javascript" src="/js/shinonomeapp.js"></script>
    <!-- ハンバーガーメニュー用 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(function () {
            $('.Toggle').click(function () {
                $(this).toggleClass('active');
                $('.menu').toggleClass('open');
            });
        });

    </script>

    <!-- Googleフォント-->
    <link href="https://fonts.googleapis.com/earlyaccess/hannari.css" rel="stylesheet">
    <!-- font-family: "Hannari";  -->
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@500&display=swap" rel="stylesheet">
    <!-- font-family: 'M PLUS Rounded 1c', sans-serif; -->
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">
    <!-- font-family: 'M PLUS 1p', sans-serif; -->
    <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Mincho&display=swap" rel="stylesheet">
    <!-- font-family: 'Sawarabi Mincho', sans-serif; -->

</head>

<body>


    <div class="container">
        <!-- 中央 -->
        <main class="main">


            <!-- スマホページのためのハンバーガーメニュー -->
            <!-- ドロワーエリア -->
            <div class="l-drawer">
                <!-- スマホページのためのロゴ -->
                <div class="l-drawer__logo">
                    <a href='/greet'>
                        <img src="/img/logos/しののめロゴ20200924.png" width="150px" height="32px" class="logo"
                            alt="しののめのロゴです">
                    </a>
                </div>
                <input class="l-drawer__checkbox" id="drawerCheckbox" type="checkbox">
                <!-- ドロワーアイコン -->
                <label class="l-drawer__icon" for="drawerCheckbox">
                    <span class="l-drawer__icon-parts"></span>
                </label>
                <!-- 背景を暗く -->
                <label class="l-drawer__overlay" for="drawerCheckbox"></label>
                <!-- ドロワーメニュー -->
                <nav class="l-drawer__menu">
                    <ul>
                        <li class="l-drawer__item">
                            <a class="l-drawer__item-inner" href="/privacypolicy">プライバシーポリシー</a>
                        </li>

                        <li class="l-drawer__item">
                            <a class="l-drawer__item-inner" href="/explain">ご利用にあたって</a>
                        </li>

                        <li class="l-drawer__item">
                            <a class="l-drawer__item-inner" href="/">しののめについて</a>
                        </li>

                        <li class="l-drawer__item">
                            <a class="l-drawer__item-inner" href="/contact">お問い合わせ</a>

                        </li>
                        <li class="l-drawer__item">
                            <a class="l-drawer__item-inner" href="/release">リリースノート</a>

                        </li>
                        <li class="l-drawer__item">
                            <a class="l-drawer__item-inner" href="/users">ユーザー一覧</a>
                        </li>
                        <li class="l-drawer__item">
                            <a class="l-drawer__item-inner">copyright 2020 usuyuki.</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- /ドロワーメニュー -->



            <!-- メインコンテンツ -->
            @yield('content')

            <!-- ボトムメニュー -->
            <div class="bottom_menu">
                <ul>
                    <li>


                        <a href="/home">
                            <div class="bottom_menu__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 0 24 24" width="40">
                                    <path d="M0 0h24v24H0z" fill="none" />
                                    <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" /></svg>
                            </div>
                        </a>

                    </li>
                    <li>


                        <a href="/greet">
                        {{-- <a href="/greet/all"> --}}
                            <div class="bottom_menu__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 0 24 24" width="40">
                                    <path d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M6.76 4.84l-1.8-1.79-1.41 1.41 1.79 1.79 1.42-1.41zM4 10.5H1v2h3v-2zm9-9.95h-2V3.5h2V.55zm7.45 3.91l-1.41-1.41-1.79 1.79 1.41 1.41 1.79-1.79zm-3.21 13.7l1.79 1.8 1.41-1.41-1.8-1.79-1.4 1.4zM20 10.5v2h3v-2h-3zm-8-5c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm-1 16.95h2V19.5h-2v2.95zm-7.45-3.91l1.41 1.41 1.79-1.8-1.41-1.41-1.79 1.8z" />
                                </svg>

                            </div>
                        </a>

                    </li>

                    <li>


                        <a href="/directmessage">
                            <div class="bottom_menu__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 0 24 24" width="40">
                                    <path d="M0 0h24v24H0z" fill="none" />
                                    <path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z" />
                                </svg>

                            </div>
                        </a>

                    </li>

                    <li>


                        <a href="/setting">
                            <div class="bottom_menu__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 0 24 24" width="40">
                                    <path d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M12 2c-4.97 0-9 4.03-9 9 0 4.17 2.84 7.67 6.69 8.69L12 22l2.31-2.31C18.16 18.67 21 15.17 21 11c0-4.97-4.03-9-9-9zm0 2c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.3c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z" />
                                </svg>

                            </div>
                        </a>

                    </li>

                    <li>


                        <a href="/record">
                            <div class="bottom_menu__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="40"
                                    viewBox="0 0 24 24" width="40">
                                    <g>
                                        <rect fill="none" height="24" width="24" />
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M9,4v1.38c-0.83-0.33-1.72-0.5-2.61-0.5c-1.79,0-3.58,0.68-4.95,2.05l3.33,3.33h1.11v1.11c0.86,0.86,1.98,1.31,3.11,1.36 V15H6v3c0,1.1,0.9,2,2,2h10c1.66,0,3-1.34,3-3V4H9z M7.89,10.41V8.26H5.61L4.57,7.22C5.14,7,5.76,6.88,6.39,6.88 c1.34,0,2.59,0.52,3.54,1.46l1.41,1.41l-0.2,0.2c-0.51,0.51-1.19,0.8-1.92,0.8C8.75,10.75,8.29,10.63,7.89,10.41z M19,17 c0,0.55-0.45,1-1,1s-1-0.45-1-1v-2h-6v-2.59c0.57-0.23,1.1-0.57,1.56-1.03l0.2-0.2L15.59,14H17v-1.41l-6-5.97V6h8V17z" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </a>

                    </li>



                </ul>
            </div>
        </main>

        <!-- 左サイドバー-->
        <div class="left_sidebar">
            <div class="left_sidebar__item">
                <!-- 中身 -->
                <div class="logo">
                    <a href='/greet'>
                        <img src="/img/logos/しののめロゴ20200924.png" width="150px" height="32px" class="logo"
                            alt="しののめのロゴです">
                    </a>
                </div>
                <div class="left-menu">
                    <ul>
                        <li>
                            <div class="left-menu-content">

                                <a href="/home">
                                    <div class="menu-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 0 24 24"
                                            width="40">
                                            <path d="M0 0h24v24H0z" fill="none" />
                                            <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" /></svg>

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
                                {{-- <a href="/greet/all"> --}}
                                    <div class="menu-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 0 24 24"
                                            width="40">
                                            <path d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M6.76 4.84l-1.8-1.79-1.41 1.41 1.79 1.79 1.42-1.41zM4 10.5H1v2h3v-2zm9-9.95h-2V3.5h2V.55zm7.45 3.91l-1.41-1.41-1.79 1.79 1.41 1.41 1.79-1.79zm-3.21 13.7l1.79 1.8 1.41-1.41-1.8-1.79-1.4 1.4zM20 10.5v2h3v-2h-3zm-8-5c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm-1 16.95h2V19.5h-2v2.95zm-7.45-3.91l1.41 1.41 1.79-1.8-1.41-1.41-1.79 1.8z" />
                                        </svg>

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
                                        <svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 0 24 24"
                                            width="40">
                                            <path d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z" />
                                        </svg>

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
                                        <svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 0 24 24"
                                            width="40">
                                            <path d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M12 2c-4.97 0-9 4.03-9 9 0 4.17 2.84 7.67 6.69 8.69L12 22l2.31-2.31C18.16 18.67 21 15.17 21 11c0-4.97-4.03-9-9-9zm0 2c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.3c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z" />
                                        </svg>

                                    </div>
                                    <div class="menu-letter">
                                        <p>プロフィール<br>設定</p>

                                    </div>
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="left-menu-content">

                                <a href="/record">
                                    <div class="menu-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                            height="40" viewBox="0 0 24 24" width="40">
                                            <g>
                                                <rect fill="none" height="24" width="24" />
                                            </g>
                                            <g>
                                                <g>
                                                    <path
                                                        d="M9,4v1.38c-0.83-0.33-1.72-0.5-2.61-0.5c-1.79,0-3.58,0.68-4.95,2.05l3.33,3.33h1.11v1.11c0.86,0.86,1.98,1.31,3.11,1.36 V15H6v3c0,1.1,0.9,2,2,2h10c1.66,0,3-1.34,3-3V4H9z M7.89,10.41V8.26H5.61L4.57,7.22C5.14,7,5.76,6.88,6.39,6.88 c1.34,0,2.59,0.52,3.54,1.46l1.41,1.41l-0.2,0.2c-0.51,0.51-1.19,0.8-1.92,0.8C8.75,10.75,8.29,10.63,7.89,10.41z M19,17 c0,0.55-0.45,1-1,1s-1-0.45-1-1v-2h-6v-2.59c0.57-0.23,1.1-0.57,1.56-1.03l0.2-0.2L15.59,14H17v-1.41l-6-5.97V6h8V17z" />
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="menu-letter">
                                        <p>ヒストリー<br>起床時間</p>

                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="user">
                    @guest
                        <div class="login-btn">
                            <a href="{{ route('login') }}">ログインしてあいさつする<br></a>
                        </div>
                        <p> </p>
                        <div class="register-btn">

                            <a href="{{ route('register') }}">新規登録してあいさつする</a>
                        </div>

                    @else
                        <div class="user-icon">
                            {{-- <img src="{{ asset($user->profile_photo_path) }}"
                            class="rounded-circle" width="50" height="50"> --}}
                            <a href="/users/{{ Auth::user()->id }}" class="text-secondary">
                                <img class="user-icon-img" src="{{ Auth::user()->profile_photo_path }}" />
                            </a>
                        </div>

                        <div class="user-name">
                            <p>
                                {{ Auth::user()->name }}
                            </p>
                        </div>
                        <div class="logout-btn">

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a href="#">準備中</a>
                                {{-- <a href="{{ route('logout') }}"
                                class="dropdown-item" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                ログアウト
                                </a> --}}

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>

                    @endguest

                    @yield('left')
                </div>
            </div>
        </div>

        <!-- 右サイドバー-->
        <div class="right_sidebar">
            <div class="right_sidebar__item">
                <!-- 中身 -->
                <div class="time">

                    <div class="right-watch">
                        <p id="Watch_right">※読込中</p>
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
                                <a href="/">しののめについて</a>
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
                                <a href="/users">ユーザー一覧</a>
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
