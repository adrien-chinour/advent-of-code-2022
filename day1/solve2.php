<?php

$i = 0;
$calories = [];

foreach(file(__DIR__ . '/input', FILE_IGNORE_NEW_LINES) as $line) {
    if ($line === '') $i++;
    isset($calories[$i]) ? $calories[$i] += (int)$line : $calories[$i] = (int)$line;
}

sort($calories);

var_dump(array_sum(array_slice($calories, $i-2, 3)));
