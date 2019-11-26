<?php
$str = 'ＷＩＮＧＳﾌﾟﾛｼﾞｪｸﾄあいう';

//第2引数に変換オプションを指定する
print mb_convert_kana($str, 'rKVh');
?>