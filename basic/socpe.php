<?php

/**
 * test scope
 */
function testScope() {
	$abc = true;
	if ($abc) {
		$aaa = "123";
	}
	echo $aaa;
}

// output 123
// php是函数作用域，非块级作用域
testScope();
