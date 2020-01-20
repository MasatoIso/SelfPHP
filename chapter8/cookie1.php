<?php require_once('../encode.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="cookie2.php" method="POST">
    <label for="email">メールアドレス</label>
    <input id="email" type="text" name="email" size="40" value="<?= e($_COKIE['email'] ?? '') ?>" />
    <input type="submit" value="送信">
    </form>
</body>
</html>