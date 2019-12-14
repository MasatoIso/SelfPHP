<?php 
//コンパイル時にすでに読み込まれているので、関数の定義はどこでも良い
$area = getTriangleArea(8, 10);
print $area;
echo "<br/>";

function getTriangleArea(float $base, float $height): float {
    //戻り値をreturnで
    return $base * $height / 2; 
}

//しかし、条件分岐の中で関数が定義されている場合は、関数を呼び出す処理よりも前に条件分岐によって関数が定義されていなければいけない。
//以下の文章はエラーになる
$area = getTriangleArea(8, 10);
print $area;
echo "<br/>";

if (true){
    function getTriangleArea(float $base, float $height): float {
    //戻り値をreturnで
    return $base * $height / 2; 
    }
}
