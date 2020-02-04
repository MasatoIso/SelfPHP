<?php
require_once('DbManager.php');

$db = getDb();
// queryメソッドで実行できる。ただしバインドはできない
$stmt = $db->query('SELECT * FROM book ORDER BY published DESC');
print_r($stmt->fetchALL(PDO::FETCH_ASSOC));
?>