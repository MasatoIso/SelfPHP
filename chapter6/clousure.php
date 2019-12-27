<?php 
function my_walk_array(array $array, callable $func ){
    foreach($array as $key => $value){
        $func($value, $key);
    }
}


$data = ['杉山', '永田', '杉沼', '和田', '土井',];
//仮引数に無名の関数を指定することで、使い捨ての関数に名前をつける必要がなくなる
my_array_walk($data,
    function($value, $key) {
        print "${key}: ${value}<br/>";
    }
);