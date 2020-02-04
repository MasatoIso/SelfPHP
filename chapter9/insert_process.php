<?php
require_once('DbManager.php');


try {
    $db = getDb();
    // prepareメソッドでSQL文の準備, 挿入する値はバインドしておく
    $stmt = $db->prepare('INSERT INTO book (isbn, title, price, publish, published) VALUES(:isbn, :title, :price, :publish, :published)');
    // bindValueメソッドでPOSTで受け取った値を入れていく
    // bindValue(パラメータ名, パラメータ値)
    $stmt->bindValue(':isbn', $_POST['isbn']);
    $stmt->bindValue(':title', $_POST['title']);
    $stmt->bindValue(':price', $_POST['price']);
    $stmt->bindValue(':publish', $_POST['publish']);
    $stmt->bindValue(':published', $_POST['published']);
    // executeメソッドでSQL文を実行する
    $stmt->execute();

    header('Location: http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/insert_form.php');
} catch(PDOException $e) {
    print "エラ〜メッセージ{$$e->getMessage()}";
}

// 以下のように名前なしパラメータで置き換えることができるが、基本的には名前付きパラメータの方が良い
$stmt = $db->prepare('INSERT INTO book (isbn, title, price, publish, published) VALUES(?, ?, ?, ?, ?)');
$stmt->bindValue(1, $_POST['isbn']);
$stmt->bindValue(2, $_POST['title']);
$stmt->bindValue(3, $_POST['price']);
$stmt->bindValue(4, $_POST['publish']);
$stmt->bindValue(5, $_POST['published']);