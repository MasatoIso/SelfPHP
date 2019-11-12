<?php
CONST EPSILON = 0.00001; //小数点第5位まで求める

$x = 0.123456;
$y = 0.123455;

var_dump(abs($x - $y) < EPSILON); //absは絶対値を求める　イプシロン未満であれば、trueになる

?>