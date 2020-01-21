<?php
require_once('../encode.php');
//セッションを使用するファイルでは宣言する必要がある
//レスポンスヘッダにセッションIDと呼ばれるクッキーが送信されている。それをもとに対応したセッション情報を取得できる。s
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="session2.php" method="POST">
        <label for="email">メールアドレス：</label>
        <input id="email" type="text" name="email" value="<?= e($_SESSION['email'] ?? '') ?>">
        <input type="submit">
    </form>
</body>
</html>