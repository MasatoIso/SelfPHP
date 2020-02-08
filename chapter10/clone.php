<?php
require_once 'Person5.php';

$p1 = new Person('リオ', '山田');
// 参照値渡しになる
$p2 = $p1;
// 値渡しの場合はcloneを使う
$p3 = clone $p1;
// p1の値も変更される
$p2->firstName = '俊雄';
$p2->lastName = '佐藤';
print_r($p1);
echo '<br>';
print_r($p2);
echo '<br>';
print_r($p3);
