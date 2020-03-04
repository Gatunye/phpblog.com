<?php

/**
 * dbConn function for database conncetion 
 *
 * @param string $host
 * @param string $user
 * @param string $password
 * @param string $database
 * @return void
 */
function dbConn(
    $host = 'localhost',
    $user = 'root',
    $password = '',
    $database = 'class_db'
) {
    $conn = mysqli_connect(
        $host,
        $user,
        $password,
        $database
    );

    if ($conn != true) {
        die("Failed to conect to 
                database: <br/>" .
            mysqli_error($conn));
    }
    return $conn;
}