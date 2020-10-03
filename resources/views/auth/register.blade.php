@extends('layouts.shinonome_in_app')
@section('title','Twitterで登録/しののめ')
@section('content')
<style>
    .btn-twitter-login {
        width: 170px;
        height: 45px;
        line-height: 45px;
        margin: 0 auto;
    }

    .btn-twitter-login a {
        display: block;
        width: 100%;
        height: 100%;
        text-decoration: none;
        background: #F7F7F7;
        text-align: center;
        border-left: 22px solid #00ACED;
        color: #00ACED;
        font-size: 20px;
        font-weight: bold;
        box-shadow: 0px 2px 2px 0px #DEDEDE;
        transition: all 0.2s ease;
    }

    .btn-twitter-login a:hover {
        background: #F7F7F7;
        color: #00ACED;
        margin-left: 0px;
        margin-top: 0px;
        border-left: 22px solid #FF8000;
        box-shadow: 0px 2px 2px 0px #DEDEDE;
    }

    p {
        text-align: center;
    }
</style>
<div class="main-title">
    <h1>会員登録</h1>
</div>
<p>現行バージョンではTwitterでの会員登録のみに対応しています。ご了承ください。</p>
<div class='btn-twitter-login'>
    <a href='./login/twitter'>Twitterで登録</a>
</div>


<p class="kome">※許可なくつぶやかれたり、ツイートを取得することはありません。</p>
<p>認証時に取得する情報についてはプライバシーポリシーをご覧ください</p>
@endsection