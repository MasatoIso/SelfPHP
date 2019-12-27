<?php
function getPrimes(){
    $sum = 2;

    while(true){
        if (isPrime($sum)){ yield $sum;}
        $sum++;
    }
}

function isPrime(int $value): bool {
    $prime = true;

    for($i= 2; $i<= floor(sqrt($value)); $i++){
        if($value % $i === 0){
            $prime = false;
        break;
        }
    }
    return $prime;
}

foreach(getPrimes() as $prime){
    if ($prime > 100){ die();}
    print $prime;
}