<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index</title>
    <link href="/futurelib/Public/css/bootstrap.css" rel="stylesheet">
</head>
<body>
    <!-- 图片轮播 -->
        <div data-ride="carousel" id="carousel_container" class="carousel slide image" >
            <!-- 图片容器 -->
            <div class="carousel-inner">
                <div class="item active active" style="background-size:cover"style="width:100%; height:450px" ><img src="/futurelib/Public/images/1.jpg" style="width:100%; height:450px"></div>
                <div class="item "><img src="/futurelib/Public/images/2.jpg" style="width:100%; height:450px"></div>
                <div class="item"><img src="/futurelib/Public/images/3.jpg" style="width:100%; height:450px"></div>  
            </div>
              <!-- 小圆圈 -->
            <ol class="carousel-indicators">
                <li data-slide-to="0" data-target="#carousel_container"></li>
                <li data-slide-to="1" data-target="#carousel_container"></li>
                <li data-slide-to="2" data-target="#carousel_container"></li>
            </ol>
              <!-- 左右按钮 -->
            <a href="#carousel_container" data-slide="prev" class="left carousel-control">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>

            <a href="#carousel_container" data-slide="next" class="right carousel-control">
                <span class="glyphicon glyphicon-chevron-right"></span>                
           </a>
        </div>

        

    <script src="/futurelib/Public/js/jquery.js"></script>
    <script src="/futurelib/Public/js/bootstrap.js"></script>  
</body>
</html>