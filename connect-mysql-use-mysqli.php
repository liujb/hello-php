<?php

//
if (!function_exists('connect_db')) {
    function connect_db() {
        $connect = new mysqli("localhost", "root", "", "test");
        if (!$connect) {
            echo "Mysql Connect Error!";
        } 
        else {
            echo "mysql success";
        }
        $connect->close();
    }
}

connect_db();
