<?php

//$abc = "fucking you";

if (!function_exists('print_global')) {

    $abc = "fucking you";
    function printGlobal()
    {
        $abc = "fucking you";
        global $abc;
        echo 'global variables ' . $abc . "\r\n";

    }
}

//printGlobal();
