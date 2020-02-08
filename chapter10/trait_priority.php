<?php

class MyParent {
    public function hoge() {
        print 'MyParent!';
    }
}

trait MyTrait {
    // public function hoge() {
    //     print 'MyTrait!';
    // }
}

class MyChild extends MyParent {
    use MyTrait;

    // public function hoge() {
    //     print 'MyChild!';
    // }
}

$cls = new MyChild();

// ①自分のメソッド→②トレイトメソッド→③継承元のメソッド
$cls->hoge();