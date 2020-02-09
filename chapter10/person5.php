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

    // オブジェクトを破棄する際に実行される
    public function __destruct() {
        print '<p>'.__CLASS__.'オブジェクトが破棄されました。</p>';
    }

    public function __toString() {
        return $this->lastName.$this->firstName;
    }

    public function __debugInfo() {
        return [
            '名' => $this->firstName,
            '姓' => $this->lastName
        ];
    }
}