<?php
	#
	# author:liujb
	# 2014-05-23
	# 
	$testing; //defined an variable not init
	echo "is null? ".is_null($testing)."\n"; //check if null
    
    $testing = "fuck";
    echo "is a string? ".is_string($testing)."\n";

    $testing = 5;
    echo "is an integer? ".is_integer($testing)."\n";

    $testing = 5.023;
    echo "is an float? ".is_float($testing)."\n";

    $testing = true;
    echo "is a boolean? ".is_bool($testing)."\n";

    $testing = array('a' => "aa", 'b' => "bb");
    echo "is an array? ".is_array($testing)."\n";

    echo "is an numeric? ".is_numeric($testing)."\n";

    echo "is resuorce? ".is_resource($testing)."\n";

    echo "is an array? ".is_array($testing)."\n";
?>
