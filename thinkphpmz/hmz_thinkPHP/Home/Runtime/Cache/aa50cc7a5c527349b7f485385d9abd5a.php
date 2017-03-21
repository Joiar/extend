<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title>用户登录</title>

        <script src="__PUBLIC__/js/jquery-2.2.4.min.js"></script>
        <script>
            $(document).ready(function() {

            $(".form").slideDown(500);

            $("#landing").addClass("border-btn");

            $("#registered").click(function() {
            $("#landing").removeClass("border-btn");
            $("#landing-content").hide(500);
            $(this).addClass("border-btn");
            $("#registered-content").show(500);

            })

            $("#landing").click(function() {
            $("#registered").removeClass("border-btn");
            $(this).addClass("border-btn");

            $("#landing-content").show(500);
            $("#registered-content").hide(500);
            })
            });
        </script>

        <style>
            * {
                margin: 0;
                padding: 0;
                font-family: "微软雅黑";
            }

            body {
                background: #F7F7F7;
            }

            .form {
                position: absolute;
                top: 50%;
                left: 50%;
                margin-left: -185px;
                margin-top: -210px;
                height: 420px;
                width: 340px;
                font-size: 18px;
                -webkit-box-shadow: 0px 0px 10px #A6A6A6;
                background: #fff;
            }

            .border-btn {
                border-bottom: 1px solid #ccc;
            }

            #landing,
            #registered {
                float: left;
                text-align: center;
                width: 170px;
                padding: 15px 0;
                color: #545454;
                cursor: pointer;
            }

            #landing-content {
                clear: both;
            }

            .inp {
                height: 30px;
                margin: 0 auto;
                margin-bottom: 30px;
                width: 200px;
            }

            .inp>input {
                text-align: center;
                height: 30px;
                width: 200px;
                margin: 0 auto;
                transition: all 0.3s ease-in-out;
            }

            .login {
                border: 1px solid #A6A6A6;
                color: #a6a6a6;
                height: 30px;
                width: 202px;
                text-align: center;
                font-size: 13.333333px;
                margin-left: 70px;
                line-height: 30px;
                margin-top: 30px;
                transition: all 0.3s ease-in-out;
                cursor: pointer;
            }

            .login:hover {
                background: #A6A6A6;
                color: #fff;
            }

            #bottom {
                margin-top: 30px;
                font-size: 13.333333px;
                color: #a6a6a6;
            }

            #registeredtxt {
                float: left;
                margin-left: 80px;
            }

            #forgotpassword {
                float: right;
                margin-right: 80px;
            }

            #photo {
                border-radius: 80px;
                border: 1px solid #ccc;
                height: 80px;
                width: 80px;
                margin: 0 auto;
                overflow: hidden;
                clear: both;
                margin-top: 30px;
                margin-bottom: 30px;
            }

            #photo>img:hover {
                -webkit-transform: rotateZ(360deg);
                -moz-transform: rotateZ(360deg);
                -o-transform: rotateZ(360deg);
                -ms-transform: rotateZ(360deg);
                transform: rotateZ(360deg);
            }

            #photo>img {
                height: 80px;
                width: 80px;
                -webkit-background-size: 220px 220px;
                border-radius: 60px;
                -webkit-transition: -webkit-transform 1s linear;
                -moz-transition: -moz-transform 1s linear;
                -o-transition: -o-transform 1s linear;
                -ms-transition: -ms-transform 1s linear;
            }


            #registered-content {
                margin-top: 40px;
                display: none;
            }

            .fix {
                clear: both;
            }
            .form{
                display: none;
            }
        
            
        </style>

        <script language="javascript">
            function check(){
            if(document.frmReg.uName.value==""){
            alert("用户名不能为空!");
            return false;
            }
            if(document.frmReg.uPass.value==""){
            alert(" 密码不能为空!");
            return false;
            }
            if(document.frmReg.uPass1.value==""){
            alert("重复密码不能为空!");
            return false;
            }
            ""
            if(document.frmReg.uPass1.value!=document.frmReg.uPass.value){
            alert("两次密码不一致!");
            return false;
            }
            }
        </script>

    </head>

    <body>
        <div class="form">
            <div id="landing">登录</div>
            <div id="registered">注册</div>
            <div class="fix"></div>
            <div id="landing-content">
                <form action="__URL__/doLogin" method="post" id="frmLogin">
                    <div id="photo"><img src="__PUBLIC__/images/photo.jpg" /></div>
                    <div class="inp"><input type="text" placeholder="用户名" name="uName" /></div>
                    <div class="inp"><input type="password" placeholder="密码" name="uPass" /></div>
                    <div class="login"  onclick="document.getElementById('frmLogin').submit()">登录</div>
                </form>
                <div id="bottom"><span id="registeredtxt">立即注册</span><span id="forgotpassword">忘记密码</span></div>
            </div>
            <div id="registered-content">
                <form action="__URL__/doReg" method="post" name="frmReg" onsubmit="return check()" id="frmReg">
                    <div class="inp"><input type="text" placeholder="请输入用户名" name="uName" /></div>
                    <div class="inp"><input type="password" placeholder="请输入密码" name="uPass" /></div>
                    <div class="inp"><input type="password" placeholder="请再次输入密码" name="uPass1" /></div>
                    <div class="login"  onclick="document.getElementById('frmReg').submit()">立即注册</div>
                </form>
            </div>
        </div>

    </body>
</html>