<?php 

function diamond (float $diagonal1, float $diagonal2) :float {
    return $diagonal1 * $diagonal2 / 2;
}

$area = diamond(10, 10);
print $area;
