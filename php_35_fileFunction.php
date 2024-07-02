<?php

$fptr = fopen('php34relate.txt','r');    // only point file not a read file
// echo $fptr; 
if(!$fptr){
    die("Unable to open file");
}else {
    $content = fread($fptr,filesize("php34relate.txt"));   // fread return file content 
    echo $content;
}
fclose($fptr);

?>