<?php

/**
 * dbInsert function to insert records
 * into the database 
 * Example 
 * ******* dbInsert($conn, 'tablename', [
 * *******      'column_name' => 'value',
 * *******      'column_name' => 'value',
 * *******      'column_name' => 'value'
 * *******  ]);
 * @param resource $conn database conncetion
 * @param string $table
 * @param array $records
 * @return boolean
 */
function dbInsert(
    $conn,
    $table,
    $records
) {

    $fields = "";
    $values = "";
    $v_count = count($records);
    $i = 0;
    foreach ($records as $field => $value) {
        $i++;
        if ($i  == $v_count) {
            $fields .= "$field";
            $values .= "`$value`";
        } else {
            $fields .= "$field,";
            $values .= "`$value`,";
        }
    }
    $sql = 'INSERT INTO ' .
        $table . '(' . $fields . ')' .
        'VALUES(' . $values . ')';

    echo $sql;
    if (mysqli_query($conn, $sql, MYSQLI_ASSOC)) {
        return true;
    } else {
        throw new Exception('Failed to insert Record: \n' . mysqli_error($conn));
        return false;
    }
}