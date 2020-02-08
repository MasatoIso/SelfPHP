<?php

interface IFax {
    function send();
}

interface IPrinter {
    function print();
}

trait FaxTrait {
    public function send() {
        print 'sending Fax...Sended!';
    }
}

trait PrinterTrait {
    public function print() {
        print 'printing...completed!';
    }
}

// interfaceの実装とトレイとの利用
class FaxPrinter implements IFax, IPrinter {
    use FaxTrait, PrinterTrait;
}

$fp = new FaxPrinter();
$fp->send();
$fp->print();
