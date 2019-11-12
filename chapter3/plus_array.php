<?php
$members = [
    'yamda' => '千葉県',
    'tanaka' => '岡山県',
    'hio' => '群馬県',
    'honda' => '愛知県',
];

$members2 = [
    'yamdaaaa' => '千葉県',
    'tanakaaa' => '岡山県',
    'hiooo' => '群馬県',
    'hondaaaa' => '愛知県',
];

$result = $members + $members2;
print_r($result);

$ary1 = [1, 3, 5];
$ary2 = [2, 3, 6];

$result = $ary1 + $ary2;
print_r($result);
//式の左の配列に存在しないキーの要素を右から取り出して左に追加する

?>