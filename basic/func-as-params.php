<?php

function funcOne($num, $handle) {
	$handle($num);
}

function funcTwo($num) {
	echo $num . "\r\n";
}

$abc = "funcTwo";


echo funcOne(123234, 'funcTwo');