@extends('layouts.shinonome_in_app')
@section('title','プライバイシーポリシー/しののめ')
@section('content')
<style>
    /* p {
        text-align: center;
    } */
</style>

<div class="main-title">
    <h1><span class="orange-line">プライバシーポリシー</span></h1>
</div>



@include('components.explain',
['title'=>'個人情報の利用目的',
'explain'=>'当サイトでは、Twitter認証による会員登録の際に、Twitter上の名前,ユーザー名,id,画像のパス,トークンを取得します。GoogleAnalyticsにおいても情報収集がされており、これについては「ご利用にあたって」をご覧ください。これらの個人情報はしののめの「あいさつ」機能などの利用でユーザーを識別、表示、分析のために利用するもので、他の目的には利用しません。
'])
@include('components.explain',
['title'=>'個人情報の第三者への開示',
'explain'=>'当サイトでは、個人情報は適切に管理し、法令等によって開示が必要となる場合を除いて第三者に開示することはありません。
'])
@include('components.explain',
['title'=>'免責事項',
'explain'=>'当サイトに掲載された内容によって生じた損害等の一切の責任を負いかねますのでご了承ください。また、当サイトからリンクやバナーなどによって他のサイトに移動された場合の損害や情報についても一切の責任を負いかねます
'])
@include('components.explain',
['title'=>'プライバシーポリシーの変更について',
'explain'=>'当サイトは、本ポリシーの内容を適宜見直しその改善に努めます。本規約は、予告なく変更される場合があります。変更後は速やかに掲載致し、またリリースノートにてお知らせ致します。
'])
<div class="main-explain">
    <p>
        制定:2020年10月4日
    </p>
</div>
@endsection