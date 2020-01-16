<?php
$dt1 = new DateTime('2020/01/16 20:20:20');
$dt2 = new DateTime('2023/01/16');
$interval = $dt1->diff($dt2, true);
print $interval->format('%Y年%M月%d日 %H時間%I分%S秒');