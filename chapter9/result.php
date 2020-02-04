<?php
require_once('DbManager.php');
require_once('../encode.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <table border="1">
        <tr>
            <th>ISBN</th><th>書名</th><th>価格</th><th>出版社</th><th>刊行日</th>
        </tr>
    <?php
    try {
        $db = getDb();

        // prepareメソッドでSQL文を準備する
        $stmt = $db->prepare("SELECT * FROM book ORDER BY published DESC");
        // executeメソッドで実行する
        $stmt->execute();

        // fetchメソッドで受け取った結果セットをwhileで繰り返して出力する
        // $rowの中にfetchの結果セットを銃んに挿入する
        // while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        
        //setFetchModeで結果セットの形式を指定する
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach($stmt as $row) {
    ?>

    <tr>
        <td><?=e($row['isbn']) ?></td>
        <td><?=e($row['title']) ?></td>
        <td><?=e($row['price']) ?></td>
        <td><?=e($row['publish']) ?></td>
        <td><?=e($row['published']) ?></td>
    </tr>

    <?php
    }
} catch(PDOException $e) {
    print "エラ〜メッセージ {$e->getMessage()}";
}
?>
    </table>
</body>
</html>


