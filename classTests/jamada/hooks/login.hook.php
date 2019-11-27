<?php
$users_file = __DIR__ . '/../storage/users/users.json';

/**
 * @return Boolean 
 */
function checkUser($email){
    global $users_file;
    $users_list = file_get_contents($users_file);
    $users_list = json_decode($users_list);

    $if_exists = false;
    // checking fr the email
    foreach($users_list as $user) {
        if($user->username === $email){
            $if_exists = true;   
            break;         
        } else {
            $if_exists = false;
            continue;
        }
    }
    return $if_exists;
}

/**
 * @param Array $user
 */
function verifyUser($v_user){
    global $users_file;
    $users_list = file_get_contents($users_file);
    $users_list = json_decode($users_list);

    $if_exists = false;
    // checking fr the email
    foreach ($users_list as $user) {
        if ($user->username === $v_user['username'] 
                && $user->password === $v_user['password']) {
            $if_exists = true;
            break;
        } else {
            $if_exists = false;
            continue;
        }
    }
    return $if_exists;
}