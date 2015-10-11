<?php
session_start();
include("../connect.php");

$uniqueid = $_SESSION['uniqueid'];
$sql="delete from available_rides where unique_id='$uniqueid';";
$result=mysqli_query($db,$sql);

echo "Record deleted successfully";
echo "unique_id is".$uniqueid;


//set session variable to logged in, username to $username

//then redirect to search page
//header('Location: /login.html');
?>