<?php

/**
 * function hello
 * @return [type] [description]
 */
function hello() {

	echo "hello\n\r";

	/**
	 * function hello2
	 * @return [type] [description]
	 */
	function hello2() {
		echo "2323\r\n";
	}

	// call hello2
	hello2();
}

// call hello
hello();
