@extends('layouts.shinonome_in_app')
@section('title','ご利用にあたって/しののめ')
@section('content')
<style>
    h1 {
        text-align: center;

    }
</style>
<div class="main-title">
    <h1>ご利用にあたって</h1>
</div>

@include('components.explain',
['title'=>'JavaScript',
'explain'=>'本サイトでは、時計やグラフの表示、デザインのためにJavaScript を使用しています。ご使用のブラウザ設定においてJavaScript をオン (有効) にされていない場合に、時計やグラフが正しく表示されない場合やレイアウトが崩れる場合がありますので、ご了承ください。
'])

@include('components.explain',
['title'=>'Cookie',
'explain'=>'本サイトでは、ご利用者様が訪問された際、より快適にご利用いただくため、Cookie を使用しております。Cookie は、本サイトの運用に関連するサーバから、ご利用者さまのブラウザに送信する情報で、ご利用者さまのコンピューターに記録されますが、ご利用者さまのコンピューターへ直接的な悪影響を及ぼすことはございません。
ご本人の希望で「Cookie」の受け取りを、ブラウザで設定することにより拒否することができますが、ログインや投稿が利用できない場合がありますので、予めご了承ください。
'])

@include('components.explain',
['title'=>'Google Analytics',
'explain'=>'本サービスではGoogleによるアクセス解析ツール「GoogleAnalytics」を利用しています。このGoogleAnalyticsはトラフィックデータの収集のためにクッキー（Cookie）を使用しております。トラフィックデータは匿名で収集されており、個人を特定するものではありません。この機能はCookieを無効にすることで収集を拒否することが出来ますので、お使いのブラウザの設定をご確認ください。
'])
<p class="center"><br><a href="https://policies.google.com/technologies/partner-sites?hl=ja">GoogleAnalyticsの利用規約</a><br><a href="https://policies.google.com/technologies/partner-sites?hl=ja">Googeプライバシーポリシー</a></p>



@endsection