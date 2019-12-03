<?php
$msg = <<<EOD
サンプルは、「サーバーサイド技術の学び舎(http://www.wings.msn.to/)」から入手できます。執筆のノウハウ集「WINGS Knowledge」(http://www31.atwiki.jp/wingsproject)もどうぞ。
EOD;

print preg_replace('|http(s)?://([\w-]+\.)+[\w-]+(/[\w- ./?%&=]*)?|', '<a href="$0">$0</a>', $msg);
//https?://[\w/:%#\$&\?\(\)~\.=\+\-]+ こっちにすると動く　上だと動かない

echo "<br/>";

$msg2 = <<<EOD
サンプルは、「サーバーサイド技術の学び舎(http://www.wings.msn.to/)」から入手できます。執筆のノウハウ集「WINGS Knowledge」(HTTP://www31.atwiki.jp/wingsproject)もどうぞ。
EOD;
//大文字を区別しない場合はiで修飾する
print preg_replace('|https?://[\w/:%#\$&\?\(\)~\.=\+\-]+|i', '<a href="$0">$0</a>', $msg2);
?>

