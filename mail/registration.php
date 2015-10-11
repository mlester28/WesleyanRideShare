<?php
include("../connect.php");


// username and password sent from Form
$username=mysqli_real_escape_string($db,$_POST['username']); 
$password=mysqli_real_escape_string($db,$_POST['password']);
$phone_number=mysqli_real_escape_string($db,$_POST['phone_number']); 
$password=md5($password); // Encrypted Password
$sql="Insert into users(username,password,phone_number) values('$username','$password','$phone_number');";
$result=mysqli_query($db,$sql);
echo "Registration Successful";
//set session variable to logged in, username to $username

//then redirect to search page
header('Location: /login.html');
?>