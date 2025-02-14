<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//connecting to the database{hostname,username,password and database}

$hostname = '127.0.0.1';
$username = 'root';
$password = "password";
$database = "php_crud";

$con = mysqli_connect($hostname,$username,$password,$database);


if ($con->connect_error)
{
    echo"Failed to connect to the datatbase";
}
 echo"Successfully connected to the database";
?>