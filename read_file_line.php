<?php

if (!function_exists('getByLine')) {
    function getByLine($file, $func = null)
    {
        $startTime = time();
        if (!file_exists($file)) {
            exit("File not found.");
        }

        $flag = 0;
        $item = '';
        $tmpArray = array();

        $handle = fopen($file, "r");
        while (!feof($handle)) {
            $item = trim(fgets($handle));

            if (strlen($item) <= 0) {
                continue;
            }

            array_push($tmpArray, intval($item));
            if ($flag == 99) {
                $str = implode(',', $tmpArray);
                echo 'select * from Passenger where passengerId in(' . $str . ');' . "\r\n";
                $flag = 0;
                $tmpArray = array();
            }

            $flag++;
        }

        if ($flag > 0 && !empty($tmpArray)) {
            $str = implode(',', $tmpArray);
            echo 'select * from Passenger where passengerId in(' . $str . ');' . "\r\n";
            unset($tmpArray);
            unset($flag);
        }

        fclose($handle);
        $endTime = time();

        echo $endTime - $startTime;
    }
}

getByLine("./passenger-get-balance.txt");
