<?php
session_start();

//セッション変数を空にする
$_SESSION = [];

//セッションだけでなく、クッキーも破壊する必要がある。
if(isset($_COOKIE[session_name()])){
    $cparm = session_get_cookie_params();
    setcookie(session_name(), '', time() - 3600, $cparam['path'], $cparam['domain'], $cparam['secure'], $cparam['httponly']);
}

session_destroy();