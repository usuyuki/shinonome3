@extends('layouts.shinonome_in_app')
@section('title','設定/しののめ')
@section('content')
<style>
    .setting-wrapper {
        flex-direction: column;
    }


    .set-user-icon img {
        width: 60%;
        height: auto;
        float: left;
    }


    .set-user-icon a {
        display: block;
        text-decoration: none;
        width: 180px;
        padding: 0.3em;
        margin-left: 100px;
        margin-top: 50px;
        text-align: center;
        color: #30736A;
        background: #fff;
        border: 1px solid #30736A;
    }

    .set-user-icon:hover a {
        background: #30736A;
        color: #fff;
        cursor: pointer;
        text-decoration: none;
    }


    .set-user-icon {
        width: 160px;
        height: 160px;
        border: 1px solid green;
        margin: 20px auto;
    }

    .set-user-name {
        padding-top: 40px;
        margin: 20px auto;
        border: 1px solid green;
    }

    .set-user-description {
        padding-top: 40px;
        margin: 20px auto;
        border: 1px solid green;
    }

    .user-detail {
        padding-top: 40px;
        text-align: right;
        margin: 20px auto;
        border: 1px solid green;
    }
</style>

<div class="main-title">
    <h1><span class="orange-line">プロフィールと設定</span></h1>
</div>

<div class="setting-wrapper">
    <div class="set-user-icon">
        <img src="{{$user->profile_photo_path}}" alt="あなたのアイコンです">
        <a>アイコンを変える</a>
    </div>
    <div class="set-user-name">
    </div>
    <div class="set-user-description">

    </div>
    <div class="user-detail">
        <p>あなたの「しののめ」id:{{$user->id}}</p>
        <p>あなたの「しののめ」登録日:{{$user->created_at}}</p>
    </div>
</div>
@endsection