<form action="" method="POST">
<label for="title">書名:</label>
<input id="title" type="text" name="title" size="20">
<input type="submit" value="検索">
</form>

<?php
if (isset($_POST['title'])) {
    require_once('DbManager.php');
    require_once('../encode.php');

    try {
        $db = getDb();
        $stmt = $db->prepare('SELECT * FROM book WHERE title LIKE ?');
        $stmt->bindValue(1, '%' .$_POST['title']. '%');
        $stmt->execute();
        print '<ul>';
        while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
?>      
        <li><?=e($row->title)?>
            <?=e($row->price)?>円)</li>
<?php     }
        print '<ul/>';
    } catch (PDOException $e) {
        print "エラーメッセージ:{$e->getMessage()}";
    }
}
?>