<?php
$str = 'にわにはにわにわとりがいる';

//文字列の位置を取得する オプションで開始位置も取得できる。
print mb_strpos($str, 'にわ');
//対象の文字列の最後に出現する位置を取得する
print mb_strrpos($str, 'にわ');
//存在しない場合はfalseになる
var_dump(mb_strpos($str, 'たこ'));
?>