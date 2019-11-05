<?php
//インデックス番号を自分で割り振ることができる
$data = [
    1 => 'yamda', 2 => 'tanaka', 3 => 'sato',
];


print_r($data);

//11+1がsatoのインデックス番号になる
$data2 = [
    1 => 'yamda', 11 => 'tanaka', 'sato',
];

print_r($data2); 


//負数の次は自動的に0になる
$data3 = [
    -5 => 'yamda', 'tanaka', 'sato',
];

print_r($data3);  

//
$data2 = [
    1 => 'yamda', 'name' => 'tanaka', 'sato',
];

print_r($data2);  //11+1がsatoのインデックス番号になる



?>