<?php

class TriangleFigure {
    public $base;
    public $height;

    public function __construct() {
        // インスタンスのbaseとhtightにそれぞれ１を代入する
        $this->base = 1;
        $this->height = 1;
    }

    public function getArea(): float {
        return $this->base * $this->height / 2;
    }
}