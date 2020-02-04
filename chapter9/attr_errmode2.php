<?php
require_once('DbManager.php');

try {
    $db = getDb();
    $db->exec('MECHA KUTYA YANKE');
} catch (PDOException $e) {
    print "エラーコード:{$e->getCode()} <br>";
    print "エラーメッセージ:{$e->getMessage()} <br>";
}