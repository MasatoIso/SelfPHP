<?php 
require_once('returns.php');

//そのまま配列として受け取っている
$result = max_min(10, 2, -5, 3, 78);
print_r($result);

//listで変数を用意しておいて、配列の要素を変数に入れる
list($max, $min) = max_min(10, 2, -5, 3, 78);
print $max . $min;