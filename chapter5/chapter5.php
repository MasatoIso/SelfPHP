<?php
//1
$str = "PHPはPHP:Hypertext Preprocessorの略です";
print mb_strrpos($str, 'PHP');
echo "<br />";

//1-2
printf('%sの気温は%+-5.1f℃です', "弘前", "15.156");
echo "<br />";

//1-3
//upper case words
print ucwords('wings knowledge');
echo "<br />";

//1-4
$str2 = 'ボクの名前はリオです。';
$src = ['ボク', 'リオ'];
$rep = ['僕', 'Rio'];
print str_replace($src, $rep, $str2);
echo "<br />";

//2
$data = ['高江', '青木', '片渕'];
//2-1
print array_push($data, '山田', '日尾');
print_r($data);
echo "<br />";
//2-2
print array_unshift($data, '掛谷', '土井');
print_r($data);
echo "<br />";
//2-3
print_r(array_slice($data, 2, 3));
echo "<br />";


//4-1
print pow(5, 3);
//4-2
print abs(-12);
//4-3
$x = 'aiueo';
unset($x);
var_dump($x);