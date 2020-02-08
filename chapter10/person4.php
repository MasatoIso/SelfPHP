<?php
class Person {
    public $firstName;
    public $lastName;

    // コンストラクタ（インスタンス生成時に実行される）定義する
    public function __construct(string $firstName, string $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function show() {
        print "<p>僕の名前は{$this->lastName}{$this->firstName}です</p>";
    }
}