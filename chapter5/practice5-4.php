<?php
//1

$str = "住所は184-0000 鎌ヶ谷市梶小野町0-0-0です";
if(preg_match('/[0-9]{3}-[0-9]{4}/', $str, $data)){
    print "郵便番号: {$data[0]}<br/>";
}

//2
$msg = <<<EOD
お問い合わせはCQW15204@nifty.comまで
EOD;

print preg_replace('/[a-z0-9\.\-]+@([a-z0-9\-]+\.)+[a-z0-9\-]+/i', '<a href="$0">$0</a>', $msg);
?>