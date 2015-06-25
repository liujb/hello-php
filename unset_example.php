<?php

/**
 * function
 */
function unset_example()
{
    $a = 'abc';
    $b = &$a;
    unset($a);
    echo $b . "\r\n";
}

unset_example();
