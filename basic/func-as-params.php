<?php

function funcOne($num, $handle) {
	$handle($num);
}

function funcTwo($num) {
	echo $num . "\r\n";
}

echo funcOne(123234, 'funcTwo');