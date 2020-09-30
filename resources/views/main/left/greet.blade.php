@extends('layouts.shinonome_in_app')
@section('title','あいさつ/しののめ')
@section('content')
<style>

</style>

<div class="main-title">
    <h1>あいさつ</h1>
</div>
@if (session('oauth_error'))
{{ session('oauth_error') }}
@endif
<div class="container mt-3">
    {!! Form::open(['route' => 'greet', 'method' => 'POST']) !!}
    {{ csrf_field() }}
    <div class="row mb-4">


        @guest
        @section('left')

        <div class="mx-auto">
            <a class="btn btn-primary" href="{{ route('login') }}">ログインしてあいさつする</a>
            <a class="btn btn-primary" href="{{ route('register') }}">新規登録してあいさつする</a>
        </div>
        @endsection
        @else
        {{ Form::text('greet', null, ['class' => 'form-control col-9 mr-auto']) }}
        {{ Form::submit('あいさつ', ['class' => 'btn btn-primary col-2']) }}

        @endguest

    </div>
    {{-- エラー表示 ここから --}}
    @if ($errors->has('greet'))
    <p class="alert alert-danger">{{ $errors->first('greet') }}</p>
    @endif
    {{-- エラー表示 ここまで --}}
    {!! Form::close() !!}
    {{-- あいさつ表示 --}}
    @foreach ($greets as $greet)
    <div class="mb-1">
        <strong>{{ $greet->name }}</strong> {{ $greet->created_at }}
    </div>
    <div class="pl-3">
        {{ $greet->greet }}
    </div>
    <hr>
    @endforeach
</div>
@endsection