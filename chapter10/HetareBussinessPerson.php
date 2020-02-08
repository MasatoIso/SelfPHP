<?php
require_once 'BussinessPerson.php';

class HetareBussinessPerson extends BussinessPerson {
    public function work() {
        // 親のメソッドにアクセス
        parent::work();
        // 親クラスのworkに以下の処理を追加する
        print 'ただしボチボチと...';
    }
}