<?php

$f = "./user";
$number = file_get_contents($f);
$number = $number+1;
$number = file_get_contents($f,$number);
echo "访问量:";echo $number;
