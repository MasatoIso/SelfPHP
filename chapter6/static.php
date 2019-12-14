<?php

//ローカル変数はその関数の中でしか意味を持たない。
//関数の処理が終わると、その変数の変更は破棄される。
//ローカル変数にstaticを宣言すると、静的変数となり、変更が破棄されない。
function checkStatic() :int {
    static $x = 0;
    return ++$x;
}

print checkStatic();
echo "<br/>";
print checkStatic();
echo "<br/>";
//静的変数はローカル変数なので、グローバル変数を呼び出しても意味がない。
print $x;
