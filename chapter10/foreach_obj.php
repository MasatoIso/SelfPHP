<?php
require_once 'MyClass.php';

$cls = new MyClass();


// アクセス修飾子によって制限がかかる
foreach ($cls as $key => $value) {
    print "{$key}: {$value} <br>";
}

print '<hr>';
$cls->showProperty();