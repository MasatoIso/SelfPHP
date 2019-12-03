<?php
$str = "彼の電話番号は0399-89-9785、私のは0398-99-1234です。郵便番号はどちらも687-1109です。";

//preg_match関数は1つ目がマッチした時点で終了する
//正規表現は''で囲む　""だと/がエスケープ文字として扱われてしまう
if(preg_match('/([0-9]{2,4})-([0-9]{2,4})-([0-9]{4})/', $str, $data)){
    print "電話番号: {$data[0]}<br/>";
    print "市外局番: {$data[1]}<br/>"; 
    print "しない局番: {$data[2]}<br/>";
    print "加入者番号: {$data[3]}<br/>";
}
//preg_matchの戻り値は1か0　マッチしたか、していないか

if(preg_match('/([0-9]{2,4})-([0-9]{2,4})-([0-9]{4})/', $str, $data, PREG_OFFSET_CAPTURE)){
    print_r($data);
    print "<br/>";
}

//文字列のマッチする対象全てを取得する場合はpreg_match_all関数を用いる
if(preg_match_all('/([0-9]{2,4})-([0-9]{2,4})-([0-9]{4})/', $str, $data, PREG_SET_ORDER)){
    //マッチしたものを多次元配列になっており、foreach文で繰り返す
    foreach($data as $item){
        print "電話番号: {$item[0]}<br/>";
        print "市外局番: {$item[1]}<br/>"; 
        print "しない局番: {$item[2]}<br/>";
        print "加入者番号: {$item[3]}<hr/>";
    }
    
}

?>