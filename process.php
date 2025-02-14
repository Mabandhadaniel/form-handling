<?php
require_once"conn.php";
//if($_POST['Submit']);

$uname = $_POST["username"];
$pass = $_POST['password'];


//echo strlen($uname);



//validations // isset
if(!empty( $uname) && !empty( $pass)){
       echo "Your username is $uname";
       echo "your password is $pass";
       //insertion query
       $insert = "INSERT into users(username,password) VAlUES('$uname','$pass')";
      
       $query = mysqli_query($con,$insert);
       echo"hello";
       if ($query){
        echo"Data inserted successfully";
       }
       echo"Failed to insert data to database";
        }
else
    {
        echo "Please enter your username password";
    }
////echo "Your username is $uname and your password is $pass";
//echo $uname;
//echo "<br>";
//echo $pass;