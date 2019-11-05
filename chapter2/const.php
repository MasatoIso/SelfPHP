<?php
//定数は const 定数名前 = で定義する。　＄は付けない　また、大文字にすることで、区別しやすくする。
const TAX = 1.08;
$price  = 1000;
$sum = $price * TAX;
print $sum;

?>
