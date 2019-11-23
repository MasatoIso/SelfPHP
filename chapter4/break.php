<?php
$sum = 0;

for ($i = 0; $i <= 100; $i++){
    $sum += $i;
    //if文でbreak処理を行う
    if( $sum >= 1000){break;}
}
// print $sum;
print "合計が1000を超えるのは１から${i}を加算したときです。";
?>