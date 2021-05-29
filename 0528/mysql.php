<?php
// 链接数据库
$link = new mysqli("localhost","root","root","goods");
//查询的sql语句
$sql = "select *from goods";
// 执行
$res = mysqli_query($link,$sql);

// 获取结果
$rows = mysqli_fetch_all($res,MYSQLI_ASSOC);
print_r($rows);
