<?php 

    // Y,y,m,d,l,h,i,s,a		
    date_default_timezone_set("Asia/Shanghai");
    
    $date = date('Y/m/d');
    $date = date('Y-m-d', time());

    // mktime integer 
    $time = mktime(16, 59, 59, 3, 15, 2015);
    echo gettype($time)."\n";


    $time =  strtotime('10:38pm April 15 2015');
    echo date('Y-m-d h:i:s-a', $time)."\n";

    
