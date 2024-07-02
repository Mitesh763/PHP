<?php
echo "Welcome in tutorial 24";
/*
ways to connect to a MySQL Databases
1. MySQL extension
2. PDO
*/

//connecting to the Database
$servername = "**";
$username = "**";
$password = "**";

// create Connection object
$conn = mysqli_connect($servername, $username, $password);

// die if connection was not successfully
if (!$conn) {
    die("Error! Failed to Connect Database!! : "  . mysqli_connect_error());
}
echo "</br>Connection was successfully";