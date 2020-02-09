<?php
namespace chapter10;
// バックスラッシュで記述する
//　必ずファイルの先頭行(<?phpを除く)に記述する

class MyClass {
    public static function showClass() {
        // __CLASS__でクラスの完全修飾名を取得できる。
        print __CLASS__;
    }
}