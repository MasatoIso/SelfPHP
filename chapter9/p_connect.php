<?php
try {
    $db = new PDO('mysql:dbname=selfphp; host=localhost; charset=utf8', 'root', 'root');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    print 'DBへの接続が成功しました。';
}   catch (PDOException $e) {
    print "エラ〜メッセージ: {$e->getMessage()}";
}