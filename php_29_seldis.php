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

$sql = "SELECT * FROM `date`";
$result = mysqli_query($conn, $sql);

//find the number of records returns
$num = mysqli_num_rows($result);
echo $num;
echo "</br>";

//display rows return by sql query
if ($num > 0) {
    // $row=mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "</br>";
    // $row=mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "</br>";
    // $row=mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "</br>";

    //using loop
    while ($row = mysqli_fetch_assoc($result)) {
        // echo var_dump($row);
        echo $row['srno'] . "} hello " . $row['name'] . " your email id is  " . $row['email'];
        echo "</br>";
    }
}