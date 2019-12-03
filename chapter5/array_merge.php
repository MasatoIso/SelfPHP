<?php
//インデックス番号が重複していても、新しく割り振られる
$ary1 = [1, 3, 5];
$ary2 = [2, 3, 6];

print_r(array_merge($ary1, $ary2));
print "<br/>";

//連想配列のキーが重複していると、後者を優先する
$assoc1 = ['Apple' => 'Red', 'Orange' => 'Yellow', 'Melom' => 'Green'];
$assoc2 = ['Grape' => 'Purple', 'Apple' => 'Green', 'Strawberry' => 'Red'];

$result =array_merge($assoc1, $assoc2);
print_r($result);
print "<br/>";

$result2 =array_merge_recursive($assoc1, $assoc2);
print_r($result2);

?>