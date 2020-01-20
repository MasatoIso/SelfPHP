<?php require_once('../encode.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table border="1">
    <?php
    //リクエストヘッダを取得する
    foreach($_SERVER as $key => $value){
        if(mb_strpos($key, 'HTTP') === 0){
            ?>
            <tr>
            <th> <?= e($key) ?> </th>
            <td> <?= e($value) ?> </td>
            </tr>
        <?php 
        }
    }
    ?>
    </table>
</body>
</html>