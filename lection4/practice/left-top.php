<?php
$edge = $argv[1];

for ($i = 0; $i < $edge; $i++) {
    for($j = $edge; $j > $i; $j--) {
        echo ' # ';
    }
    echo PHP_EOL;
}

