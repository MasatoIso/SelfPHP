<?php
for($i = 1; $i <10; $i++){
    for($j = 1; $j <10; $j++){
        $result = $i * $j;
        if ($result > 40 ){goto end;}  //ラベルに飛ばす
        print "${result} &nbsp;";
    }
    print '<br />';
}
end :  //任意の名前を付けられる　コロンをつける

//gotoではループの外に飛ばすが、関数やクラスの中や別のループの中に飛ばすことはできない。　また、別ファイルも同じ。
?>