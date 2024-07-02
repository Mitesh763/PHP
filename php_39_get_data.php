<?php

// Verify the user login info 
session_start();
if (isset($_SESSION['username'])) {
    echo "Welcome " . $_SESSION['username'] ;
    echo "</br> Your favorite category is : " . $_SESSION['fav'];
    echo "</br>";
}
 else{
    echo "Please Log-in to continue!";
 }

?>