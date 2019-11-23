<?php
for ($i = 1; $i < 10; $i++){
    for ($j = 1; $j < 10; $j++){
        $result = ${i} * ${j};
        //breakはそのループを終えるだけ
        if($result > 40){break;}
        print "${result} $nbsp";
    }
    print "<br />";
}


for ($i = 1; $i < 10; $i++){
    for ($j = 1; $j < 10; $j++){
        $result = ${i} * ${j};
        //複数のループから抜け出す場合は数字を指定する　break ループ階層数
        if($result > 40){break 2;}
        print "${result} $nbsp";
    }
    print "<br />";
}
?>