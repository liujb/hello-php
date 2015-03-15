<?php

if (!function_exists('connect_db')) {
    function connect_db()
    {
        $connect = new mysqli("localhost", "root", "liu!@#631959_", "test");
        if (!$connect) {
            echo "Mysql Connect Error!";
        } else {
            echo "mysql success";
        }
        $connect->close();
    }
}
