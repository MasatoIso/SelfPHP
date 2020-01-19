<?php require_once('../encode.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    選択されたのは,
    <?= e($_POST['arch']) ?> です。
</body>
</html>