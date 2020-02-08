<?php

abstract class Animal {
    public abstract function outputVoice(): string;
}

class Cat extends Animal {
    // これ以上継承しないようにfinalをつける
    public final function outputVoice(): string {
        return 'ニャア';
    }
}

class Dog extends Animal {
    public final function outputVoice(): string {
        return 'ワン';
    }
}

$cat = new Cat();
$dog = new Dog();
print $cat->outputVoice() . '<br>';
print $dog->outputVoice() . '<br>';