<?php

// php標準のインターフェース カスタム反復処理をする
class FriendList implements IteratorAggregate {
    public $version = '1.0.0';
    public $name = '友人リスト';

    private $list = [];

    public function getIterator(): Traversable {
        return new ArrayIterator($this->list);
    }

    public function add(Person $p) {
        $this->list[] = $p;
    }

    // オブジェクトを関数の形式で呼び出すと実行される
    public function __invoke($index) {
        return $this->list[$index];
    }

    public function __clone() {
        foreach ($this->list as &$value) {
            $value = clone $value;
        }
    }
}