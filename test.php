<?php

require './hooks/dbConn.hook.php';
require './hooks/dbInsert.hook.php';
require './hooks/dbDelete.hook.php';

$conn = dbConn();

// dbInsert($conn, 'users', [
//     'name' => 'Babra',
//     'email' => 'babra@test.com'
// ]);

if (dbDelete($conn, 'users', [
    'name' => 'Babra'
])) {
    echo 'record has been deleted';
}