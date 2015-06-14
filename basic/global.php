<?php 
	$file = 42;
	function meanningOfLife(){
		global $file;
		echo "Menning of the life is ".$file;
	};
	meanningOfLife();
?>