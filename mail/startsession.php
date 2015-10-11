<?php// Begin the session
echo "bdhfkgvhdfhkgc,vjbsdkj,v";
session_start();


// Use session variables
$_SESSION['username'] = $username;
$_SESSION['isLoggedIn'] = true;

// E.g. find if the user is logged in

if($_SESSION['username']) {
    // Logged in
}

else {
    //Not logged in
}

?>