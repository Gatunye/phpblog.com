<?php


function dbGet($conn, $table, $fields_list = false)
{

    $sql = "SELECT * FROM $table";
    if ($fields_list) {
        $fields = " ";
        foreach ($fields_list as $value) {
            $fields .= " " . $value;
        }
        $sql = "SELECT $fields FROM $table";
    }
    $result = mysqli_query($conn, $sql);
    if ($result != false) {
        mysqli_fetch_assoc($result);
        $records = array();
        if (mysqli_num_rows($result) > 0) {
            while ($rows = mysqli_fetch_assoc($result)) {
                $records[] = $rows;
            }

            return $records;
        }
    }
}