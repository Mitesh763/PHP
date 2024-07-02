<?php

//connecting to the Database
$servername = "**";
$username = "**";
$password = "**";
$database = "**";

// create Connection object
$conn = mysqli_connect($servername, $username, $password, $database);

// die if connection was not successfull
if (!$conn) {
    die("Error! Failed to Connect Database!! : "  . mysqli_connect_error());
} else {
    echo "</br>Connection was successfull</br>";
}

//create table in db
$sql = "CREATE TABLE `table_1` (`srno` INT(11) NOT NULL , `name` VARCHAR(11) NOT NULL , `age` INT(11) NOT NULL)";

$result = mysqli_query($conn, $sql);

// create database
if ($result) {
    echo "Your table create successfully!!</br>";
} else {
    echo "Your table not create because -->" . mysqli_error($conn);
}