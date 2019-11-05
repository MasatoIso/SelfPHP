<?php
$title = 'サーバーサイド技術の学び舎 -WINGS';
$data1 = "サポートサイト\t「${title}」へ<br />";   
$data2 = 'サポートサイト\t「{$title}」へ<br />';

print $data1;
print $data2;

// \t 二重引用符で括られた際に、タブスペースとして認識される　
// $は中かっこの中でも外でも問題ない
?>