<?php

require_once 'MachineTrait.php';

class Fax {
    // MachineTraitトレイとをインポートする
    use MachineTrait;

    public function send() {
        print 'sending Fax....Sended!';
    }
}

$fx = new Fax();
$fx->run();
$fx->send();