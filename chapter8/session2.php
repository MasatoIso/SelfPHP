<?php
//セッションを使用するファイルでは宣言する必要がある
session_start();

$_SESSION['email'] = $_POST['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    セッション情報を保存しました。
</body>
</html>