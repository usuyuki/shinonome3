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
    <h1><span class="orange-line">リリースノート</span></h1>
</div>

<h2>release note</h2>


{{-- @include('components.release_message',['ver'=>'0','date'=>'2020.','exp1'=>'・','exp2'=>'・','exp3'=>'・','exp4'=>'・',]) --}}
@include('components.release_message',['ver'=>'0.5','date'=>'2020.10.11','exp1'=>'・ログアウトできないバクの改善が見込まれないため一時的に廃止しました','exp2'=>'・参考サイトの一部記載を追加しました','exp3'=>'・技術的な改善(Sassの試験利用)をはじめました','exp4'=>'',])


@include('components.release_message',['ver'=>'0.4','date'=>'2020.10.11','exp1'=>'・あいさつページの大幅機能変更(フォローしたユーザーのみ表示)','exp2'=>'・フォロー機能追加','exp3'=>'・個人ページ追加','exp4'=>'・あいさつにいいねできる機能追加',])

@include('components.release_message',['ver'=>'0.3','date'=>'2020.10.4','exp1'=>'・プライバシーポリシー、しののめについてのページを更新しました','exp2'=>'・プロフィールと設定で名前と自己紹介ができるようになりました','exp3'=>'・しののめについてページに言葉を追加しました','exp4'=>'・一部ページをログイン状態でないと閲覧できない仕様にしました',])


@include('components.release_message',['ver'=>'0.2','date'=>'2020.10.4','exp1'=>'・ログイン時のページをTwitter認証に限定し、レイアウトも独自のものに変更しました','exp2'=>'・左サイドバーのレイアウト崩壊を修正しました','exp3'=>'','exp4'=>'',])

@include('components.release_message',['ver'=>'0.1','date'=>'2020.9.30','exp1'=>'・α版をリリースしました','exp2'=>'','exp3'=>'','exp4'=>'',])

@endsection