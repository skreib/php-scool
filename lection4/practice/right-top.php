<?php

$edge = $argv[1];

for ($i = 0; $i < $edge; $i++) {
    for ($k = 0; $k < $i; $k++) {
        echo '   ';
    }

    for ($j = 0; $j < $edge - $i; $j++) {
        echo ' # ';
    }
    echo PHP_EOL;
}