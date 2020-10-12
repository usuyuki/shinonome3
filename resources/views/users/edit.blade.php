{{-- @extends('layouts.app') --}}
@extends('layouts.shinonome_in_app')
@section('title','ユーザー編集/しののめ')

@section('content')
<div class="main-title">
    <h1><span class="orange-line">ユーザー編集</span></h1>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update</div>

                <div class="card-body">
                    <form method="POST" action="/users/ {{$user->id }}" >
                        @csrf
                        @method('PUT')

                        {{-- ユーザー画像の変更はなし。 --}}
                        {{-- <div class="form-group row align-items-center">
                            <label for="profile_photo_path" class="col-md-4 col-form-label text-md-right">画像</label>

                            <div class="col-md-6 d-flex align-items-center">
                                <img src="{{ asset('storage/profile_photo_path/' .$user->profile_photo_path) }}" class="mr-2 rounded-circle" width="80" height="80" alt="profile_photo_path">
                                <input type="file" name="profile_photo_path" class="@error('profile_photo_path') is-invalid @enderror" autocomplete="profile_photo_path">

                                @error('profile_photo_path')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div> --}}

                        {{-- 自己紹介 --}}
                        <div class="form-group row">
                            <label for="profile_photo_path" class="col-md-4 col-form-label text-md-right">自己紹介</label>

                            <div class="col-md-6">
                                <!-- <input id="profile_photo_path" type="text"  name="explain" value="{{ $user->explain }}" required autocomplete="explain" autofocus> -->
                                <textarea id="profile_photo_path" class="form-control @error('explain') is-invalid @enderror" cols="120" rows="20" class="moziwaku" name="explain" maxlength="99999" autocomplete="explain" autofocus>{{$user->explain}}</textarea>
                                @error('explain')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div> -->

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">更新する</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection