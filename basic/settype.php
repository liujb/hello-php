<?php
    $var = "123"; 
    echo "data-type: ".gettype($var)."\n";

    settype($var, 'bool'); // set data type
    echo "data-type: ".gettype($var)."\n";

    $numVar = (integer) $var; // change data type
    echo "data-type: ".gettype($numVar)."\n";
?>