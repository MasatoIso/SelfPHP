<?php
//2
$dt = new DateTime();
print $dt->format('Y年m月d日');
echo '<br/>';
print $dt->format('Y年m月t日');
echo '<br/>';
$dt->add(new DateInterval('P1M10D'));
print $dt->format('Y年m月d日');

