@extends('layouts.shinonome_in_app')
@section('title','リリースノート/しののめ')
@section('content')
<style>
    h2 {
        margin-top: 3px;
        text-align: center;
        font-weight: normal;
    }
</style>

<div class="main-title">
    <h1>リリースノート</h1>
</div>

<h2>release note</h2>

@include('components.release_message',['ver'=>'0.3','date'=>'2020.10.4','exp1'=>'・プライバシーポリシー、しののめについてのページを更新しました','exp3'=>'あいさつページでユーザーの画像表示を追加しました','exp2'=>'・プロフィールと設定で名前と自己紹介ができるようになりました','exp3'=>'・しののめについてページに言葉を追加しました','exp4'=>'',])


@include('components.release_message',['ver'=>'0.2','date'=>'2020.10.4','exp1'=>'・ログイン時のページをTwitter認証に限定し、レイアウトも独自のものに変更しました','exp2'=>'・左サイドバーのレイアウト崩壊を修正しました','exp3'=>'','exp4'=>'',])

@include('components.release_message',['ver'=>'0.1','date'=>'2020.9.30','exp1'=>'・α版をリリースしました','exp2'=>'','exp3'=>'','exp4'=>'',])

@endsection