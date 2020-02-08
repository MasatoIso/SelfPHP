<?php

class MyClass {
    
    public static function square($width, $height) {
        return $width * $height;
    }
}

print MyClass::square(10, 10);