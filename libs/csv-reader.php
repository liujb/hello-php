<?php

/**
 * csv reader class
 * Author: liujiangbei88@gmail.com
 */
class CSVReader {

	// output errors
	static $errors = array(
		"success" => array(0, 'success'),
		"fileNotExists" => array(1, 'file not find'),
	);

	/**
	 * Get csv file
	 * @param [type] $fileName [description]
	 */
	public function Get($fileName, $haveHeader = false) {

		if (!file_exists($fileName)) {
			return $this->errors["fileNotExists"];
		}

		$ret = array();
		$flag = true;
		$resource = fopen($fileName, 'r') or die("file read failed.");

		while (!feof($resource)) {
			$line = fgets($resource);
			$line = str_replace("\n", "", $line);

			if (empty($line)) {
				continue;
			}

			$tmpArr = explode(',', $line);

			// 不带header
			if (!$haveHeader) {
				$ret[] = $tmpArr;
				continue;
			}

			// 带header
			if ($flag) {
				$header = $tmpArr;
				$flag = false;
				continue;
			}

			if (count($header) !== count($tmpArr)) {
				// 中间有脏行
				continue;
			}

			$tmp = array();
			foreach ($header as $index => $val) {
				$tmp[$val] = $tmpArr[$index];
			}
			$ret[] = $tmp;
      unset($tmp);
		}

		fclose($resource);
		return $ret;
	}


}
