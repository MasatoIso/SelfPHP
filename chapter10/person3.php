<?php
class Person {
    // クラスプロパティ　publicはアクセス修飾子
    public $firstName;
    public $lastName;

    // メソッドにもアクセス修飾子をつける
    public function show() {
        // プロパティにアクセスするときは$はいらない　$thisはインスタンス自身を指す
        print "<p>僕の名前は{$this->lastName}{$this->firstName}です</p>";
    }
}