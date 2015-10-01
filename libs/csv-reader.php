<?php

/**
 * csv reader class
 * Author: liujiangbei88@gmail.com
 */
class CSVReader
{
  static $result = array("success" => array(0, 'success'), "fileNotExists" => array(1, 'file not find'),);
  
  /**
   * Get csv file
   * @param [type] $fileName [description]
   */
  public function Get($fileName) {

    if (!file_exists($fileName)) {
      return $this->result["fileNotExists"];
    }
    
    $ret = array();
    $resource = fopen($fileName, 'r') or die("file read failed.");
    
    while (!feof($resource)) {
      $line = fgets($resource);

      if (empty($line)) {
        continue;
      }

      $line = str_replace("\n", "", $line);
      $tmpArr = explode(',', $line);
      $ret[] = $tmpArr;
    }

    fclose($resource);
    
    return $ret;
  }

  
}
