<?php

$edge = $argv[1];

for ($i = 0; $i < $edge; $i++) {
    for ($j = 0; $j < $edge; $j ++) {
        echo ' # ';
    }
    echo PHP_EOL;
}
