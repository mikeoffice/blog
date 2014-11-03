<!DOCTYPE html>
<html lang="zh-CN">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src='http://lib.sinaapp.com/js/jquery/1.7.2/jquery.min.js'></script>
        
        <script src="http://www.blog.com/static/compile/js/jquery.pin.min.js"></script>
        <script src="http://www.blog.com/static/compile/js/jquery.unslider.min.js"></script>
        
        
        <script src="http://www.blog.com/static/compile/js/bootstrap.min.js"></script>
        <link href="http://www.blog.com/static/compile/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="http://www.blog.com/static/compile/css/slider.min.css" rel="stylesheet" type="text/css">
        
        <style>
            header{
	           z-index:10000;
            }
            .card{

            	height:220px;
            	float:left;
            	padding:0px 10px 10px 10px;     
            }
            .card a{
	           padding: 0 10px;
               display: block;
            }
            .card a img{
	            vertical-align: middle;
            	width:100%;
            	max-height:245px;
                height: auto;
            }
            .price,.prod{
	           padding: 10px 10px 0px 10px;
               text-align:center;
            }
            .price span{
	           display: inline-block;
               -webkit-border-radius: 3px;
               border-radius: 3px;
               background-color: #F3F1F1;
               color: #888;
               padding: 3px 10px;
            } 
            .header{
                background-color: #fff;
                z-index: 10;
                position: relative;
                border-bottom: 1px solid #eee;
                padding-top: 15px;
                padding-bottom: 12px; 
            }
            #prod-box{
	           margin-top:20px;
            }
            .footer{
	           height:100px;
	           
            }
            .shop_commend{
	           width:20%;
               float:left;
               height:295px;
               padding:0px 1px 3px 1px;
               text-align:center;
            }
            .shop_commend a img{
	           width:100%;
            }
            .footer p{
	           width:100%;
               text-align:center;
               line-height:20px;
               font-size:12px;
               margin:0;
            }
            
		       </style>
        
    </head>
    
    <body>
        <!-- HEADER 开始 -->
        <header class="" role="banner">
            <div class="header container-fluid">
                <div class='container'>
                    <div class="row">
                        <div class="col-sm-4">
                            <img src='http://www.blog.com/static/images/logo_off.png'>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">搜索</button>
                                </span> 
                            </div>
                        </div>
                        
                        <div class="col-sm-4">
                            <div class="btn-group pull-right">
                              <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;购物车</button>
                              <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                              </button>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="#">去结算</a></li>
                                <li><a href="#">清空购物车</a></li>
                              </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER 结束 -->
    
        <!-- 幻灯片开始 -->  
        <div class="container">
            <div class="row">
                <div class="col-sm-12 banner" style="padding: 0;">
                	<ul>
        				<li style="background-image: url('http://www.bootcss.com/p/unslider/img/sunset.jpg');">
        					<div class="inner">
        						<h1>The jQuery slider that just slides.</h1>
        						<p>就是这个不到3kb的插件！没有奇特的特效或无用的标签。</p>
        
        						<a class="btn" href="#download">下载</a>
        					</div>
        				</li>
        
        				<li style="background-image: url('http://www.bootcss.com/p/unslider/img/wood.jpg');">
        					<div class="inner">
        						<h1>Fluid, flexible, fantastically minimal.</h1>
        						<p>Use any HTML in your slides, extend with CSS. You have full control.</p>
        
        						<a class="btn" href="#download">下载</a>
        					</div>
        				</li>
        
        				<li style="background-image: url('http://www.bootcss.com/p/unslider/img/subway.jpg');">
        					<div class="inner">
        						<h1>开源</h1>
        						<p>Unslider的所有源码都托管在GitHub上。</p>
        
        						<a class="btn" href="//github.com/idiot/unslider">参与</a>
        					</div>
        				</li>
        
        				<li style="background-image: url('http://www.bootcss.com/p/unslider/img/shop.jpg');">
        					<div class="inner">
        						<h1>Uh, that’s about it.</h1>
        						<p>I just wanted to show you another slide.</p>
        
        						<a class="btn" href="#download">下载</a>
        					</div>
        				</li>
        			</ul>
                </div>
            </div>
        </div>
        <!-- 幻灯片结束 -->
    
        <!-- 店长推荐 开始 -->
        <div class='container' id="prod-box">
            <div class="row">
                <div class="col-sm-12" style="border-bottom:2px solid rgb(216,57,48);margin-bottom:20px;margin-bottom:0px;">
                    <h3 style="color: rgb(216,57,48);">店长推荐</h3>
                </div>
                
                <div class="col-sm-12"  style="padding:0;margin-bottom:0px;">
                    <div class="shop_commend">
                        <a>
                            <img src="http://www.blog.com/static/images/1.jpg">
                        </a>
                    </div>
                    <div class="shop_commend">
                        <a>
                            <img src="http://www.blog.com/static/images/1.jpg">
                        </a>
                    </div>
                    <div class="shop_commend">
                        <a>
                            <img src="http://www.blog.com/static/images/1.jpg">
                        </a>
                    </div>
                    <div class="shop_commend">
                        <a>
                            <img src="http://www.blog.com/static/images/1.jpg">
                        </a>
                    </div>
                    <div class="shop_commend" style="margin: 0;float:right;">
                        <a>
                            <img src="http://www.blog.com/static/images/1.jpg">
                        </a>
                    </div>
                </div>
                       
                <div class="col-sm-12"  style="padding:0;">
                    <div class="shop_commend">
                        <a>
                            <img src="http://www.blog.com/static/images/1.jpg">
                        </a>
                    </div>
                    <div class="shop_commend">
                        <a>
                            <img src="http://www.blog.com/static/images/1.jpg">
                        </a>
                    </div>
                    <div class="shop_commend">
                        <a>
                            <img src="http://www.blog.com/static/images/1.jpg">
                        </a>
                    </div>
                    <div class="shop_commend">
                        <a>
                            <img src="http://www.blog.com/static/images/1.jpg">
                        </a>
                    </div>
                    <div class="shop_commend" style="margin: 0;float:right;">
                        <a>
                            <img src="http://www.blog.com/static/images/1.jpg">
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- 店长推荐 结束 -->
    
        <!-- 商品橱窗 开始 -->
        <div class='container' id="prod-box">
            <div class="row">
                <div class="col-sm-12" style="border-bottom:2px solid rgb(216,57,48);margin-bottom:20px;">
                    <h3 style="color: rgb(216,57,48);">热门商品</h3>
                </div>
                <div class="col-sm-12">
                    <div class="card col-sm-3">
                        <a>
                            <img src="http://www.blog.com/static/images/1.jpg">
                        </a>
                        <div class="price">
                            <span>375.00</span>
                        </div>
                        <div class="prod">
                            <a>NewBalance 475</a>
                        </div>
                    </div>
                    <div class="card col-sm-3">
                        <a>
                            <img src="http://www.blog.com/static/images/1.jpg">
                        </a>
                        <div class="price">
                            <span>375.00</span>
                        </div>
                        <div class="prod">
                            <a>NewBalance 475</a>
                        </div>
                    </div>
                    <div class="card col-sm-3">
                        <a>
                            <img src="http://www.blog.com/static/images/1.jpg">
                        </a>
                        <div class="price">
                            <span>375.00</span>
                        </div>
                        <div class="prod">
                            <a>NewBalance 475</a>
                        </div>
                    </div>
                    <div class="card col-sm-3">
                        <a>
                            <img src="http://www.blog.com/static/images/1.jpg">
                        </a>
                        <div class="price">
                            <span>375.00</span>
                        </div>
                        <div class="prod">
                            <a>NewBalance 475</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card col-sm-3">
                        <a>
                            <img src="http://www.blog.com/static/images/1.jpg">
                        </a>
                        <div class="price">
                            <span>375.00</span>
                        </div>
                        <div class="prod">
                            <a>NewBalance 475</a>
                        </div>
                    </div>
                    <div class="card col-sm-3">
                        <a>
                            <img src="http://www.blog.com/static/images/1.jpg">
                        </a>
                        <div class="price">
                            <span>375.00</span>
                        </div>
                        <div class="prod">
                            <a>NewBalance 475</a>
                        </div>
                    </div>
                    <div class="card col-sm-3">
                        <a>
                            <img src="http://www.blog.com/static/images/1.jpg">
                        </a>
                        <div class="price">
                            <span>375.00</span>
                        </div>
                        <div class="prod">
                            <a>NewBalance 475</a>
                        </div>
                    </div>
                    <div class="card col-sm-3">
                        <a>
                            <img src="http://www.blog.com/static/images/1.jpg">
                        </a>
                        <div class="price">
                            <span>375.00</span>
                        </div>
                        <div class="prod">
                            <a>NewBalance 475</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- 商品橱窗 结束 -->
        
        <!-- FOOTER 开始 -->
        <div class="col-sm-12 footer">
            <p>Copyright © 2010-2014 北京创锐文化传媒有限公司 Jumei.com 保留一切权利。 客服热线：400-123-8888，4000-123-888</p>
            <p>京公网安备 110105001608 | 京ICP证111033号 | 食品流通许可证 SP1101051110165515（1-1） | 营业执照</p>
        </div>
        <!-- FOOTER 结束 -->
    </body>

</html>

<script>


$(function(){
    

	$('.banner').unslider({
		// arrows: true,
		fluid: true,
		dots: true
	});
	$("header").pin();
});
</script>