<?php
    # Set default timezone
    date_default_timezone_set('UTC');

    echo time()."<br>";

    $date = date('Y-m-d H:i:s',time());
    echo $date;

    echo gettype($date);
