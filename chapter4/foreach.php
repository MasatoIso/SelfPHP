<?php
$data = ['高江', '掛谷', '日尾', '浦井', '和田'];

foreach($data as $value){
    print "名前は${value}です。<br />";
}

$data = ['高江' => '男', '掛谷' => '女', '日尾' => '男', '浦井' => '女', '和田' => '男'];

foreach($data as $value => $key){
    print "名前は${value}で性別は${key}です。<br />";
}
?>