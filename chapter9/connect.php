<?php
$dsn = 'mysql:dbname=selfphp; host=localhost; charset=utf8';
$usr = 'root';
$passwd = 'root';

try {
    // PODクラスをインスタンス化する
    $db = new PDO($dsn, $usr, $passwd);
    print '接続に成功しました。';
}   catch (PDOException $e) {
    print "接続に失敗しました。 {$e->getMessage()}";
    // finallyは例外の有無に関わらず実行される
}   finally {
    $db = null; 
}
