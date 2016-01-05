<?php

// var_dump($_GET);

$queryString = $_GET["data"];

if (strlen($queryString)) {
	echo "get data";
} else {
	echo "not get";
}