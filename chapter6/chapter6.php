<?php 
//1
function square(float $base = 1, float $height = 1): float {
    return $base * $height;
}

print square(10).'<br/>';

//3
function processNumber(callable $func, float ...$args): array{
    foreach ($args as $arg) {
        $result[] = func($arg);
    }
    return $result;
}

list($x, $y) = processNumber(
    function(float $num): float {
        return $num * $num; },
        5, 15);

//4
function refCheck(int &$num){
    print $num. '<br/>';
    $num++;
    //参照値渡しされた変数がunsetされると、引数が破棄されるだけで、元の変数に影響はない
    unset($num);
    print $num.'<br/>';
}

$num = 1;
refCheck($num);
print $num;