@extends('layouts.shinonome_in_app')
@section('title','404/しののめ')



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
        text-align: center;
    }
    img{
        margin:20px auto;
    }
</style>

<div class="waku">
    <p>404 エラーです。このページは存在しません。</p>
    
    <img src="/img/errors/coffee.jpg" width="600px" height="399px">
</div>

@endsection