<?php 

//グローバル変数
$x = 10;

function checkScope() : int {
    //関数内でのみの$x 名前は同じだが、示している変数は異なる
    return ++$x;
}


print checkScope();
echo "<br />";
print $x;