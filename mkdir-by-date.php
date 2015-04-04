<?php 

    function mkdir_by_date($path){
        $path = trim($path, '/') . '/';
	$year = date('Y');
	$month = date('m');
	$day = date('d');
	if(!is_dir($path . $year . '_' . $month)) { 
	     mkdir($path . $year . '_' . $month);
	}
	if(!is_dir($path . $year . '_' . $month . '/' . $day)) {
	     mkdir($path . $year . '_' . $month . '/' . $day);
	}
	return $path . $year . '_' . $day . '/';
        echo $path;
    }

    mkdir_by_date('/Users/liujb/tmp');
