<?php

// include 'dbcommon.php';
require 'dbcommon.php';

$sql= "SELECT * FROM `date`";
$result = mysqli_query($conn,$sql);

//find the number of records returns
$num = mysqli_num_rows($result);
echo $num;
echo "</br>";

while ($row= mysqli_fetch_assoc($result)) {
    // echo var_dump($row);
    echo $row['srno']."} hello " .$row['name'] . " your email id is  " . $row['email'];
    echo "</br>";
   } 

?>