<?php

require_once 'person5.php';

$p1 = new Person('リオ', '山田');

$p2 = $p1;
var_dump($p1 == $p2);
// 参照値渡しのため、同じインスタンスとなる
var_dump($p1 === $p2);

$p3 = clone $p1;
var_dump($p1 == $p3);
// 別のインスタンスと評価される
var_dump($p1 === $p3);


// == は同じクラスに属するか　同じプロパティと値を持つか 
// ===は同じクラスの同じインスタンスを参照しているか