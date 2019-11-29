<?php


require './hooks/dbConn.hook.php';
require './hooks/dbinsert.hook.php';
$conn = $conn;
dbinsert($conn ,'users',[
    'name' => 'kash',
    'email'=> 'kash@gmail.com'
]);