<style>
.greet-wrapper{
    margin:20px auto;
}
.greet-content{
    border:1px solid black;
    width: 800px;
    background-color:#87C9B6; 
    border-radius: 2%;


}
.greet-top{
    width: 800px;
    height:80px;
    border:1px solid black;
}

.greet-center{
    border:1px solid black;
    text-align: center;
    /* margin:40px 40px; */
    width: 800px;
   
}
.greet-bottom{
    width: 800px;
    border:1px solid black;
    text-align: right;

}
.greet-bottom p{
    margin-bottom: 0px;
}
.greet-icon{
    float: left;
    /* border: 1px solid blue; */
    margin:20px 20px;

    background-position: center ;
    

}
.greet-icon img{
    border-radius: 50%;  /* 角丸半径を50%にする(=円形にする) */
}

.greet-name{
    margin:20px 0;
    float:left;
}
.greet-name a{
    text-decoration: none;
    
    color:black;
}
.greet-timestamp{
    text-align: right;
    margin:20px 20px;

}
.greet-delate{
    float:left;
    margin-top:20px;
    margin-left:400px;
}
.greet-like{
    position: relative;
    top:20px;
    left:400px;
}
.like-btn{
    
}


</style>

<div class="greet-wrapper">

    <div class="greet-content">
         <!-- 上枠 -->
        <div class="greet-top">

            <div class="greet-icon">
                {{$icon}}
            </div>
            
            <div class="greet-name">
                <p>{{$name}}</p>
            </div>
            <div class="greet-delate">
                {{$delate}}
            </div>
            
            <div class="greet-timestamp">
                <p>{{$timestamp}}</p>
            </div>
            
            
        </div>
         <!-- 中間枠-->
        <div class="greet-center">
              <!-- 本文-->
            <p>{{$text}}</p>
        </div>
        <!-- 底枠-->
        <div class="greet-bottom">
              <!-- 好きされた数-->
                <p>トータル好き:{{$like_count}}</p>

        </div>
            
            
        <div class="greet-like">
                {{$like_btn}}
        </div>
    </div>

</div>