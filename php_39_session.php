<?php

// what is session?
// used to manage  information across different pages also it is store sencetive datas

// Verify the user login info 
session_start();
$_SESSION['username'] = "MITESH";
$_SESSION['fav'] = "PROGRAMMING";
echo "we have saved your session";

?>