<?php
session_start();

include $_SERVER['DOCUMENT_ROOT']."/include/class/validationcode.class.php";

$code = new validationCode(80,20,4);

$code->showImage();   //输出到页面中供 注册或登录使用

$_SESSION['code']=$code->getCheckCode();  //将验证码保存到服务器