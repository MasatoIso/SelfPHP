<?php
$x = 1;
$y = $x;  //値だけを代入している
$x = 5;

print $y;//1になる

$x = 1;
$y = &$x;  //&$変数名でアドレスを参照して代入する
$x = 5;

print $y;//5になる
?>