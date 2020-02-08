<?php

function hoge(int $x) {}

try {
    hoge('string');
} catch (Exception $e) {
    print "{$e->getMessage()}";
} catch (Error $e) {
    print "{$e->getMessage()}";
}