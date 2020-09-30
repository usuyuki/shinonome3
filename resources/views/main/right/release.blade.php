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
@include('components.release_message',['ver'=>'0.1','date'=>'2020.9.30','exp1'=>'α版をリリースしました','exp2'=>'','exp3'=>'','exp4'=>'',])

@endsection