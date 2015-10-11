<?php
session_start();

include("../connect.php");
if($_SERVER["REQUEST_METHOD"] == "GET")
{
$success = false;
// username and password sent from Form
$username=mysqli_real_escape_string($db,$_GET['username']); 
$password=mysqli_real_escape_string($db,$_GET['password']);

$password=md5($password); // Encrypted Password

$sql="select * from users where username='$username';";
$result=mysqli_query($db,$sql);
if($result->num_rows == 0){
    echo '<script language="javascript">';
    echo 'alert("That Username Doesnt Exist")';
    echo '</script>';
     header('Location: /login.html');
} else {
    
    $sql = "select * from users where username='$username' AND password='$password';";
    $result = mysqli_query($db,$sql);
   
    if ($result->num_rows == 0){
        echo '<script language="javascript">';
        echo 'alert("Incorrect Password")';
        echo '</script>';
        header('Location: /login.html');
        
    } else {
        //echo "Login Successful";
        $_SESSION['loggedin'] ='true';
        $_SESSION['username'] = $username;
        console.log($_SESSION['loggedin']);
        header('Location: /search.php');
    }
    
    
}

}


?>