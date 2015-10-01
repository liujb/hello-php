<?php

if (!function_exists('connect_db')) {

	function connectDb() {

		$connect = new mysqli("localhost", "root", "", "data");
		if (!$connect) {
			echo "Mysql Connect Error!\r\n";
		} else {
			echo json_encode($connect);
		}
		$connect->close();
	}
}

connectDb();
