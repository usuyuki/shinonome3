@extends('layouts.shinonome_out_app')

@section('content')
<style>
    h1 {
        text-align: center;
        margin-bottom: 3px;
    }

    h2 {
        margin-top: 3px;
        text-align: center;
        font-weight: normal;
    }
</style>
<div class="main"></div>
<h1>リリースノート</h1>
<h2>release note</h2>
@include('components.release_message',['ver'=>'0.1','date'=>'2020.9.30','exp1'=>'α版をリリースしました','exp2'=>'','exp3'=>'','exp4'=>'',])

@endsection