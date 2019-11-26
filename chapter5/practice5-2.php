<?php
//1
$str1 = "サーバーサイド技術";
print mb_substr($str1, 4, 3). '<br/>';
//2
$str2 = "ｻｰﾊﾞｰｻｲﾄﾞ技術";
print mb_convert_kana($str2, 'KV'). '<br/>';
//3
$data = 'nankatekitounamojiretsu';
print mb_convert_encoding($data, 'EUC-JP', 'SJIS');

?>