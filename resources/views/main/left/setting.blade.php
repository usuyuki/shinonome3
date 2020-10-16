@extends('layouts.shinonome_in_app')
@section('title','設定/しののめ')
@section('content')
<style>
    h4 {
        text-align: center;
        font-size: 14px;
    }

    .setting-wrapper {
        flex-direction: column;
    }


    .set-user-icon-img img {
        border-radius: 50%;
        border-width: 2px;
        border-style: solid;
        border-color: black;
        /* アスペクト比を維持したまま、要素のコンテンツボックス全体を埋めるように拡大縮小 */
        object-fit: cover;  

        width: 60%;
        height: auto;
        margin:0 auto;

    }

    .user-icon-img {
        margin: 0 auto;
        text-align: center;

    }

    .set-user-icon-btn {
        margin: 0 auto;
        text-align: center;

    }

    .del {
        display: none;
        /* アップロードボタンのスタイルを無効にする */
    }

    .set-user-icon-btn {
        display: block;
        text-decoration: none;
        width: 180px;
        padding: 0.3em;
        color: #30736A;
        background: #fff;
        border: 1px solid #30736A;

    }

    .set-user-icon-btn:hover {
        background: #30736A;
        color: #fff;
        cursor: pointer;
        text-decoration: none;
    }


    .set-user-icon {
        width: 160px;
        height: 160px;
        /* border: 1px solid green; */
        margin: 20px auto;
        display: block;
    }

    .set-user-name {
        padding-top: 10px;
        margin: 20px auto;
        /* border: 1px solid green; */
        text-align: center;
    }

    .set-user-name p {
        /* float: left; */
        padding: 0 5px;
    }

    .set-user-explain {
        padding-top: 10px;
        margin: 20px auto;
        /* border: 1px solid green; */
        text-align: center;
    }

    .set-user-explain p {
        /* float: left; */
        padding: 0 5px;

    }

    .user-detail {
        padding-top: 40px;

        margin: 20px auto;
        /* border: 1px solid green; */
        display: block;
    }

    .user-detail-content {
        margin-left: 51%;
        padding-left: 5px;
        text-align: left;
        width: 400px;
        height: 100px;
        border: 1px dashed #30736A;
        border-radius: 20px;
    }

    textarea {

        font-size: 17px;
        resize: none;
        width: 400px;
        height: 200px;

    }

    .moziwaku {
        border: 1px solid #30736A;
    }

    .btn-save-wrapper {
        margin: 0 auto;
    }

    .btn-save {

        display: block;
        text-decoration: none;
        width: 180px;
        padding: 0.3em;
        margin-left: 600px;

        text-align: center;
        color: #30736A;
        background: #fff;
        border: 1px solid #30736A;
    }

    .btn-save:hover {
        background: #30736A;
        color: #fff;
        cursor: pointer;
        text-decoration: none;
    }
</style>

<div class="main-title">
    <h1><span class="orange-line">プロフィールと設定</span></h1>
</div>

<div class="setting-wrapper">
    <form action="/setting" method="post" enctype='multipart/form-data'>
        @csrf
        <h4>変更後は必ず「保存」ボタンを押してください</h4>
        <div class="set-user-icon">
            <div class="set-user-icon-img">
                <img src="{{$user->profile_photo_path}}" alt="あなたのアイコンです">
            </div>
            <div class="set-user-icon-btn">
                <p class="kome">アイコンの変更は<br>準備中です</p>
            </div>
            <!-- <label>
                <div class="set-user-icon-btn">
                    アイコンを変える
                    <input type="file" name="profile_photo_path" class="del" accept="image/*">
                </div>
            </label> -->
        </div>
        <div class="set-user-name">
            <p>名前</p>
            <input type="text" name="name" class="moziwaku" value="{{$user->name}}">
        </div>
        <div class="set-user-explain">
            <p>自己紹介(改行は反映されません)</p>
            <textarea cols="120" rows="20" class="moziwaku" name="explain" maxlength="99999">{{$user->explain}}</textarea>
        </div>

        <div class="btn-save-wrapper">
            <input type="submit" value="保存" class="btn-save">
        </div>
    </form>
    <div class="user-detail">
        <div class="user-detail-content">

            <p>あなたの「しののめ」id:{{$user->id}}</p>
            <p>あなたの「しののめ」登録日:{{$user->created_at}}</p>
        </div>
    </div>
    <div class="user-list">

        <a href='/users'>他のユーザーを探す </a>
    </div>

</div>
@endsection