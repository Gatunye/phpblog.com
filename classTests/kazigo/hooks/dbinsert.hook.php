<?php
function dbinsert($conn, $table, $records)
{
    $fields = "";
    $values = "";
    $v_count = count($records);
    $i = 0;
    foreach ($records as $field => $value) {
        $i++;
        if ($i == $v_count) {
            $fields .= "$field";
            $values .= "$value";
        } else {
            $fields .= "$field";
            $values .= "$value";
        }
    }
    $sql = 'insert into ' .
        $table . '(' . $fields . ')' .
        'values (' . $values . ')';
    echo $sql;
    if (mysqli_query($conn, $sql, MYSQLI_ASSOC)) {
        return true;
    } else {
        echo "didnt connect";
        return false;
    }
}