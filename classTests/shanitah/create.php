<?php

echo "Are you sure you want to do this? Type 'yes' to continue: ";
$handle = fopen("php://stdin","rb");
$line = fgets($handle);
if(trim($line) != 'yes'){
    echo "\n$line.....";
} 
echo "\n";
echo "Thank you for, continuing... \n";