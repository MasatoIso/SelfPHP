<?php 
//書き込む内容をdata配列にセットしている
$data[] = date('Y/m/d H:i:s');
$data[]= $_SERVER['SCRIPT_NAME'];
$data[]= $_SERVER['HTTP_USER_AGENT'];
$data[]= $_SERVER['HTTP_REFERER'];

//fopenの前に@（エラー演算子）をつけることで、エラーメッセージが表示されなくなる
//or演算子をつけることで、左辺がfalseの際に右辺が実行される die($string)
$file = @fopen('access.log', 'ab') or die('ファイルを開けませんでした!');
//ファイルへの同時書き込みが生じないようにファイルをロックする 今回は排他ロックなので他者の読み込みまで禁止する
flock($file, LOCK_EX);
//implodeは配列の各要素を結合する
//fwriteのエイリアスにfputsがある。
fwrite($file, implode("\t", $data) . "\n");
//ファイルをロックしたら、必ず解除する
flock($file, LOCK_UN);

fclose($file);
print 'アクセスログを記録しました。';

//fopen, fcloseでファイルを開閉を行う
//fopen関数の戻り値はファイルハンドル
//その戻り値（ファイルハンドル）を変数fileに入れて別のファイル関数の引数として渡す
