<?php

/**
 * test unset
 * @return [type] [description]
 */
function unset_test() {
	$a = "abc";
	$b = &$a;

	unset($a);
	// echo $a . "\r\n";
	echo $b . "\r\n";
}

unset_test();
