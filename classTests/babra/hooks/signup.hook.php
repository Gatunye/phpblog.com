<?php

/**
 * This funtion will create a file if it does not exist
 * @param String $filename
 * @return Boolean true | false
 */
function createFile($filename){
    if(file_exists($filename)){
        return false;
    } else {
        $fp = fopen($filename, 'w');
        fclose($fp);
        return true;
    }
}



/**
 * @param Array $user = array(
 *                  'username' => '',
 *                  'password' => '' 
 *              );
 * @return Boolean true if the user was added false if the user 
 *          was not added
 * 
 * 
 */
function saveUser($user)
{
    // users file 
    $users_file = __DIR__.'/../storage/users/users.json';

    if(createFile($users_file)) {
        $new_user = [$user];
        $new_user = json_encode($new_user);
        file_put_contents($users_file, $new_user);
        return true;
    } else {
        $users_list = file_get_contents($users_file);
        $users_list = json_decode($users_list);
        array_push($users_list, $user);
        $users_list = json_encode($users_list);
        file_put_contents($users_file, $users_list);
        return true;
    }

}

