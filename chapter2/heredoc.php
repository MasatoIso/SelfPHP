<?php
$str = 'PHP(長いので省略)';
$msg = <<<EOD
{$str}は、サーバーサイドで動作する簡易なスクリプト言語です。
まずは、本書でじっくり基礎がためしましょう。<br />
"Let's start, everyone!!"
EOD;


// <<<EOD EOD;で改行を含む長い文字列を
print $msg;
?>