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
    border-radius: 1%;
    padding:3%;
}
.user-detail a{
    text-align: left;
    margin:10px 10px;
    text-decoration: none;
    display: inline-block;
    color:#ff8000;
}
.user-detail p{
    text-align: left;
}
.user-detail img{
    float:left;
}
.follow-true p{
    opacity:0.5;
    font-size:13px;
    margin:2px 0;

    
}
.follow-unfollow{

    margin:10px 20px 20px 0px;
}
.user-explain p{
    margin-top:30px;
    margin-bottom:10px;
}
.pagenation{
    text-decoration: none;
    text-align: none;
    font-size:20px;
}
</style>
<div class="main-title">
    <h1><span class="orange-line">ユーザー一覧(自身を除く)</span></h1>
</div>
<div class="user-all-wrapper">

            @foreach ($all_users as $user)
            <div class="user-waku">

                <div class="user-detail">
                    <a href="/users/{{$user->id}}" class="text-secondary">
                    <img src="{{ $user->profile_photo_path}}" class="user-icon-img"  width="50" height="50"></a>
                        <a href="/users/{{$user->id}}" class="text-secondary">{{ $user->name }}</a>
                    <div class="user-explain">

                        <p>{{ $user->explain }}</p>
                        
                    </div>
                    


                    <div class="follow-unfollow">
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

                    <!-- フォローされているか -->
                    @if (auth()->user()->isFollowed($user->id))
                    <div class="follow-true">
                        <p>フォローされています！やったー！</p>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach

    <!-- ページネーション用のやつ -->  
    <div class="pagenation">
        {{ $all_users->links('vendor.pagination.default') }}
    </div>
</div>
@endsection