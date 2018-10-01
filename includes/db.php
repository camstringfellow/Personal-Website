<?php

$dbServername = "localhost";
$dbUsername = "camstring1";
$dbPassword = "3makes52";
$dbName = "phone-db";


$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

/*
if($conn) {
    
    echo "Connected";
    
} else {
    
    echo "NOT connected" . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
}
*/

?>