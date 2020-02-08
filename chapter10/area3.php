<?php

class Area {
    const PI = 3.14;

    public static function circle(float $radius): float {
        // クラス定数にアクセスするときも::を使う　selfはクラス自身を表す
        return pow($radius, 2) * self::PI;
    }
}