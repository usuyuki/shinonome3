@extends('layouts.shinonome_in_app')
@section('title','しののめ')
@section('content')
<style>
    .background-image {
        margin: 0 auto;
        height: 700px;
        background-image: url(/img/background/breakfast.jpg);
        background-size: cover;
        position: relative;
    }

    .main-explain {
        text-align: center;
    }

    .main-about {
        text-align: center;

    }

    .main-about p {
        font-weight: bold;
        font-size: 20px;
    }

    .main-details {
        text-align: center;
        padding: 20px 0;
        background-color: rgba(256, 256, 256, 0.5);

    }

    .main-title-top {
        margin: 80px auto;

    }

    .main-title-top h1 {
        text-align: center;
        font-size: 30px;
        font-family: "Hannari";

    }

    .main-logo {
        position: absolute;
        right: 40px;
        bottom: 20px;
    }
</style>
<div class="background-image">

    <div class="main-title-top">
        <h1>しののめへようこそ</h1>
    </div>
    <div class="main-about">
        <p>しののめは朝に特化した朝限定のSNSです。</p>
    </div>
    <div class="main-details">
        <p>現在は掲示板としての機能しかありませんが、今後は起床時間の記録や、DM機能も実装予定です。</p>
        <p>また現状はPCページのみですが、今後はスマートフォン向けページも用意する予定です。</p>
    </div>
    <div class="main-logo">
        <img src="/img/logos/しののめロゴ20200924.png" width="150px" height="32px" class="logo" alt="しののめのロゴです" />

    </div>
</div>
<div class="main-explain">
    <h2>使い方</h2>
    <div class="explain-1">
        <h3>1.Twitterで会員登録</h3>
        <p>左の「」</p>
    </div>

</div>
@endsection