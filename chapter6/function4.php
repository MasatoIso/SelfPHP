<?php 
//関数は関数の中に定義することもできるが、その関数が呼び出されないと中にある関数は定義されない（呼び出そうとしても未定義なのでエラーになる）
// test();
$area = getTriangleArea(8, 10);
print $area;
echo "<br/>";

function test(){
    function getTriangleArea(float $base, float $height): float {
        //戻り値をreturnで
        return $base * $height / 2; 
    }
}