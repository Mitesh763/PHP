<?php
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
} else {
    echo "</br>Connection was successfully</br>";
}

//create db
$sql = "CREATE DATABASE demoFirst3";
$result = mysqli_query($conn, $sql);

// create database
if ($result) {
    echo "Your datebase create successfully!!</br>";
} else {
    echo "Your datebase not create because -->" . mysqli_error($conn);
}

echo "</br>The result is: ";
echo var_dump($result);