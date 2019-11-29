<?php

$conn= mysqli_connect('localhost','root','');
if(!$conn){
    exit();
    
}
echo "connected to db";
