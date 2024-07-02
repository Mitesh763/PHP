<?php

$fptr = fopen('php34relate.txt','r');    // only point file not a read file

// echo fgets($fptr);              // return line by line of file 
 // echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
// echo var_dump(fgets($fptr));
// using while loop we will read whole content of file
// while ($a = fgets($fptr)) {
//    echo $a;
// }


// read file character by characters
echo fgetc($fptr);
while ($a = fgetc($fptr)) {
    echo $a;

    if($a == "."){
        break;
    }
 }

 fclose($fptr);

?>