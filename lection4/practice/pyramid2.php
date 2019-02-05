<?php

$height = $space = $argv[1];

while ($space--) {
    $spaces = str_repeat(' ', $space);
    $stars = str_repeat('* ', $height - $space);
    echo $spaces . $stars . PHP_EOL;
}