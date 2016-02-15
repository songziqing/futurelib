<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Contact</title>
<link href="/futurelib/Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/futurelib/Public/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="/futurelib/Public/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<meta name="keywords" content="Lobortis Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<link href='http://fonts.useso.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="/futurelib/Public/js/move-top.js"></script>
<script type="text/javascript" src="/futurelib/Public/js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->
<!---- animated-css ---->
		<link href="/futurelib/Public/css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="/futurelib/Public/js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>
<!---- animated-css ---->
</head>
<body>
<!--header start here-->
<div class="header">
	<div class="container head-nav-back">
		<div class="header-main">
			<div class="logo wow bounceIn" data-wow-delay="0.4s">
				<a href="index.html"> <img src="/futurelib/Public/images/logo.png" alt=""/> </a>
			</div>
			<div class="navg">
				<span class="menu"> <img src="/futurelib/Public/images/icon.png" alt=""/></span>
				<ul class="res"> 
					<li><a href="/futurelib/index.php/Home/Index/index">首页</a></li>
					<li><a href="/futurelib/index.php/Home/Index/about">关于</a></li>
					<li><a href="/futurelib/index.php/Home/Index/introduce">展示</a></li>
					<li><a href="/futurelib/index.php/Home/Index/news">动态</a></li>
					<li><a class="cont active" href="/futurelib/index.php/Home/Index/contact">联系</a></li>
				</ul>
				 <script>
                              $( "span.menu").click(function() {
                                                                $(  "ul.res" ).slideToggle("slow", function() {
                                                                 // Animation complete.
                                                                 });
                                                                 });
                 </script>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--header end here-->
<!--contact start here-->
<div class="contact">
	<div class="container">
		<div class="contact-main">
			<div class="contact-top">
				<h3>联系我们</h3>
				<p style="font-size:22px">如果您对于我们的作品感兴趣，想加入我们，或者对于我们的不足有什么意见或好的建议欢迎致电说明，或者通过邮箱留言，感谢您的关注！</p>
			</div>
			<div class="col-md-12 contact-right footer-grid wow bounceIn" data-wow-delay="0.4s" style="margin-left:60px">
				<h3>Feed Back</h3>
				<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}"/>
				<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"/>
				<textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}"/>Message</textarea>
				<input type="submit" value="发送" style="padding: 8px 3em;">
			</div>

			
		  <div class="clearfix"> </div>

				<div style="width:88%;height:400px;margin-left:auto;margin-right:auto;margin-top:50px;">
					<div class="map">
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
    <div class="container">
     <div style="width:88%;height:400px;border:#ccc solid 1px;" id="dituContent"></div>
    </div>
    <script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }
    
    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(113.943325,35.287217);//定义一个中心点坐标
        map.centerAndZoom(point,18);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }
    
    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }
    
    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
    var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
    map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
    var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
    map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
    var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
    map.addControl(ctrl_sca);
    }
    
    //标注点数组
    var markerArr = [{title:"未来工作室",content:"零号楼511",point:"113.942925|35.287902",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}
         ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
            var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
            var iw = createInfoWindow(i);
            var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
            marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });
            
            (function(){
                var index = i;
                var _iw = createInfoWindow(i);
                var _marker = marker;
                _marker.addEventListener("click",function(){
                    this.openInfoWindow(_iw);
                });
                _iw.addEventListener("open",function(){
                    _marker.getLabel().hide();
                })
                _iw.addEventListener("close",function(){
                    _marker.getLabel().show();
                })
                label.addEventListener("click",function(){
                    _marker.openInfoWindow(_iw);
                })
                if(!!json.isOpen){
                    label.hide();
                    _marker.openInfoWindow(_iw);
                }
            })()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
    
    initMap();//创建和初始化地图
</script>
</div>
				</div>
			
		</div>
	</div>
</div>
<!--contact end here-->
<!--map start here-->

<!--map end here-->
<!--footer start here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
			<div class="col-md-4 footer-grid wow bounceIn" data-wow-delay="0.4s">
			  <h3 style="margin-left:13px;">最新文章</h3>
			  <ul class="ftr-list">
			  	<li><a href="#">Linux下crontab+php实现Mysql数据库定时备</a><br><span style="color:#818C93;margin-left:15px;">2016-1-26</span></li>
			  	<li><a href="#">理解钩子Hook以及在Thinkphp下利用钩子使用行为扩展</a><br><span style="color:#818C93;margin-left:15px;">2016-1-26</span></li>
			  	<li><a href="#">理解RESTful架构</a><br><span style="color:#818C93;margin-left:15px;">2016-1-26</span></li>
			  	<li><a href="#">Linux下crontab+php实现Mysql数据库定时备 </a><br><span style="color:#818C93;margin-left:15px;">2016-1-26</span></li>
			  </ul>
			</div>
			<div class="col-md-4 footer-grid wow bounceIn" data-wow-delay="0.4s">
			  <h3 style="margin-left:13px;">最新评论</h3>
			  <ul class="ftr-list">
			  	<li><a href="#">未来小组，越来越好</a><br><span style="color:#818C93;margin-left:15px;">2016-1-26</span></li>
			  	<li><a href="#">未来小组，越来越好</a><br><span style="color:#818C93;margin-left:15px;">2016-1-26</span></li>
			  	<li><a href="#">未来小组，越来越好</a><br><span style="color:#818C93;margin-left:15px;">2016-1-26</span></li>
			  	<li><a href="#">未来小组，越来越好</a><br><span style="color:#818C93;margin-left:15px;">2016-1-26</span></li>
			  </ul>
			</div>
			<div class="col-md-4 footer-grid wow bounceIn" data-wow-delay="0.4s">
			  <h3 style="margin-left:13px;">友情链接</h3>
			  <ul class="ftr-list">
			  	<li><a href="http://www.imooc.com/">慕课网 </a></li>
			  	<li><a href="http://www.chuanke.com/">百度传课</a></li>
			  	<li><a href="http://www.maizitime.com/pages/ad04/index.html?bdss3=pp_hx_104154">麦子学院</a></li>
			  	<li><a href="http://www.imooc.com/">慕课网 </a></li>
			  	<li><a href="http://www.chuanke.com/">百度传课</a></li>
			  	<li><a href="http://www.maizitime.com/pages/ad04/index.html?bdss3=pp_hx_104154">麦子学院</a></li>
			  	<li><a href="http://www.imooc.com/">慕课网 </a></li>
			  </ul>
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--footer end here-->
<!--copyrights start here-->
<div class="copyright">
	<div class="container">
		<div class="copyright-main wow bounceInLeft" data-wow-delay="0.4s">
			<p>Copyright &copy; 2016. The FutureGroup 未来工作室</p>
		</div>
	</div>
</div>
<!--copyrights end here-->

</body>
</html>