<?php
class Area {

    // staticで静的メソッドになる　静的メソッドでは$thisは使えない
    public static function circle(float $radius): float {
        return pow($radius, 2) * 3.14 ;
    }
}