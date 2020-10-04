@extends('layouts.shinonome_in_app')
@section('title','お問い合わせ/しののめ')
@section('content')
<style>
    iframe {
        margin: 40px 0;
    }
</style>

<div class="main-title">
    <h1><span class="orange-line">お問い合わせ</span></h1>
</div>

<div class="main-explain">
    <p>ご意見、ご感想、バグなどあれば下記フォームよりご連絡ください。<br>Googleフォームを利用させていただいております。</p>
    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeCLkxhixtECLovQOA38v9MiS7JwOcFmxZBjyGEwT5kUG5SCw/viewform?embedded=true" width="640" height="701" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>
</div>
@endsection