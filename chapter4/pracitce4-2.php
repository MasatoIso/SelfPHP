<?php
for ($i = 1; $i < 10; $i++){
    for ($j = 1; $j < 10; $j++){
        $result = ${i} * ${j};
        if($j === 9){
            echo "${result}<br />";    
        }else{
            echo "${result}|";    
        }
    }
}
?>