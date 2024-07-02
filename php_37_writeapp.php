<?php


// // write operation in file
// $fptr = fopen('php34relate1.txt','w');
// fwrite($fptr,"JAY SHREE SIYA-RAM\n");
// fwrite($fptr,"JAY SHREE RADHA-KRISHNA\n");
// fwrite($fptr,"JAY SHREE HANUMAN DADA\n");
// fclose($fptr);

// appending operation in file
$fptr = fopen("php34relate1.txt","a");
fwrite($fptr,"JAY JAY SHREE RAM\n");
fclose($fptr);

?>