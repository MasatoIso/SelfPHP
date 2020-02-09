<?php

require_once 'person5.php';
require_once 'FriendList.php';

$list = new FriendList();
$list->add(new Person('太郎', 'ハム'));
$list->add(new Person('波', '掛谷'));
$list->add(new Person('覚', '高江'));

$list2 = clone $list;
var_dump($list2(1) === $list(1));