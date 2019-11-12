<?php
$a = 1;
$b = &$a; //&をつけて代入すると、参照値渡しになる
$a++;

print $a;
print '<br />';
print $b;

$error = 'エラーが発生しました。';
print $error ?: '正常です。';
?>