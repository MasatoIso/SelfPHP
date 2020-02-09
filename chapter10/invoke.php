<?php

require_once 'person5.php';
require_once 'FriendList.php';

$list = new FriendList();
$list->add(new Person('太郎', 'ハム'));
$list->add(new Person('波', '掛谷'));
$list->add(new Person('覚', '高江'));

// オブジェクトを関数の形式で呼び出す
print $list(1);