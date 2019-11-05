<?php

//(データ型)値　で明示的にデータ型を変換する
var_dump((int)1530.95);
var_dump((int)-1530.95);
var_dump((int)true);
var_dump((string)true);
var_dump((int)false);
var_dump((string)false);
var_dump((array)100);
var_dump((unset)-1530.95);  //unsetでnullになる


//(データ型)値　で明示的にデータ型を変換する
//10進数や指数表現は読み取れる部分まで読み取る
var_dump((int)'0b11');
var_dump((int)'0777');
var_dump((int)0xFF);
var_dump((string)'1E4');

//10進数や指数表現の変換では以下を使用する
var_dump(bindec('0b11'));
var_dump(octdec('0777'));
var_dump(hexdec(0xFF));
var_dump((float)'1E4');

//bindec, octdec, hexdec(値)の形にする

?>