<?php

class Area {
    // 静的プロパティを定義する
    public static $pi = 3.14;

    public static function circle(float $radius): float {
        return pow($radius, 2) * self::$pi;
    }
}