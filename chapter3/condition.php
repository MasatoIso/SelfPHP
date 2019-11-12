<?php
$score = 75;
print $score >= 70 ? '合格' : '不合格';   // ? true : false   条件演算子
echo '<br />';

$message = '';
print $message ?: '空です'; //式1 ?: 式2
echo '<br />';

// $message2 = '';
print $message2 ?? 'nullのとき出力';   //message2に空でも何か入っていればそれを出力。　そもそも何も設定されていない(null)であれば式2が出力される。
echo '<br />';

?>