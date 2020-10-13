@extends('layouts.shinonome_in_app')
@section('title','ユーザー/しののめ')

@section('content')
<style>
.user-show-wrapper{
    width:95%;
    margin:30px auto;
    text-align: center;
}
.follow-btn button{

width: 200px;
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

.profile-edit-btn a{
text-decoration: none;
width: 200px;
padding: 0.3em;


color: #1b1b1b;
background: #fff;
border: 1px solid #1b1b1b;
}

.profile-edit-btn:hover  a{
background: #FF8000;
border: 1px solid #FF8000;
color: #fff;
cursor: pointer;
text-decoration: none;
}
.one-user-explain{
    width:80%;
    margin:10px auto;
    text-align: center;
}
.one-user-count{
    width:60%;
    margin:3% auto;
    /* border:1px solid black; */

    display: flex;
    justify-content: space-around;
}
.one-user-count div {
    /* border:1px solid black; */
    padding:0.5%;
   
}
.one-user-greet-title{
    margin:20px auto;
    display: inline-block;
    width:50%;
    display: flex;
    /* border:1px solid black;  */
    padding-left:10%;
}
.one-user-greet-title svg{
    margin:4% 2%;
    fill:#ff8000;
}
.one-user-greet-title p{

}
</style>

<div class="main-title">
    <h1><span class="orange-line">{{ $user->name }}さんのページです</span></h1>
</div>
<div class="user-show-wrapper">
    <!-- ユーザーの名前や自己紹介 -->
    <div class="one-user-explain">
        <div class="one-user-img">
            <img src="{{$user->profile_photo_path }}" class="user-icon-img" width="50" height="50">
        </div>
        <div class="one-user-name">
            <h4 class="mb-0 font-weight-bold">{{ $user->name }}</h4>
        </div>
        <div class="one-user-explain">
            <p>{{$user->explain}}</p>
        </div>
    </div>
   <!-- プロフィール編集orフォローボタン -->
    <div class="one-user-edit">
                           
        @if ($user->id === Auth::user()->id)
        <div class="profile-edit-btn">
            <a href='/setting' class="btn btn-primary">プロフィールを編集する</a>
            {{-- <a href='/users/ {{$user->id}}/edit' class="btn btn-primary">プロフィールを編集する</a> --}}
        </div>
        @else
        @if ($is_following)
    
        <form action="{{ route('unfollow', ['user' => $user->id])  }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <div class="follow-btn">
                <button type="submit" >フォロー解除</button>
            </div>
        </form>
        @else
        <form action="{{ route('follow', ['user' => $user->id])  }}" method="POST">
            {{ csrf_field() }}
            <div class="follow-btn">
                <button type="submit" >フォローする</button>
            </div>
        </form>
        @endif

        @if ($is_followed)
        <span class="mt-2 px-1 bg-secondary text-light">フォローされています</span>
        @endif
        @endif
    
    </div>
    <!-- ユーザーのカウント系 -->
    <div class="one-user-count">
        <div class="one-user-greet">
            <p>あいさつ数</p>
            <span>{{ $greet_count }}</span>
        </div>
        <div class="one-user-following">
            <p>フォロー数</p>
            <span>{{ $follow_count }}</span>
        </div>
        <div class="one-user-followed">
            <p>フォロワー数</p>
            <span>{{ $follower_count }}</span>
        </div>
    </div>


   <!-- ユーザーのあいさつ一覧 -->
   <div class="one-user-greet-title">
    <svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 0 24 24" width="40">
        <path d="M0 0h24v24H0z" fill="none" />
        <path d="M6.76 4.84l-1.8-1.79-1.41 1.41 1.79 1.79 1.42-1.41zM4 10.5H1v2h3v-2zm9-9.95h-2V3.5h2V.55zm7.45 3.91l-1.41-1.41-1.79 1.79 1.41 1.41 1.79-1.79zm-3.21 13.7l1.79 1.8 1.41-1.41-1.8-1.79-1.4 1.4zM20 10.5v2h3v-2h-3zm-8-5c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm-1 16.95h2V19.5h-2v2.95zm-7.45-3.91l1.41 1.41 1.79-1.8-1.41-1.41-1.79 1.8z" /></svg>

       <h2>{{ $user->name }}さんのあいさつ</h2>
   </div>

   @if (isset($timelines))
   @foreach ($timelines as $timeline)
 @component('components.greet_message')
    @slot('icon')
        <img src="{{$timeline->user->profile_photo_path }}" class="rounded-circle" width="50" height="50">
    @endslot

    @slot('name')
        <a href="/users/{{$timeline->user->id}}" class="text-secondary"><p class="mb-0">{{ $timeline->user->name }}</p></a>
    @endslot

    @slot('timestamp')
        <p>{{ $timeline->created_at->format('Y-m-d H:i') }}</p>
    @endslot

    @slot('text')
        <p>{{$timeline->greet}}</p>
    @endslot

    @slot('delate')
    <!-- あいさつ削除コーナー -->
        @if ($timeline->user->id === Auth::user()->id)
        <div class="none">
            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-fw"></i>
            </a>
            <div class="none" >
                <form method="POST" action='/greet/delate/?greet_id={{$timeline->id}}' class="mb-0">
                    @csrf
                    {{-- @method('DELETE') --}}

                
                    <button type="submit" class="dropdown-item del-btn"> <span class="greet-delate-title">あいさつを消す</span> <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4z"/></svg>
                    </button>
                </form>
            </div>
        </div>
        @endif

    @endslot

    @slot('like_btn')
        <!-- いいねコーナー -->
        <div class="d-flex align-items-center">
            @if (!in_array($user->id, array_column($timeline->favorites->toArray(), 'user_id'), TRUE))
                <form method="POST" action='/favorites/' class="mb-0">
                    @csrf

                    <input type="hidden" name="greet_id" value="{{ $timeline->id }}">
                    <div class="btn-on">

                        <button type="submit" class="btn p-0 border-0 text-primary"> <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg>                                                    
                        </button>
                    </div>
                </form>

            @else
                <form method="POST" action="/favorites/{{ array_column($timeline->favorites->toArray(), 'id', 'user_id')[$user->id] }}" class="mb-0">
                    @csrf
                    @method('DELETE')
                    <div class="btn-off">

                        <button type="submit" class="btn p-0 border-0 text-danger"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>      
                        </button>
                    </div>
                </form>
            </div>
            @endif
    @endslot
            
    @slot('like_count')
            {{ count($timeline->favorites) }}
    @endslot

    @endcomponent
   @endforeach
   @endif

    <!-- ページネーション用のやつ -->  
    <div class="pagenation">
        {{ $timelines->links('vendor.pagination.default') }}
    </div>
</div>
@endsection