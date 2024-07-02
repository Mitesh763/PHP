<?php

//connecting to the Database
$servername = "**";
$username = "**";
$password = "";
$database = "**";

// create Connection object
$conn = mysqli_connect($servername, $username, $password, $database);

// die if connection was not successfull
if (!$conn) {
    die("Error! Failed to Connect Database!! : "  . mysqli_connect_error());
} else {
    echo "</br>Connection was successfull</br>";
}