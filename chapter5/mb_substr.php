<?php
mb_internal_encoding('UTF-8');
$str = 'WINGSプロジェクト';

//引数は　取得先の文字列, 取得開始位置, 何文字取得するか
print mb_substr($str, 5, 2);
//6文字目以降を取得
print mb_substr($str, 5);
//6文字目から末尾4文字を切り取ったものを取得
print mb_substr($str, 5, -4);
//後方6文字目から2文字取得
print mb_substr($str, 5, -6, 2);
?>