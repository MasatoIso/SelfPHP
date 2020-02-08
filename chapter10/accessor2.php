<?php

require_once 'TriangleFigure2.php';

$tri = new TriangleFigure();
$tri->setBase(-10);
$tri->setHeight(-10);

print $tri->getArea();