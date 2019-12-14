<?php 

declare(strict_types=1);
//関数の定義はfunction functionめい　(仮引数)
//処理
//閉じる
//仮引数・戻り値には型の宣言をしておく  →不正な引数が渡されるのを防ぐ
function getTriangleArea(float $base, float $height): float {
    //戻り値をreturnで
    return $base * $height / 2; 
}

//呼び出し時に引数を渡す
$area = getTriangleArea(8, 10);
print $area;
echo "<br/>";

//declare命令をしていないと以下の引数でも実行される。
$area2 = getTriangleArea(8, '5');
print $area2;
