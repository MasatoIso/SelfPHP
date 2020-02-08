<?php

trait MyTrait1 {
    public function hoge() {
        print 'MyTrait1';
    }
}

trait MyTrait2 {
    public function hoge() {
        print 'MyTrait2';
    }
}

class MyClass {
    use MyTrait1, MyTrait2;
}


$cls  = new MyClass();
$cls->hoge();
