<?php 
//setcookie関数　クッキー名,　値, 有効期限
setcookie('email', $_POST['email'], time() + (60 * 60 * 24* 90)); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    クッキーを焼きました
</body>
</html>