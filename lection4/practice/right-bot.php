<?php

$edge = $argv[1];

for ($i = 0; $i < $edge; $i++) {
    for ($j = $edge - 1; $j > $i; $j--) {
        echo '   ';
    }

    for ($k = 0; $k <= $i; $k++) {
        echo ' # ';
    }
    echo PHP_EOL;
}