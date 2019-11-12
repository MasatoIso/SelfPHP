

<?php
//配列の比較
// 1. 要素数で比較する
// 2. 要素数が等しい場合、同じキー同士で値の大小を比較
// 3. 1,2が等しい場合、両者は等しい

$data01 = [1, 2, 3];
$data02 = [1, 5];
var_dump($data01 < $data02);
echo "<br />";  

$data03 = [1, 2, 3];
$data04 = [1, 5, 1];
var_dump($data03 < $data04);  
echo "<br />";

$data05 = [1, 2, 3];
$data06 = [1, 2, '3'];
var_dump($data05 == $data06);  
var_dump($data05 === $data06);  
echo "<br />";

$data07 = ['A' => 'a', 'B' => 'b', 'C' => 'c' ];
$data08 = ['A' => 'a', 'C' => 'c' , 'B' => 'b'];
var_dump($data07 == $data08);  
var_dump($data07 === $data08);  


?>