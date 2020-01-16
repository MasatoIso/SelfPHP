<?php
// //autoloadを読み込み、ライブラリを自動ロード
// require_once "../vendor/autoload.php";
// //Smartyオブジェクトを生成する
// $s = new Smarty();

// //動作パラメータの生成
// $s->template_dir = '../templates';
// $s->compile_dir = '../templates_c';

// //message変数に対してこんにちは世界をセットする
// $s->assign('message', 'こんにちは、世界');
// //displayメソッドでテンプレートを呼び出す
// $s->display('smarty_basic.tpl');

require_once 'MySmarty.class.php';

$s = new MySmarty();
$s->assign('message', 'こんにちは、世界');
$s->d();