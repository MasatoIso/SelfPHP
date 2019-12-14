<?php 
$x =10;

function checkScope() : int {
    global $x;
    //ローカル変数が破棄されるだけ
    // unset($x);
    unset($GLOBALS['x']);
    return ++$x;
}


print checkScope();
echo "<br />";
print $x;