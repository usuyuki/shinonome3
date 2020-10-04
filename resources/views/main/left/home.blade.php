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
        margin-bottom: 30px;
    }

    .UTC {
        margin: 20px auto;
    }

    .main-timezone {
        font-size: 20px;
    }

    .main-date {
        font-size: 28px;
    }

    .sunrise-wrapper {
        margin-top: 120px;
    }

    .sunrise-wrapper h1 {

        font-weight: normal;
        text-align: center;


    }

    .sunrise {

        text-align: center;
        justify-content: center;

    }

    .sunrise-content {
        width: auto;
        margin: 0 40px;
        text-align: center;
        /* border: 1px solid #E7E224; */
        display: inline-block;
    }

    .aboutday {
        margin-top: 120px;
    }

    .aboutday h1 {
        text-align: center;
        font-weight: normal;
    }
</style>

<div class="main-title">
    <h1><span class="orange-line">ホーム</span></h1>
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

<div class="sunrise-wrapper">
    <h1>本日の日の出</h1>
    <div class="sunrise">

        <div class="sunrise-content">
            <div class="sunrise-city">
                <h3>那覇</h3>
            </div>
            <div class="sunrise-time">
                <h4>{{$sunrise_naha}}</h4>
            </div>
        </div>

        <div class="sunrise-content">
            <div class="sunrise-city">
                <h3>東京</h3>
            </div>
            <div class="sunrise-time">
                <h4>{{$sunrise_tokyo}}</h4>
            </div>
        </div>

        <div class="sunrise-content">
            <div class="sunrise-city">
                <h3>札幌</h3>
            </div>
            <div class="sunrise-time">
                <h4>{{$sunrise_sapporo}}</h4>
            </div>
        </div>
    </div>
    <P class="kome">※数分の誤差があります。</P>
</div>

<div class="aboutday">
    <h1>今日は何の日</h1>
</div>
@endsection