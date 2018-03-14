<?php
require "conn.php";
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$dob=$_POST["dob"];
$email=$_POST["email"];  
$pass=$_POST["pass"];
$mob=$_POST["mob"];




$sql="INSERT INTO `users`     VALUES  ('$fname','$lname','$dob','$email','$pass','$mob')";
$result=$mysqli->query($sql) or die("Error error ocured try again");
echo "Sucessfully Registered now click the below link to LOGIN ";
?>

<h2><a href="login.php">LOGIN</a></h2>