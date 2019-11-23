<?php
//foreachでは通常値渡しをしている。なので、配列や連想配列の値を書き換える際は、参照渡しをする必要がある。
$data = ['高江', '掛谷', '日尾', '浦井', '和田'];

foreach ($data as &$value){
    $value = 'New' . $value;
}

print_r($data);


?>