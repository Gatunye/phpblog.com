<?php

$users = [];

echo "users befor adding: " . count($users);
$addUser = function($user) use ($users) {
    array_push($users, $user);
    print_r($users);
};

$addUser("Dpahine");
$addUser("James");
$addUser("Mark");
echo "users after adding: " .count($users);

print_r($users);