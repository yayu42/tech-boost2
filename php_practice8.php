<?php
$time = mktime(9);
var_dump(date("Y年m月d日h時i分s秒",$time));

$time = mktime(10,10,10);
var_dump(date("Y年m月d日h時i分s秒",$time));

$time = mktime(0,0,0,1,1,2022);
var_dump(date("Y年m月d日h時i分s秒",$time));

?>