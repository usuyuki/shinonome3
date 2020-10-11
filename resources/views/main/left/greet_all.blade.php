{{-- @extends('layouts.app') --}}
@extends('layouts.shinonome_in_app')
@section('title','あいさつ/しののめ')

@section('content')
<style>
    .greet-main-wrapper{
        text-align: center;
        width:800px;
        margin:0 auto;

    }
    .submit{
    
        width: 750px;
        height:120px;
        margin:0 auto;
    }
    .submit-textarea{
        text-align: center;
        float:left;
    }
    .submit-textarea textarea{

        resize: none;
        width:500px;
        height:60px;
    
    }
    .submit-textarea textarea:hover{
        border:2px solid #FF8000;
    }
    .submit-right{
        display: inline-block;
        margin-left: 30px;
        padding-bottom:20px;
    }
    button{
        background-color: transparent;
        border: none;
        cursor: pointer;
        outline: none;
        padding: 0;
        appearance: none;
    }
    .greet-delate-title{
        margin-bottom: 10px;
        font-size:5px;
    }
    .submit-warning{
        font-size:12px;
        opacity:0.7;
    }
    .submit-btn button{

    width: 200px;
    padding: 0.3em;


    color: #1b1b1b;
    background: #fff;
    border: 1px solid #1b1b1b;
    }

    .submit-btn:hover  button{
    background: #FF8000;
    border: 1px solid #FF8000;
    color: #fff;
    cursor: pointer;
    text-decoration: none;
    }
</style>
<div class="greet-main-wrapper">


    <div class="main-title">
        <h1><span class="orange-line">あいさつ</span></h1>
    </div>
    <p>　</p>
    <!-- 投稿コーナー -->
    <div class="submit">
        <form method="POST" action="/greet">
            @csrf

            <div class="submit-textarea">
                <textarea class="form-control @error('greet') is-invalid @enderror" name="greet" required autocomplete="greet" rows="4">{{ old('greet') }}</textarea>

            </div>
            <div class="submit-error">

                @error('greet')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>

            <div class="submit-right">
                <p class="submit-warning">140文字以内</p>
                <div class="submit-btn">
                    <button type="submit" class="btn btn-primary">
                        あいさつする
                    </button>
                </div>

            </div>
            

        </form>
    </div>




    <!-- 表示コーナー -->
    <div class="show">


            @if (isset($timelines))
                @foreach ($timelines as $timeline)

                                @component('components.greet_message')
                                    @slot('icon')
                                        <img src="{{$timeline->user->profile_photo_path }}" class="rounded-circle" width="50" height="50">
                                    @endslot

                                    @slot('name')
                                        <a href='/users/{{$timeline->user->id}}' class="text-secondary"><p class="mb-0">{{ $timeline->user->name }}</p></a>
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
                                                <form method="POST" action="/favorites/ {{array_column($timeline->favorites->toArray(), 'id', 'user_id')[$user->id] }}" class="mb-0">
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


    </div>
</div>
@endsection