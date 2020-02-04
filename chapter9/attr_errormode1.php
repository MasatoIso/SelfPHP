<?php
require_once('DbManager.php');

$db = getDb();
// エラーモードをサイレントに設定
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
// DBに問い合わせ命令を発行するメソッド
$db->exec('MECHA KUCHA YANKE');
if ($db->errorCode() !== '00000') {
    $info = $db->erroInfo();
    print "エラーコード: {$info[0]} <br/>";
    print "エラーコード(ドライバ): {$info[1]} <br/>";
    print "エラーメッセージ: {$info[2]} <br/>";
}