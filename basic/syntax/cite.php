<?php
    
    # 值关联    
    $a = 1;
    $b = $a;
    $a = 4;
    echo $a.' '.$b;
    
    # 引用关联
    $c = 5;
    $d = &$c;
    $c = 9;
    echo $d;

    
?>