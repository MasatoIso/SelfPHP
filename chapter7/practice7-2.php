<?php
$fmt = 'Y年m月d日';
$time = '2020年01月16日';
$dt = DateTime::createFromFormat($fmt, $time);
print $dt->format('Y/m/d');