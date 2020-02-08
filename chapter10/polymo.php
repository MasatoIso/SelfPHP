<?php

require_once 'ITriangle.php';
require_once 'Square.php';

$tri = new Triangle(5, 10);
$squ = new Square(5, 10);

print $tri->getArea();
print $squ->getArea();