<?php

class TriangleFigure {
    // private にすることで外部からのアクセスを禁じる
    private $base;
    private $height;

    // コンストラクタで各プロパティを初期化する
    public function __construct() {
        $this-> setBase(1);
        $this-> setHeight(1);
    }
    //  アクセサメソッド　プロパティの値を取得する
    public function getBase() {
        return $this->base;
    }

    // アクセサメソッド　受け取った値をプロパティにセットする
    public function setBase(float $base) {
        if ($base > 0) {
            $this->base = $base;
        }
    }
    // ゲッターメソッド
    public function getHeight() {
        return $this->height;
    }

    // セッターメソッド
    public function setHeight(float $height) {
        if ($height > 0) {
            $this->height = $height;
        }
    }

    public function getArea() {
        return $this->getBase() * $this->getHeight() /2;
    }
}