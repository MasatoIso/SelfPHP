<?php
require_once './person5.php';

// extends 親クラス　で継承することができる
class BussinessPerson extends Person {

    public function work() {
        print "<p>{$this->lastName}{$this->firstName}は働いています。</p>";
    }
}