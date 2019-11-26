<?php

require './config/config.php';
require_once './hooks/signup.hook.php';
require_once './hooks/login.hook.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    
    if(isset($_POST['login_form'])){
        //process the login
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        
        if(verifyUser(['username' => $email, 'password' => $password])){
            echo "You have been logged in successfully";
        } else {
            echo "Please enter valid username and password";        
        }

    } elseif(isset($_POST['signup_form'])) {
        // proccess the signup
        $email = $_POST['email'];

        if(checkUser($email)){
            header('Location: ./signup.php?err=' . $email . '
                     has already been taken');
            exit();
        }
        $password = md5($_POST['password']);

        if(saveUser(['username' => $email, "password" => $password])){
            header('location: ../blog.php');
            exit();
        } else {
            $error_msg = "Please try agin letter";
            $error_msg = base64_encode($error_msg);
            header('location: ../some_thing_went_wrong.php?err='
                    .$error_msg);
            exit();
        }
    } else{
        //something was wrong
        echo "No form has been submitted";
        var_dump($_POST);
    }

    
 } else {
    //redirect the user to the home page
    header("location: ".BASE_URL);
}