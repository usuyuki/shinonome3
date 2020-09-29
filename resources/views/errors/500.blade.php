@extends('layouts.shinonome_out_app')
@section('title','しののめ')



@section('content')
<style>
    .waku {
        padding: 0.5em 1em;
        margin: 2em 0;
        font-weight: bold;
        color: black;
        /*文字色*/
        background: #FFF;
        border: solid 3px red;
        /*線*/
        border-radius: 10px;
        /*角の丸み*/
        /* float: left; */
    }
</style>

<div class="waku">
    <p>500 エラーです。サーバー皮の処理やコードに問題があります。</p>
</div>

@endsection