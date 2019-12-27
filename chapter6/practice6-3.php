<?php
//可変長にする
function product(float ...$args): float {
    $result = 1;
    foreach ($args as $num){
        $result *= $num;
    }
    return $result;
}

print product(1, 2, 3, 4, 5);