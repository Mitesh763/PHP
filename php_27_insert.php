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

// inserted through variables

// $srno=1; x
// $name="deven";
// $age=21;
// $gender="male";


// inserting data in table
$sql = "INSERT INTO `mytable` (`srno`, `name`, `age`, `gender`) VALUES ('2', 'jaypal', '21', 'male')";
$result = mysqli_query($conn, $sql);

// check data inserted or not
if ($result) {
    echo "data inserted in table successfully!!</br>";
} else {
    echo "data not insert because -->" . mysqli_error($conn);
}