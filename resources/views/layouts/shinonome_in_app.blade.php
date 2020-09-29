<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="description" content="しののめは朝に特化した朝限定のSNSです。" />
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
                <p>右サイドバーふれっくす</p>
                <p id="RealtimeClockArea2">※読込中</p>

                @yield('right')
            </div>
        </div>
    </div>

</body>

</html>