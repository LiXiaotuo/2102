<?php

$arr = ["zhangsan","lisi","Baby","Mike","John","Jack","Zhaoliu"];
$arr1 = [1,2,3,4,5,6,7];
// array_rand()		//随机取出一个或多个key

$k = array_rand($arr,1);

echo $arr[$k];echo "</br>";

//array_merge()		//合并数组
print_r(array_merge($arr,$arr1));echo "</br>";

//array_values()		//返回数组中的值
print_r(array_values($arr));echo "</br>";

//array_keys()		//返回数组中的下标
print_r(array_keys($arr));echo "</br>";

//array_unique	//数组去重
$arr2 = [1,2,3,4,5,1,2,3,4,5];
print_r(array_unique($arr2));


