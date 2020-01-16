<?php
$fmt = 'Y年m月d日 H時i分s秒';
$time = '2020年01月16日 20時30分00秒';
$dt = DateTime::createFromFormat($fmt, $time);
print $dt->format('Y-m-d H:i:s');