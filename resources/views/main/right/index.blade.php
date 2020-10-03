@extends('layouts.shinonome_in_app')
@section('title','しののめ')
@section('content')
<style>
    .background-image {
        margin: 0 auto;
        height: 700px;
        background-image: url(/img/background/breakfast.jpg);
        background-size: cover;
    }

    .main-explain {
        text-align: center;
    }

    .main-about {
        text-align: center;
    }

    .main-about {}

    .main-title-top {
        margin: 80px auto;
    }

    .main-title-top h1 {
        text-align: center;
        font-size: 30px;
        font-family: "Hannari";

    }
</style>
<div class="background-image">

    <div class="main-title-top">
        <h1>しののめへようこそ</h1>
    </div>
    <div class="main-about">
        <P>しののめは朝に特化した朝限定のSNSです。</P>
    </div>
</div>
<div class="main-explain">
    <h2>使い方</h2>
    <p>申し訳ありません。準備中です。</p>
</div>
@endsection