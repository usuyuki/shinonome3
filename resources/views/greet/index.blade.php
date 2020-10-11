{{-- @extends('layouts.shinonome_in_app')
@section('title','ご利用にあたって/しののめ') --}}
@extends('layouts.app')
@section('content')

 <!-- 投稿コーナー -->
<div class="card-body">
    <form method="POST" action="/greet">
        @csrf

        <div class="form-group row mb-0">
            <div class="col-md-12 p-3 w-100 d-flex">
                <img src="{{ $user->profile_photo_path }}" class="rounded-circle" width="50" height="50">
                <div class="ml-2 d-flex flex-column">

                    <p class="mb-0">{{ $user->name }}</p>
                    <a href="{{ url('users/' .$user->id) }}" class="text-secondary">{{ $user->screen_name }}</a>
                </div>
            </div>
            <div class="col-md-12">
                <textarea class="form-control @error('greet') is-invalid @enderror" name="greet" required autocomplete="greet" rows="4">{{ old('greet') }}</textarea>

                @error('greet')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-12 text-right">
                <p class="mb-4 text-danger">140文字以内</p>
                <button type="submit" class="btn btn-primary">
                    あいさつする
                </button>
            </div>
        </div>
    </form>
</div>



 <!-- 表示コーナー -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-3 text-right">
            <a href="{{ url('users') }}">ユーザ一覧 <i class="fas fa-users" class="fa-fw"></i> </a>
        </div>
        @if (isset($timelines))
            @foreach ($timelines as $timeline)
                <div class="col-md-8 mb-3">
                    <div class="card">
                        <div class="card-haeder p-3 w-100 d-flex">
                            {{-- @component('components.explain')
        @slot('title')
        {{$timeline->greet}}
        @endslot
        @slot('explain')
        これはメッセージの表示です。
        @endslot
    @endcomponent --}}
                            <img src="{{$timeline->user->profile_photo_path }}" class="rounded-circle" width="50" height="50">
                            <div class="ml-2 d-flex flex-column">

                                 <a href="{{ url('users/' .$timeline->user->id) }}" class="text-secondary"><p class="mb-0">{{ $timeline->user->name }}</p></a>
                            </div>
                            <div class="d-flex justify-content-end flex-grow-1">
                                <p class="mb-0 text-secondary">{{ $timeline->created_at->format('Y-m-d H:i') }}</p>
                            </div>
                        </div>
                        <div class="card-body">
                            {!! nl2br(e($timeline->greet)) !!}
                        </div>
                      
                        <!-- あいさつ削除コーナー -->
                        <div class="card-footer py-1 d-flex justify-content-end bg-white">
                            @if ($timeline->user->id === Auth::user()->id)
                                <div class="dropdown mr-3 d-flex align-items-center">
                                    <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-fw"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <form method="POST" action='/greet/delate/?greet_id={{$timeline->id}}' class="mb-0">
                                            @csrf
                                            {{-- @method('DELETE') --}}

                                           
                                            <button type="submit" class="dropdown-item del-btn">削除</button>
                                        </form>
                                    </div>
                                </div>
                            @endif


                           <!-- いいねコーナー -->
                           <div class="d-flex align-items-center">
                            @if (!in_array($user->id, array_column($timeline->favorites->toArray(), 'user_id'), TRUE))
                                <form method="POST" action="{{ url('favorites/') }}" class="mb-0">
                                    @csrf

                                    <input type="hidden" name="greet_id" value="{{ $timeline->id }}">
                                    <button type="submit" class="btn p-0 border-0 text-primary"><i class="far fa-heart fa-fw"></i></button>
                                </form>
                            @else
                                <form method="POST" action="{{ url('favorites/' .array_column($timeline->favorites->toArray(), 'id', 'user_id')[$user->id]) }}" class="mb-0">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn p-0 border-0 text-danger"><i class="fas fa-heart fa-fw"></i></button>
                                </form>
                            @endif
                            <p class="mb-0 text-secondary">{{ count($timeline->favorites) }}</p>
                        </div>



                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    <div class="my-4 d-flex justify-content-center">
        {{ $timelines->links() }}
    </div>
</div>
@endsection