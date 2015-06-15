<?php

class Read_csv
{
    static $result = array(
        0 => array(0, 'success'),
        1 => array(1, 'file not find'),
        2 => array(2, 'file not find'),
    );

    /**
     * 读取文件
     */
    function read_file($file_path)
    {

        if (!file_exists($file_path)) {
            return $this->result[1];
        }

        $ret = array();
        $fs = fopen($file_path, 'r');

        while (!feof($fs)) {
            $row_data = fgets($fs);
            if ($row_data && !empty($row_data)) {
                $row_data = str_replace("\n", "", $row_data);
                $row_array = explode(',', $row_data);
                $ret[] = $row_array;
            }
        }
        fclose($fs);

        return $ret;
    }


    /**
     * @param $row
     */
    private function _read_row($row)
    {

    }

}   
