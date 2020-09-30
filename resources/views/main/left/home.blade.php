@extends('layouts.shinonome_in_app')
@section('title','ホーム/しののめ')
@section('content')
<style>
    .main-watch {
        /* margin: 0 auto; */
        text-align: center;
    }

    .main-watch h1 {
        font-size: 30px;
        font-weight: normal;
    }

    .UTC {
        margin: 20px auto;
    }

    .main-timezone {
        font-size: 28px;
    }

    .main-date {
        font-size: 28px;
    }
</style>

<div class="main-title">
    <h1>ホーム</h1>
</div>

<!-- <div class="main-explain">
    <p>工事中です。</p>
</div> -->

<div class="main-watch">
    <h1>現在時刻</h1>
    <div class="JST">

        <p id="Watch_main_JST">※読込中</p>
    </div>
    <div class="UTC">

        <p id="Watch_main_UTC">※読込中</p>
    </div>
</div>
<div class="sunrize">
    <h1>本日の日の出</h1>
</div>
<div class="aboutday">
    <h1>今日は何の日</h1>
</div>
@endsection