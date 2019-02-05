<?php

$height = $space = $argv[1];

for ($i = 0; $i < $height; $i++) {
    for ($k = --$space; $k > 0; $k--) {
        echo ' ';
    }

    for($j = 0; $j <= $i; $j++) {
        echo '* ';
    }
    echo PHP_EOL;
}