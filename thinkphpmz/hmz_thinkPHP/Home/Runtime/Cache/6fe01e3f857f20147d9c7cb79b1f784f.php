<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
    <head>
        <title>购物车</title>
        <link href="__PUBLIC__/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <link href="__PUBLIC__/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
        <script src="__PUBLIC__/js/jquery.min.js"></script>
        <script src="__PUBLIC__/js/jquery.easydropdown.js"></script>
        <script>$(document).ready(function(c) {
            $('.alert-close').on('click', function(c){
            $('.message').fadeOut('slow', function(c){
            $('.message').remove();
            });
            });	  
            });
        </script>
        <script>$(document).ready(function(c) {
            $('.alert-close1').on('click', function(c){
            $('.message1').fadeOut('slow', function(c){
            $('.message1').remove();
            });
            });	  
            });
        </script>

        <style>
            #lr{width: 130px; height: 30px; float: left; margin-top: 12px; margin-left: 30px; }
            #lr a{color: #fff;}
        </style>
        <link rel="stylesheet" href="__PUBLIC__/style/style.css" />

    </head>
    <body>
        <!-- header -->
        <div class="header">
            <div class="container">
                <div class="header-right">
                    <div class="hea-rig">
                        <ul class="icon1 sub-icon1">

                            <li><div class="cart1">
                                    <a href="#" class="cart-in"> </a>
                                </div>
                                <ul class="sub-icon1 list">
                                    <h3>购物车</h3>
                                    <div class="shopping_cart">
                                        <div class="cart_box">
                                            <div class="message">
                                                <div class="alert-close"> </div> 
                                                <div class="list_img"><img src="__PUBLIC__/images/4.jpg" class="img-responsive" alt=""></div>
                                                <div class="list_desc"><h4><a href="#">黛青春护发滋润霜</a></h4>1 x<span class="actual">
                                                        ￥12.00</span></div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="cart_box1">
                                            <div class="message1">
                                                <div class="alert-close1"> </div> 
                                                <div class="list_img"><img src="__PUBLIC__/images/11.jpg" class="img-responsive" alt=""></div>
                                                <div class="list_desc"><h4><a href="#">焕采泡沫洁护发乳</a></h4>1 x<span class="actual">
                                                        ￥12.00</span></div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="total">
                                        <div class="total_left">花费 : </div>
                                        <div class="total_right">￥24.00</div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="login_buttons">
                                        <div class="check_button"><a href="__URL__/checkout">购买</a></div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </ul>
                            </li> 
                            <li>:<span>1</span></li>
                            <div class="clearfix"> </div>
                        </ul>
                    </div>
                    <div class="head-nav">
                        <span class="menu"> </span>
                        <ul class="cl-effect-15">
                            <li><a href="__URL__/index">首页</a></li>
                            <li><a href="__URL__/products">全线产品</a></li>
                            <li><a href="__URL__/single">联系我们</a></li>
                            <li class="active"><a href="__URL__/checkout">论坛</a></li>
                            <li><a href="__URL__/signin">关于我们</a></li>
                            <div id="lr">
                                <?php if(empty($_SESSION['curUser'])): ?>您尚未&nbsp;&nbsp;<a href="__URL__/login">登录</a>&nbsp;|&nbsp;<a href="__URL__/login">注册</a>
                                    <?php else: ?>
                                    您好：<a href="__URL__/userdetail"><?php echo ($_SESSION['curUser']['uName']); ?></a>&nbsp;|&nbsp;<a href="__URL__/doLogout">登出</a><?php endif; ?>
                            </div>
                            <div class="clearfix"> </div>
                        </ul>
                        <!-- script-for-nav -->
                        <script>
                            $( "span.menu" ).click(function() {
                            $( ".head-nav ul" ).slideToggle(300, function() {
                            // Animation complete.
                            });
                            });
                        </script>
                        <!-- script-for-nav --> 
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="logo">
                    <a href="__URL__/index"><img src="__PUBLIC__/images/logo.png" class="img-responsive" alt=""></a>
                </div>
                <div class="search2">
                    <form>
                        <li><input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                             this.value = '';
                                                         }"></li>
                        <li><div class="section_room1">
                                <select id="country" onchange="change_country(this.value)" class="frm-field required">
                                    <option value="null">中文</option>
                                    <option value="null">英语</option>        
                                </select>
                            </div></li>
                        <li> <input type="submit" value="搜索"></li>
                        <div class="clearfix"> </div>
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- header -->
        <div class="login-page">
            <h1>论坛</h1>
            <div class="container">
                <div class="check-out">
                    
                    
                    
                   <div class="container">
        <div class="t">
             <table cellSpacing="0" cellPadding="0" width="100%">
                <tr class="tr2" align="center">
                    <td colspan="2">论坛</td>
                    <td style="width: 10%">主题</td>
                     <td style="width: 30%">最后发表</td>
                </tr>
                <?php if(is_array($lstBoard)): $i = 0; $__LIST__ = $lstBoard;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="tr3">
                        <td colspan="4">
                            <?php echo ($vo["boardName"]); ?>
                            <?php if(is_array($vo['subs'])): $i = 0; $__LIST__ = $vo['subs'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><tr class="tr3">
                                <td style="width: 5%">&nbsp;</td>
                                <th>
                             
                                    <a href=""><?php echo ($sub["board"]["boardName"]); ?></a>
                                </th>
                                <td align="center"><?php echo ($sub["count"]); ?></td>
                                <th>
                                    <span>
                                        <a href=""><?php echo ($sub["lastTopic"]["title"]); ?></a>
                                    </span>
                                    <br/>
                                    <span>
                                       <?php echo ($sub["uName"]); ?>
                                    </span>
                                    <span class="gray">
                                        <?php echo ($sub["lastTopic"]["publishTime"]); ?>
                                    </span>
                                </th>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </td>                        
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>                
            </table>
        </div>
        </div>
                    
                    
                    
                    
                    
                    
                    
                </div>
            </div>
        </div>

        <!-- footer -->
        <div class="footer">
            <div class="container">
                <div class="col-md-3 sel">
                    <h4>选择你的语言</h4>
                    <div class="section_room">
                        <select id="country" onchange="change_country(this.value)" class="frm-field required">
                            <option value="null">中文</option>
                            <option value="null">英语</option>       
                        </select>
                    </div>
                </div>
                <div class="col-md-2 leg">
                    <h4>友情链接</h4>
                    <ul>
                        <li><a href="http://www.baidu.com/"><span> </span>百度</a></li>
                        <li><a href="http://www.souhu.com/"><span> </span>搜狐</a></li>
                        <li><a href="http://www.suning.com/"><span> </span>苏宁易购</a></li>
                        <li><a href="http://www.guerlain.com.cn/"><span> </span>法国娇兰</a></li>
                    </ul>
                </div>
                <div class="col-md-5 con">
                    <h4>告诉我们</h4>
                    <div class="cont-1">
                        <form>
                            <input type="text" class="textbox" value="姓名" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                            this.value = 'Name';
                                                        }">
                            <input type="text" class="textbox" value="邮箱" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                            this.value = 'Email';
                                                        }">
                            <textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                            this.value = 'Message';
                                                        }">建议</textarea>
                            <div class="smt">
                                <input type="submit" value="提交">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- footer -->
        <!-- footer-bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-top">Copyright &copy; 2006-2020 韩美妆 版权所有&nbsp;&nbsp;美丽热线：400-800-8888</div>
                <div class="footer-dow">地址：蚌埠市龙子湖区曹山路1000号 &nbsp;&nbsp;粤ICP证32652958-1号</div>

                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- footer-bottom -->
    </body>
</html>