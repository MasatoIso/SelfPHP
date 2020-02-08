<?php
require_once './area1.php';

//Areaクラスの静的メソッドを呼び出している 静的メソッドを呼び出すには::演算子を用いる
print '円の面積：' . Area::circle(10) . 'cm^2';