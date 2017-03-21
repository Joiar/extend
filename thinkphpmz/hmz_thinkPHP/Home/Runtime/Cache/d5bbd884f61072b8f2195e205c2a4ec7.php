<?php if (!defined('THINK_PATH')) exit();?><!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
	<link rel="stylesheet" href="__PUBLIC__/css/public.css" />
	<script type="text/javascript" src='__PUBLIC__/js/jquery-1.7.2.min.js'></script>
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
        <div align="center">
             <div id="top">

		</div>
       <div class="login">
       <form name="frmReg" onsubmit="return check()" action="__URL__/doReg" method="post">
                <span style="width:80px; color: #670768; font-size: 24px; text-align: center;">欢迎进入注册界面:</span>
                <br/>
                <br/>
		<span style="width:80px">用 户 名:</span>
                <input style="width: 200px" type="text" name="uName"/>
                <br/>
                <br/>
                <span style="width:80px">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码:</span>
                <input style="width: 200px" type="password" name="uPass"/>
                <br/>
                <br/>
                 <span style="width:80px">重复密码:</span>
                <input style="width: 200px" type="password" name="uPass1"/>
                <br/><br/>
                <input type="submit" name="btnOK" value="确定"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="reset" name="btnCan" value="取消"/>
 
	</form>
       </div>
        </div>
    </body>
</html>