<?php
$x = 1;
if($x !== 2){
    print '実行されました';
};
$x == 2 or print '実行されました。';
//or は左式がfalseであれば右式を実行する
//反対に、trueであれば右式は実行されない　andもそうで、左式がfalseであれば、右式を実行しない
?>