<?php

$abc = "fucking you";

if (!function_exists('print_global')) {

    function printGlobal()
    {
        // echo $abc; // 语法错误
        global $abc;
        echo 'global variables ' . $abc . "\r\n";

    }

}

printGlobal();
