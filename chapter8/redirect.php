<?php 
//Locationヘッダを設定してクライアントを移動させる
// header('Location: http://localhost:8888/selfphp/chapter8/req_header.php');

header('Location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/req_header.php');
