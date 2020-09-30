@extends('layouts.shinonome_in_app')
@section('title','プライバイシーポリシー/しののめ')
@section('content')
<style>
    p {
        text-align: center;
    }
</style>

<div class="main-title">
    <h1>プライバイシーポリシー</h1>
</div>

<div class="main-explain">

    @include('components.explain',
    ['title'=>'プライバイシーポリシー',
    'explain'=>'準備中です。
    '])
</div>
@endsection