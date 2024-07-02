<?php

echo "Welcome to php 16 tutorial in functions</br>";
function processmarks($marksArr){
    $sum=0;
    foreach ($marksArr as $value) {
        $sum+=$value;
    }
    return $sum;
}
function averageMark($marksArr){
    $sum=0;
    $i=1;
    foreach ($marksArr as $value) {
        $sum+=$value;
        $i++;
    }
    return $sum/$i;
}

$arrMarks= [1,2,3,4,5,6,4];
$sumOfMarks = processmarks($arrMarks);
echo "Sum of marks $sumOfMarks </br>";
$avg= averageMark($arrMarks);
echo "Average marks $avg"
?>