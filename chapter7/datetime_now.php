<?php
//DateTimeオブジェクトを生成する
$now = new DateTIme();
//nowオブジェクトのformatメソッドにアクセスする
print $now->format('Y年m月d日 H:i:s');

echo "<br/>";

$now2 = new DateTime('2020/01/16 20:20:30');
print $now2->format('Y年m月d日 H:i:s');

echo "<br/>";

$now3 = new DateTime(null, new DateTimeZone('America/Virgin'));
print $now3->format('Y年m月d日 H:i:s');