<?php
// 接收
$post = $_POST;

// 连接数据库
$link = new mysqli('localhost','root','root','php2102');

// 处理变量
$uname = trim($post['uname']);
$uage = trim($post['uage']);
$ujia = trim($post['ujia']);
// 添加的sql语句
$sql = "insert into goods(`uname`,`uage`,`ujia`) values('{$uname}','{$uage}','{$ujia}')";

// 准备阶段
$stmt = mysqli_prepare($link,$sql);

// 执行阶段
$res = mysqli_stmt_execute($stmt);


if($res){
    echo "成功";
    header("refresh:2,url='list.php'");exit;
}else{
    echo "失败";
}

?>
