<?php
    echo "welcome to tutorial 20 scope";
    $a = 98;

    function variable(){
        // $a = 97;
        global $a;
        $a=1000;
        echo "</br>In function $a </br>";
    }

    variable();
    echo "$a";

    echo "</br>";
    echo var_dump($GLOBALS);
?>