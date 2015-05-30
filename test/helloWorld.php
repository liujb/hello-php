<?php
	#$a = _SERVER["SystemRoot"];
	echo "Hello PHP";

	#可变函数
	function foo(){
	    echo "<br/>In foo()\n";
	}

	$func = "foo";
	$func(); //可变函数
?>
