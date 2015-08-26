<?php

/**
 * test scope
 */
function testScope()
{
    $abc = true;
    if ($abc) {
        $aaa = "123";
    }
    echo $aaa;
}

testScope();