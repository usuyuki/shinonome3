@extends('layouts.shinonome_in_app')
@section('title','あいさつ/しののめ')
@section('content')
<style>
    .container-mt-3 {
        margin: 0 auto;
    }

    .row-mb-4 {
        width: 100%;
        /* float: botto; */
        display: block;
    }

    .greet-wrapper {
        width: 100%;
    }

    .submit-letter input {
        width: 500px;
        display: flex;
        margin: 0 auto;
    }

    .submit-btn {
        text-align: right;


    }

    .btn {
        display: inline-block;
        border-radius: 5%;
        /* 角丸       */
        font-size: 18pt;
        /* 文字サイズ */
        text-align: center;
        /* 文字位置   */
        cursor: pointer;
        /* カーソル   */
        padding: 12px 12px;
        /* 余白       */
        background: #ff8000;
        /* 背景色     */
        color: #ffffff;
        /* 文字色     */
        line-height: 1em;
        /* 1行の高さ  */
        transition: .3s;
        /* なめらか変化 */
        box-shadow: 6px 6px 3px #666666;
        /* 影の設定 */
        border: 2px solid #ff8000;
        /* 枠の指定 */
    }

    .btn:hover {
        box-shadow: none;
        /* カーソル時の影消去 */
        color: #ff8000;
        /* 背景色     */
        background: #ffffff;
        /* 文字色     */
    }
</style>

<div class="main-title">
    <h1>あいさつ</h1>
</div>
@if (session('oauth_error'))
{{ session('oauth_error') }}
@endif
<div class="container-mt-3">
    {!! Form::open(['route' => 'greet', 'method' => 'POST']) !!}
    {{ csrf_field() }}
    <div class="row-mb-4">


        @guest
        @else
        <div class="submit-letter">
            {{ Form::text('greet', null, ['class' => 'form-control col-9 mr-auto']) }}

        </div>
        <div class="submit-btn">

            {{ Form::submit('あいさつ', ['class' => 'btn btn-primary col-2']) }}
        </div>

        @endguest

    </div>
    {{-- エラー表示 ここから --}}
    @if ($errors->has('greet'))
    <p class="alert alert-danger">{{ $errors->first('greet') }}</p>
    @endif
    {{-- エラー表示 ここまで --}}
    {!! Form::close() !!}
    {{-- あいさつ表示 --}}
    <div class="greet-wrapper">
        @foreach ($greets as $greet)
        <div class="greet-content">
            <div class="mb-1">
                <strong>{{ $greet->name }}</strong> {{ $greet->created_at }}
            </div>
            <div class="pl-3">
                {{ $greet->greet }}
            </div>
        </div>
        <hr>
        @endforeach
    </div>
</div>
@endsection