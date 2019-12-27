<?php 
//仮引数の前に...をつけると可変長引数を
function sum(float ...$args): float{
    //結果を格納するための変数$result
    $result - 0;
    foreach($args as $arg){
        $result += $arg;;
    }
    return $result;
}

print sum(7, 3, 10);
print sum(7, 3, 10, -11, 1);