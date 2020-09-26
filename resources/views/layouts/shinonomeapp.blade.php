<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="description" content="しののめは朝に特化した朝限定のSNSです。">
        <style>
        .container {
        width: 1000px;
        display: -webkit-flex;
        display: flex;
        }
        /* メインコンテンツ */
        .main {
        display: block;
        width: 660px;
        margin-right: 20px;
        background-color: pink;
        }
        /* 左サイドバー */
        .left_sidebar {
        margin:0 0 0 auto;
        width: 320px;
        background-color: green;
        }
        .left_sidebar__item {
        margin-bottom: 20px;
        }
        .left_sidebar__item--fixed {
        position: sticky;
        margin-bottom: 0;
        top: 10px;
        z-index: 1;
        }
        /* 右サイドバー */
        .right_sidebar {
        width: 320px;
        background-color: blue;
        }
        .right_sidebar__item {
        margin-bottom: 20px;
        }
        .right_sidebar__item--fixed {
        position: sticky;
        margin-bottom: 0;
        top: 10px;
        z-index: 1;
        }

            /* .container{
                width: 1000px;
                display: -webkit-flex;
                display: flex;
            }
            .rightNavigation{
                flex: 3;
                text-align: center;
                background-color: #888;
                color: #fff;
            }

            .leftNavigation{
                flex: 1;
                text-align: center;
                background-color: #888;
                color: #fff;
            }
            .content{
                text-align: center;
            } */
        </style>
    </head>
    <body>
    <div class="container">

        <main class="main">
            <!-- メインコンテンツ -->
            @yield('main')
        </main>

        <!-- 左サイドバー-->
        <div class="left_sidebar">
            <div class="left_sidebar__item">
            <!-- 中身 -->
            <p>左サイドバーふれっくす</p>
            @yield('left')
            </div>
            <div class="right_sidebar__item sidebar__item--fixed">
            <!-- 固定・追従させたいエリア -->
            <p>左サイドバーこてい</p>
            </div>
        </div>

        <!-- 右サイドバー-->
        <div class="right_sidebar">
            <div class="right_sidebar__item">
            <!-- 中身 -->
            <p>右サイドバーふれっくす</p>
            @yield('right')
            </div>
            <div class="right_sidebar__item sidebar__item--fixed">
            <!-- 固定・追従させたいエリア -->
            <p>右サイドバーこてい</p>
            </div>
        </div>

    </div>
        <!-- <div class="container">
        @section('right')
            <div class="rightNavigation">
            @yield('right')
                <p>right</p>

            </div>
        @section('left')
            <div class="leftNavigation">
            @yield('right')
                <p>left</p>

            </div>
        @section('content')
            <div class="content">
            @yield('content')
            </div>
        </div> -->
    </body>
</html>