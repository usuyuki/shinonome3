<style>
.greet-wrapper{
    margin:20px auto;
}
.greet-content{
    border:1px solid black;
    width: 750px;
    background-color:#C7EEDB; 
    border-radius: 2%;
    margin:0 auto;


}
.greet-top{
    width: 98%;
    height:60px;
    /* border:1px solid black; */
}

.greet-center{
    /* border:1px solid black; */
    text-align: left;
    /* margin:40px 40px; */
    width: 60%;
    margin:0 auto;
   
}
.greet-bottom{
    width: 98%;
    /* border:1px solid black; */
    text-align: right;
    font-size:10px;
}
.greet-bottom p{
    margin-bottom: 0px;
}
.greet-icon{
    float: left;
    /* border: 1px solid blue; */
    margin:0px 20px;

    background-position: center ;
    

}
.greet-icon img{
    border-radius: 50%;  /* 角丸半径を50%にする(=円形にする) */
}

.greet-name{
    margin:0 0;
    float:left;
}
.greet-name a{
    text-decoration: none;
    
    color:#30736A;
}
.greet-name a:hover{

    
    color:black;
}
.greet-timestamp{
    text-align: right;
    margin:20px 20px;

}
.greet-delate{
    float:left;

    margin-left:40%;
}
.greet-delate svg{
    fill:#87C9B6;
}
.greet-delate svg:hover{
    fill:#30736A;
}
.greet-delate span{
    display: inline-block;
    margin-bottom: 10px;
}
.greet-like{
    position: relative;
    top:20px;
    left:20px;
    
}
.greet-like svg{
    fill:plum;
}
.greet-like svg:hover{
    fill:rgb(202, 114, 202);
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