<!-- リリースノートの枠を作るテンプレートです -->
<style>
.message{border:double 4px #ccc; margin:10px padding:10px; background-color:#fafafa;}
.msg_title{margin:10px 20px; color:#999; font-size:16pt; font-weight:bold;}
.msg_content{margin:10px 20px; color:#aaa; font-size:12pt;}
.border{
    border-top:1px solid black;
}
</style>
<div class="message">
    <p class="msg_title">{{$ver}}</p>
    <div class="border">　</div>

    <div class="msg_content">
        <ul>
            <li>{{$exp1}}</li>
            <li>{{$exp2}}</li>
            <li>{{$exp3}}</li>
            <li>{{$exp4}}</li>
            <li>{{$exp5}}</li>
            <li>{{$exp6}}</li>

        </ul>
    </div>
</div>