<?php
function my_array_walk(array $array, callable $func){
    foreach($array as $key => $value){
        $func($value, $key);
    }
}

$data = [100, 50, 10, 5];
$result = 0;
//use命令で$resultを使用できるようになった。参照値渡しでないと値が変化しない
my_array_walk($data, function(float $value, int $key) use(&$result){
    $result += $value;
});

print $result;


//globalだと別の関数のローカル変数を指定できないので,useを用いる
function hoge(){
    $data = [100, 50, 10, 5];
    $result = 0;

    my_array_walk($data, function(float $value, int $key) use(&$result){
        $result += $value;
    });
    print $result;
}

hoge();
