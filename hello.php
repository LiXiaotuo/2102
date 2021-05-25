<?php
    function add($num1,$num2){
        return $num1+$num2;
    }

    // 
    $a = 11;
    $b = 12;
    $c =add($a,$b);

    // 单引号原样输出
    echo '$a+$b='.$c;
    // 换行
    echo "\n";
    // 双引号解析变量
    echo "$a+$b=$c";
    echo "\n";

    // time()时间戳
    echo time();
    echo "\n";

    // 显示当前绝对路径
    echo __FILE__;
    echo "\n";

    // 当前行号
    echo __LINE__;