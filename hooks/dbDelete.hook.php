<?php

/**
 * Delete record from database
 * Example 
 *   dbDelete($conn, 'tablename', [
 *      'column' => 'value' 
 *  ])
 
 * @param resource $conn
 * @param string $table
 * @param array $condition
 * @return void
 */
function dbDelete(
    $conn,
    $table,
    $condition
) {

    foreach ($condition as $column => $value) {

        $sql = 'DELETE FROM ' . $table .
            ' WHERE(' . $column . '=\'' . $value . '\')';
        if (mysqli_query($conn, $sql) == false) {
            throw new Exception('Failed to delete record:
             ' . mysqli_error($conn));
            return false;
        }
    }

    return true;
}