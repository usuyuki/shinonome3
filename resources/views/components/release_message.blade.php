<!-- リリースノートの枠を作るテンプレートです -->
<style>
    .message {
        /* border: double 4px #ccc; */
        margin: 10px;
        padding: 10px;
        background-color: white;
    }

    .msg_title {
        margin: auto;
        color: black;
        font-size: 16pt;
        font-weight: bold;
        float: left
    }

    .msg_content {
        margin: 10px 20px;
        padding-bottom: 30px;
        color: black;
        font-size: 12pt;
    }

    .msg_date {
        color: #999;
        text-align: right;
    }

    .border {
        margin: 0px 0px 20px;
        border-top: 1px solid black;
    }
</style>
<div class="message">
    <div class="msg_title">
        <p>Ver{{$ver}}</p>

    </div>
    <div class="msg_date">
        <p>{{$date}}</p>
    </div>
    <div class="border">　</div>

    <div class="msg_content">
        <ul>
            <li>{{$exp1}}</li>
            <li>{{$exp2}}</li>
            <li>{{$exp3}}</li>
            <li>{{$exp4}}</li>


        </ul>
    </div>
</div>