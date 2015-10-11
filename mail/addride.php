<?php
session_start();
include("../connect.php");

if(isset($_SESSION["username"])){
    // username and password sent from Form
    $start=mysqli_real_escape_string($db,$_POST['start']);
    $end=mysqli_real_escape_string($db,$_POST['end']); 
    $date=mysqli_real_escape_string($db,$_POST['date']);
    $comment=mysqli_real_escape_string($db,$_POST['comment']); 
    $username = $_SESSION['username'];
    
    $sql="Insert into available_rides(date,start_loc,end_loc,poster,comments) values('$date','$start','$end','$username','$comment');";
    $result=mysqli_query($db,$sql);
    header('Location: /search.php');
}
else{
    
    header('Location: /search.php');
    echo("<script>window.alert('You are not logged in');</script>");
    
}

?>