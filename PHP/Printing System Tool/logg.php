<?php
session_start();
include "conn.php";
if(isset($_POST['sub']))
    $user=$_POST['user'];
    $password=$_POST['pass'];
$sql="SELECT * FROM users WHERE email='$user' and pass='$password'";
$result=$mysqli->query($sql) or die("Error occured ".$sql);
if($result->num_rows>0) {
    
    $_SESSION['user']=$user;
    header('Location:print.php');
    
}
else{
    echo "<p>INVALID CREDENTIALS</p>";
}
$mysqli->close();
?>  