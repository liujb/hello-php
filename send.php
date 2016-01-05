<?php

/** php 发送流文件
 * @param  String  $url  接收的路径
 * @param  String  $file 要发送的文件
 * @return boolean
 */
function sendStreamFile($url, $file) {

	if (!file_exists($file)) {
		exit("No this files");
	}

	$opts = array(
		'http' => array(
			'method' => 'POST',
			'header' => 'content-type:application/x-www-form-urlencoded',
			'content' => file_get_contents($file),
			"src" => "haiou",
		),
	);

	$context = stream_context_create($opts);
	$response = file_get_contents($url, false, $context);

	exit($response);

}

sendStreamFile('http://xx.xx/fist/partner/dataUpload?src=haiou&sign=09cda323df3b29699d5891fd4e2b770d&timestamp=1446807214&type=1', 'I_1449487802.txt');
// sendStreamFile('http://xxxx:xxx/fist/partner/dataUpload?src=haiou&sign=09cda323df3b29699d5891fd4e2b770d&timestamp=1446807214&type=1', 'I_1449487802.txt');
