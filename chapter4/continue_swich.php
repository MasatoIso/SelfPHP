<?php
for ($i= 1; $i < 4; $i++){
    $result = 0;
    switch ($i){
        case 1:
        case 3:
            $result = $i * $i;
            break;
        case 2:
        //2階層分抜ける場合は階層を指定する　breakと同じ
            continue 2;
    }
    print "${i}の２乗は${result}です。<br />";
}

?>