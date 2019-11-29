<?php

require './hooks/dbConn.hook.php';
require './hooks/dbInsert.hook.php';

$conn = dbConn();

dbInsert($conn, 'users', [
    'name' => 'Babra',
    'email' => 'babra@test.com'
]);