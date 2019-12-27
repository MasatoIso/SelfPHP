<?php 
function increment(int $num):int {
    $num++;
    return $num;
}

$value = 10;
print increment($value);
print $value;

//参照値渡しをする場合は仮引数の頭に&をつける
function increment2(int &$num):int {
    $num++;
    return $num;
}

$value = 10;
print increment2($value);
print $value;