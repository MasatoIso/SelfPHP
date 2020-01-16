<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table border="1">
    <tr>
    <th>ファイル</th><th>サイズ</th><th>最終アクセス日</th><th>最終更新日</th><th>作成日時</th>
    </tr>
    <?php
    //DirectoryIteratorクラスを生成することでフォルダにアクセスする
    $dir = new DirectoryIterator('./');
    foreach($dir as $file){
        if($file->isFile()){
    ?>
    <tr>
    <td><?php print mb_convert_encoding($file->getFileName(), 'UTF-8', 'SJIS-WIN'); ?></td>
    <td><?php print $file->getSize(); ?>B</td>
    <td><?php print date('Y/m/d H:i:s', $file->getATime()); ?></td>
    <td><?php print date('Y/m/d H:i:s', $file->getMTime()); ?></td>
    <td><?php print date('Y/m/d H:i:s', $file->getCTime()); ?></td>
    </tr>
    <?php
        }
    }
    ?>
    </table>
</body>
</html>