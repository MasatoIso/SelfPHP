<?php

// オートろーだを登録する関数
spl_autoload_register(function($name) {
    require_once "{$name}.php";
});