<?php

class FileUtility {
    // Write data to a CSV file
    public static function writeToFile($filename, $data) {
        $file = fopen($filename, 'w');
        foreach ($data as $row) {
            fputcsv($file, $row);
        }
        fclose($file);
    }

    // Read data from a CSV file and return as an array
    public static function readFromFile($filename) {
        $data = [];
        if (file_exists($filename)) {
            $file = fopen($filename, 'r');
            while (($row = fgetcsv($file)) !== false) {
                $data[] = $row;
            }
            fclose($file);
        }
        return $data;
    }
}

?>
