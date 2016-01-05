<?php

// $resource = fopen("./ajaxHandler.php","r");

$ss = file_get_contents("./readme.md");
echo mb_strlen($ss,"gbk");
// $streamData = file_get_contents('php://input');


// echo filesize('./ajaxHandler.php');