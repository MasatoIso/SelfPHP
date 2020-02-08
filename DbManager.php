<?php
function getDb(){
    $dsn = 'mysql:dbname=selfphp; host=localhost; charset=utf8';
    $usr = 'root';
    $passwd = 'root';

    $db = new PDO($dsn, $usr, $passwd);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
}