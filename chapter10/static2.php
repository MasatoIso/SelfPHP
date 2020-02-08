<?php
require_once './area2.php';

// areaクラスの静的プロパティを出力
print Area::$pi;

echo '<br>';

print Area::circle(10);