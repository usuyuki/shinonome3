{{-- @extends('layouts.app') --}}
@extends('layouts.shinonome_in_app')
@section('title','ユーザー一覧/しののめ')
@section('content')
<style>
.user-all-wrapper{
    width:800px;
    margin:0 20px;
}

.follow-btn button{

width: 150px;
padding: 0.3em;


color: #1b1b1b;
background: #fff;
border: 1px solid #1b1b1b;
}

.follow-btn:hover  button{
background: #FF8000;
border: 1px solid #FF8000;
color: #fff;
cursor: pointer;
text-decoration: none;
}

.user-waku{
    width:80%;
    margin:20px auto;
    border:1px solid black;
    padding:3%;
}
.user-detail a{
    text-align: left;
    margin:10px 10px;
    display: inline-block;
}
.user-detail p{
    text-align: left;
}
.user-detail img{
    float:left;
}
</style>
<div class="main-title">
    <h1><span class="orange-line">ユーザー一覧(自身を除く)</span></h1>
</div>
<div class="user-all-wrapper">

            @foreach ($all_users as $user)
            <div class="user-waku">

                <div class="user-detail">
                    <img src="{{ $user->profile_photo_path}}" class="user-icon-img"  width="50" height="50">
                        <a href="/users/{{$user->id}}" class="text-secondary">{{ $user->name }}</a>
                        <p>{{ $user->explain }}</p>
                    </div>
                    <!-- フォローされているか -->
                    @if (auth()->user()->isFollowed($user->id))
                    <div class="follow-true">
                        <span class="px-1 bg-secondary text-light">フォローされています</span>
                    </div>
                    @endif


                    <div class="d-flex justify-content-end flex-grow-1">
                        <!-- フォローしているか -->
                        @if (auth()->user()->isFollowing($user->id))
                        <form action="{{ route('unfollow', ['user' => $user->id])  }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <div class="follow-btn">
                                <button type="submit" >フォロー解除</button>
                            </div>
                        </form>
                        @else
                        <form action="{{ route('follow', ['user' => $user->id]) }}" method="POST">
                            {{ csrf_field() }}

                            <div class="follow-btn">
                                <button type="submit" >フォローする</button>
                            </div>
                        </form>
                        @endif
                    </div>
           
            </div>
            @endforeach

    <div class="my-4 d-flex justify-content-center">
        {{ $all_users->links() }}
    </div>
</div>
@endsection