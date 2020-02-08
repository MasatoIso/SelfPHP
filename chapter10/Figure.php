<?php
class Figure {
    protected $width;
    protected $height;

    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(): float {
        return 0;
    }
}

// //　抽象クラスの定義
// abstract class Figure {
//     protected $width;
//     protected $height;

//     public function __construct(float $width, float $height) {
//         $this->width = $width;
//         $this->height = $height;
//     }
//     // 抽象メソッドの定義　必ずオーバーライドされる ブロックは記述しない
//     protected abstract function getArea(): float;
// }