<?php
// 関連する処理をまとめたものをトランザクション処理とする。
// beginTransaction() で始まり　commit()で終わる　一つでも失敗すればrollBack()する


require_once('DbManager.php');

try {
    $db = getDb();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // トランザクションを開始する
    $db->beginTransaction();
    $db->exec("INSERT INTO book(isbn, title, price, publish, published) VALUES('978-4-2151-2', '独習php', 3200, '翔泳社', '2020-02-01')");
    // 主キー制約違反が生じる
    $db->exec("INSERT INTO book(isbn, title, price, publish, published) VALUES('978-884-2151-2', '独習php', 3500, '翔泳社', '2020-01-20')");
    // 全ての処理がうまくいけばコミットする
    $db->commit();
} catch(PDOException $e) {
    //　失敗すると（例外処理）ロールバック　一連の処理を取り消す
    $db->rollBack();
    print "エラーメッセージ: {$e->getMessage()}";
}