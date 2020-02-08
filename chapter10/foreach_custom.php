<?php

require_once 'person5.php';
require_once 'FriendList.php';

$list = new FriendList();
$list->add(new Person('太郎', '山田'));
$list->add(new Person('太郎', 'ハム'));
$list->add(new Person('太郎', 'ピコ'));

foreach ($list as $value) {
    print $value->show();
}