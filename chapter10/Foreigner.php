<?php
require_once './person5.php';

class Foreigner extends Person {
    public $middleName;

    public function __construct(string $firstName, string $middleName, string $lastName) {
        parent::__construct($firstName, $lastName);
        $this->middleName = $middleName;
    }

    public function show() {
        print "<p>僕の名前は{$this->firstName}.{$this->middleName}.{$this->lastName}です。</p>";
    }
}