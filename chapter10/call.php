<?php

require_once 'MyMail.php';

$m = new MyMail();
// プロパティをメソッドの形で呼び出す
$m->From('admin@example.com');
print $m->From();