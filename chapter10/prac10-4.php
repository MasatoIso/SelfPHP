<?php
class MyClass {
    protected $data;

    public function __construct(string $data) {
        $this->data = $data;
    }

    public function getData(): string {
        return $this->data;
    }
}

class PracClass extends MyClass {
    public function getData(): string {
        parent::getData();
        return '[' . parent::getData() . ']'; 
    }
}

$obj = new PracClass('Composer');
print $obj->getData();