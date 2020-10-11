{{-- @extends('layouts.app') --}}
@extends('layouts.shinonome_in_app')
@section('title','ユーザー一覧/しののめ')

@section('content')
<div class="main-title">
    <h1><span class="orange-line">ユーザー一覧(自身を除く)</span></h1>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($all_users as $user)
            <div class="card">
                <div class="card-haeder p-3 w-100 d-flex">
                    <img src="{{ $user->profile_photo_path}}" class="rounded-circle" width="50" height="50">
                    <div class="ml-2 d-flex flex-column">
                        <p class="mb-0">{{ $user->name }}</p>
                        <a href="/users/{{$user->id}}" class="text-secondary">{{ $user->explain }}</a>
                    </div>
                    <!-- フォローされているか -->
                    @if (auth()->user()->isFollowed($user->id))

                    <div class="px-2">
                        <span class="px-1 bg-secondary text-light">フォローされています</span>
                    </div>
                    @endif
                    <div class="d-flex justify-content-end flex-grow-1">
                        <!-- フォローしているか -->
                        @if (auth()->user()->isFollowing($user->id))
                        <form action="{{ route('unfollow', ['user' => $user->id])  }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type="submit" class="btn btn-danger">フォロー解除</button>
                        </form>
                        @else
                        <form action="{{ route('follow', ['user' => $user->id]) }}" method="POST">
                            {{ csrf_field() }}

                            <button type="submit" class="btn btn-primary">フォローする</button>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="my-4 d-flex justify-content-center">
        {{ $all_users->links() }}
    </div>
</div>
@endsection