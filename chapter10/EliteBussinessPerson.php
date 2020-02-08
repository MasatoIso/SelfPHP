<?php

require_once './BussinessPerson.php';

class EliteBussinessPerson extends BussinessPerson {
    public function work() {
        print "<p>{$this->lastName}{$this->firstName}はバリバリ働いています。</p>";
    }
}