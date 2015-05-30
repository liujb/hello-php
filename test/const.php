<?php
	function double($i){
		return $i * 2;
	};
	$b = $a = 5;
	$c = $a++;
	$e = $d = ++$b;
	$f = double($d++);
	$h = $g += 10;

	echo "$a";
	echo "<br/>\$a"
?>