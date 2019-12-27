<?php 
//代入演算子で引数にデフォルト値を設定することができる
function getTriangleArea(float $base = 5, float $height = 1): float{
    return $base * $height / 2;
}

//デフォルト値が採用される
$area = getTriangleArea();
print "三角形の面積は{$area}です。<br/>";

//前方の仮引数を省略できる
$area = getTriangleArea(10);
print "三角形の面積は{$area}です。<br/>";

$area = getTriangleArea(10, 5);
print "三角形の面積は{$area}です。<br/>";
