<?php 
function checkStatic(){
    //static命令でローカル変数を維持する
    static $x = 0;
    $x++;
    print "unset前: ${x}";
    //static命令が一時的ローカル変数になるだけで、静的変数がなくなるわけではない。
    unset($x);
    $x =13;
    print "unset後: ${x}<br/>";
}

checkStatic();
checkStatic();