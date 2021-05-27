<?php
//接收 POST传参
//echo '<pre>';print_r($_POST);echo '</pre>';

//获取post
    $post = $_POST;
    //正则验证用户名
    // /^[\x{4e00}-\x{9fa5}]+$/u
    $patten = "/^[a-zA-Z]{6,}$/";

    if( !preg_match($patten,$post['username']) ){
        echo "必须为不小于6位的英文字母";
    }
    if($post['pwd']!=$post['pwd2']){
        echo "密码不一致";
    }
    