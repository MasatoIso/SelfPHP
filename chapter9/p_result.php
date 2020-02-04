<?php
require_once('DbManager.php');
require_once('../encode.php');

try {
    $db = getDb();
    $stmt = $db->query('SELECT * FROM book ORDER BY published DESC');
    print '<ul>';
    while($row = $stmt->fetch(PDO::FETCH_OBJ)){ ?>
        <li><?=e($row->title) ?>
            (<?=e($row->publish) ?>)</li>
<?php 
    }
    print '</ul>';
} catch (PDOException $e) {
    print "エラ〜メッセージ{$e->getMessage()}";
}

?>