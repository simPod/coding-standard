<?php

declare(strict_types=1);

$foo = -1;

if (2 - $foo === 3) {
    echo -$foo;
}

$x = -PHP_INT_MIN;
